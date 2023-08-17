<?php

namespace App\Controller\Prof\Security;

use App\Entity\ForgotePassword;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\ForgotePasswordType;
use App\Form\UserType;
use App\Security\ProfLoginFormAuthenticator;
use App\Services\Mail;
use App\Services\SendEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    private $mail;
    function __construct(Mail $mail)
    {
        $this->mail = $mail;
    } 

    /**
     * @Route("/prof/login", name="prof_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('prof/security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/prof/inscription", name="prof_register", methods={"GET","POST"})
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param TokenGeneratorInterface $tokenGenerator
     * @param SendEmail $sendEmail
     * @param UserRepository $userRepository
     * @return Response
     */
    public function inscription(
        Request $request,
        UserPasswordEncoderInterface $passwordEncoder,
        TokenGeneratorInterface $tokenGenerator,
        SendEmail $sendEmail,
        UserRepository $userRepository
    ): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->remove('roles');
        $form->remove('avatarfile');
        $form->remove('status');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $password = $request->request->get('user')['password'];
            //remove the bracket in tel number
            $tel = str_replace(array( '(', ')' ), '', $request->request->get('user')['tel']);
            $passwordcyrpter = $passwordEncoder->encodePassword($user, $password);
            $user->setPassword($passwordcyrpter);
            $user->setTel($tel);
            $user->setRoles(array('ROLE_PROFESSEUR'));
            $user->setStatus(0);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            //token to activate status of user
            $token = $tokenGenerator->generateToken();
            $user->setResetToken($token);
            $entityManager->flush();
            $url = $this->generateUrl('prof_activate_compte', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);
            //$this->mail->registration($url, $user);
            $sendEmail->etudiantAfterSign($url, $user);
            //Send Email ADMIN
            $admins = $userRepository->listAdmins();
            $sendEmail->newRegister($admins[0]);
              //SEND MAIL NOTIFICATION NOUVELLE INSCRIPTION ADMIN

            //inform customer that inscription is success and check his email to activate his compte
            return $this->redirectToRoute('prof_after_inscription');
        }

        return $this->render('prof/security/register.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/prof/mot-de-passe-oubliee", name="prof_forgotten_password", methods={"GET","POST"})
     */
    public function forgottenPassword(
        Request $request,
        Mail $mail,
        SendEmail $sendEmail,
        TokenGeneratorInterface $tokenGenerator
    ): Response
    {
        $passwordForgote = new ForgotePassword();
        $form = $this->createForm(ForgotePasswordType::class, $passwordForgote);

        $form->remove('newPassword');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // var_dump($request); die;

            $email = $request->request->get('forgote_password')['email'];

            $entityManager = $this->getDoctrine()->getManager();
            $user = $entityManager->getRepository(User::class)->findOneByEmail($email);
            // var_dump($user);die;
            /* @var $user User */
            if ($user === null) {
                $form->get('email')->addError(new FormError("Votre adresse email n'existe pas dans notre base des donnee. Vous pouvez creer votre compte !"));
            } else {
                $token = $tokenGenerator->generateToken();

                $user->setResetToken($token);
                $entityManager->flush();

                $url = $this->generateUrl('prof_reset_password', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);

                $sendEmail->resetPassword($url, $user);

                $this->addFlash('notice', 'Mail envoyé');

                return $this->redirectToRoute('prof_after_send_mail');
            }
        }

        return $this->render('prof/security/forgotten_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/prof/reinitialiser-mot-de-passe/{token}", name="prof_reset_password")
     */
    public function resetPassword(Request $request, string $token,
     UserPasswordEncoderInterface $passwordEncoder,
      GuardAuthenticatorHandler $guardAuthenticatorHandler,
      ProfLoginFormAuthenticator $loginFormAuthenticator)
    {

        if ($request->isMethod('POST')) {
            $entityManager = $this->getDoctrine()->getManager();

            $user = $entityManager->getRepository(User::class)->findOneByResetToken($token);
            /* @var $user User */

            if ($user === null) {
                $this->addFlash('danger', 'Token Inconnu');
                return $this->redirectToRoute('app_login');
             }
            $newPass = $request->request->get('newPass');

            $user->setResetToken(null);
            $user->setPassword($passwordEncoder->encodePassword($user, $newPass));
            $entityManager->flush();

            $this->addFlash('notice', 'Mot de passe mis à jour');

            // login user automatically after reset password
            return $guardAuthenticatorHandler
                ->authenticateUserAndHandleSuccess(
                    $user,
                    $request,
                    $loginFormAuthenticator,
                    'prof'
                );
        }

        return $this->render('prof/security/reset_password.html.twig', ['token' => $token]);

     }
     /**
     * @Route("/prof/activate-compte/{token}", name="prof_activate_compte")
     */
    public function activateCompte(Request $request,
    string $token,
    GuardAuthenticatorHandler $guardAuthenticatorHandler,
    ProfLoginFormAuthenticator $loginFormAuthenticator
    )
    {
        //check if user already connected


        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(User::class)->findOneByResetToken($token);

        if (!empty($user)) {
            //activate user
            $user->setStatus(1);

            $user->setResetToken(null);
            $entityManager->flush();

            $this->addFlash('notice', 'Votre compte est activé maintenant');
            // login user automatically after activate compte
            return $guardAuthenticatorHandler
            ->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $loginFormAuthenticator,
                'prof'
            );
        }
        $this->addFlash('notice', 'Votre compte est déjà activé');
        return $this->redirectToRoute('prof_after_inscription');
    }
    /**
     * @Route("/prof/logout", name="prof_logout")
     */
    public function logout(Request $request)
    {
        $session = $request->getSession();
        $session->clear();
        return $this->redirectToRoute('prof_login');
        //throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}

