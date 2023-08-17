<?php

namespace App\Controller\Prof;

use App\Entity\Audio;
use App\Entity\Cours;
use App\Form\AudioType;
use App\Repository\AudioRepository;
use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("prof/audio")
 */
class AudioController extends AbstractController
{
    /**
     * @Route("/", name="audio_index", methods={"GET"})
     */
    public function index(AudioRepository $audioRepository): Response
    {
        return $this->render('prof/audio/index.html.twig', [
            'audio' => $audioRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new/{id}", name="audio_new", methods={"GET","POST"})
     */
    public function new(Request $request,CoursRepository $cours,Cours $cour): Response
    {

        // form Audio

        $audio = new Audio();
        $forms = $this->createForm(AudioType::class, $audio);
        $forms->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $audios = $em->getRepository(Audio::class)->findByCours($cour);

        if ($forms->isSubmitted() && $forms->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $audio->setCours($cour);
            $entityManager->persist($audio);
            $entityManager->flush();

            return $this->redirectToRoute('audio_new',['id'=>$cour->getId()]);
        }

        return $this->render('prof/audio/new.html.twig', [
            'audio' => $audio,
            'audios' => $audios,
            'cour' =>$cour,
            'forms' => $forms ->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="audio_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Audio $audio): Response
    {
        $form = $this->createForm(AudioType::class, $audio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('audio_index');
        }

        return $this->render('prof/audio/edit.html.twig', [
            'audio' => $audio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="audio_delete", methods={"GET","POST"})
     */
    public function delete(Audio $audio): Response
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($audio);
            $entityManager->flush();

        return $this->redirectToRoute('audio_new',['id'=>$audio->getCours()->getId()]);
    }
    /**
     * @Route("/{id}/supprimer", name="audio_supprimer", methods={"GET","POST"})
     */
    public function supprimer(Audio $audio): Response
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($audio);
            $entityManager->flush();

        return $this->redirectToRoute('cours_show',['id'=>$audio->getCours()->getId()]);
    }
}
