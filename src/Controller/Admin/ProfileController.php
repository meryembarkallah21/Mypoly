<?php

namespace App\Controller\Admin;

use App\Entity\Document;
use App\Entity\PasswordUpdate;
use App\Form\DocumentType;
use App\Form\PasswordUpdateType;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProfileController extends AbstractController
{

    /**
     * @Route("admin/profile", name="admin_profile", methods={"GET","POST"})
     */
    public function editProfile(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {

        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);
        $form->remove('roles');
 
        $form->remove('password');
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $tel = str_replace(array( '(', ')' ), '', $request->request->get('user')['tel']);
            $user->setTel($tel);
            $updatedAt = (new \DateTime())->format('Y-m-d H:i:s');
            $user->setUpdatedAt($updatedAt);
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            $this->AddFlash('success','Modification des infos avec succès');
        }

        //ajout document

        $document = new Document();
        $formDoc = $this->createForm(DocumentType::class,$document);
        $formDoc->handleRequest($request);

        if ($formDoc->isSubmitted() && $formDoc->isValid()){
            $document->setUser($user);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($document);
            $entityManager->flush();
            $this->AddFlash('success','Ajout document avec succès');
        }

        $passwordUpdate = new PasswordUpdate();
        $formPass = $this->createForm(PasswordUpdateType::class, $passwordUpdate);
        $formPass->handleRequest($request);
        
        if ($formPass->isSubmitted() && $formPass->isValid()) {
            // Si l'ancien mot de passe n'est pas bon
            if (!$passwordEncoder->isPasswordValid($user, $passwordUpdate->getOldPassword())) {
                $formPass->get('oldPassword')->addError(new FormError("Le mot de passe que vous avez tapé n'est pas votre mot de passe actuel !"));
            }
            $newEncodedPassword = $passwordEncoder->encodePassword($user, $passwordUpdate->getNewPassword());
            $user->setPassword($newEncodedPassword);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
    
        }
        return $this->render('admin/profile/index.html.twig', [
            'controller_name' => 'admin compte',
            'user' => $user,
            'form' => $form->createView(),
            'form_pass' => $formPass->createView(),
            'formDoc' => $formDoc->createView(),
        ]);
    }
}
