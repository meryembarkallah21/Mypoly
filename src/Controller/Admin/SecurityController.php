<?php

namespace App\Controller\Admin;

use App\Entity\ForgotePassword;
use App\Entity\User;
use App\Form\ForgotePasswordType;
use App\Security\AdminLoginFormAuthenticator;
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
     * @Route("/admin/login", name="admin_login")
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

        return $this->render('admin/security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/admin/mot-de-passe-oubliee", name="admin_forgotten_password", methods={"GET","POST"})
     */
    public function forgottenPassword(
        Request $request,
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
            //var_dump($user);die;
            /* @var $user User */
            if ($user !== null) {
                $token = $tokenGenerator->generateToken();

                $user->setResetToken($token);
                $entityManager->flush();
    
                $url = $this->generateUrl('admin_reset_password', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);

                $sendEmail->resetPassword($url, $user);

                $this->addFlash('notice', 'Mail envoyé');
    
                //return $this->redirectToRoute('chef_after_send_mail');
            }
            
            $form->get('email')->addError(new FormError("Votre adresse email n'existe pas dans notre base des donnee. Vous pouvez creer votre compte !"));
            
        }

        return $this->render('admin/security/forgotten_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/reinitialiser-mot-de-passe/{token}", name="admin_reset_password")
     */
    public function resetPassword(Request $request, string $token,
     UserPasswordEncoderInterface $passwordEncoder,
      GuardAuthenticatorHandler $guardAuthenticatorHandler, 
      AdminLoginFormAuthenticator $loginFormAuthenticator)
    {

        if ($request->isMethod('POST')) {
            $entityManager = $this->getDoctrine()->getManager();

            $user = $entityManager->getRepository(User::class)->findOneByResetToken($token);
            /* @var $user User */

            if ($user !== null) {

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
                        'admin'
                    );
            }
            $this->addFlash('danger', 'Token Inconnu');
             
        }

        return $this->render('admin/security/reset_password.html.twig', ['token' => $token]);

    }

    /**
     * @Route("/admin/activate-compte/{token}", name="admin_activate_compte")
     */
    public function activateCompte(Request $request,
    string $token,
    GuardAuthenticatorHandler $guardAuthenticatorHandler,
    AdminLoginFormAuthenticator $loginFormAuthenticator
    )
    {

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
                'admin'
            );
        }
        $this->addFlash('notice', 'Votre compte est déjà activé');
        return $this->redirectToRoute('admin_login');
    }

    /**
     * @Route("/admin/logout", name="admin_logout")
     */
    public function logout(Request $request)
    {
        $session = $request->getSession();
        $session->clear();
        return $this->redirectToRoute('admin_login');
        //throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
