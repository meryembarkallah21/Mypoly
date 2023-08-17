<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Services\Mail;
use App\Services\SendEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

class ProfController extends AbstractController
{

    private $mail;
    function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }
    /**
     * @Route("/admin/prof", name="admin_prof_index")
     */
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('admin/prof/index.html.twig', [
            'profs' => $userRepository->listProfs(),
        ]);
    }

    /**
     * @Route("/admin/prof/new", name="admin_prof_new", methods={"GET","POST"})
     */
    public function addNewProf(Request $request,
                                UserPasswordEncoderInterface $passwordEncoder,
                                TokenGeneratorInterface $tokenGenerator,
                                SendEmail $sendEmail,
                                UserRepository $userRepository
    ): Response
    {
        $user = new User();

        $form = $this->createForm(UserType::class, $user);
        $form->remove('roles');
        $form->remove('password');
        $form->remove('status');
        $form->remove('ville');
        $form->remove('adresse');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //remove the bracket in tel number
            $tel = str_replace(array( '(', ')' ), '', $request->request->get('user')['tel']);
            $passwordcyrpter = $passwordEncoder->encodePassword($user, "azerty");
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
            $sendEmail->profAfterSign($url,$user);
            //Send Email ADMIN
            $admins = $userRepository->listAdmins();
            $sendEmail->newRegister($admins[0]);
            //inform admin that inscription is success and check his email to activate his compte
            return $this->redirectToRoute('admin_prof_index');
        }

        return $this->render('admin/prof/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/prof/{id}/edit", name="admin_prof_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->remove('roles');
        $form->remove('password');
        $form->remove('ville');
        $form->remove('adresse');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_prof_index');
        }

        return $this->render('admin/prof/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("admin/prof/delete/{id}", name="admin_prof_delete", methods={"GET", "POST"})
     */
    public function delete(User $user): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('admin_prof_index');
    }

}