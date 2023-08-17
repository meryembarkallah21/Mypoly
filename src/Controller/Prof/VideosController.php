<?php

namespace App\Controller\Prof;

use App\Entity\Cours;
use App\Entity\Video;
use App\Form\VideosType;
use App\Repository\CoursRepository;
use App\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("prof/videos")
 */
class VideosController extends AbstractController
{
    /**
     * @Route("/", name="videos_index", methods={"GET"})
     */
    public function index(VideoRepository $videosRepository): Response
    {
        return $this->render('prof/videos/index.html.twig', [
            'videos' => $videosRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new/{id}", name="videos_new", methods={"GET","POST"})
     */
    public function new(Request $request,Cours $cour): Response
    {

        // form video

        $video = new Video();
        $forms = $this->createForm(VideosType::class, $video);
        $forms->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository(Video::class)->findByCours($cour);

        if ($forms->isSubmitted() && $forms->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $video->setCours($cour);
            $entityManager->persist($video);
            $entityManager->flush();

            return $this->redirectToRoute('videos_new',['id'=>$cour->getId()]);
        }

        return $this->render('prof/videos/new.html.twig', [
            'video' => $video,
            'videos' => $videos,
            'forms' => $forms ->createView(),
            'cour' => $cour,
        ]);
    }
    /**
     * @Route("/{id}/edit", name="videos_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Video $video): Response
    {
        $form = $this->createForm(VideosType::class, $video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('videos_index');
        }

        return $this->render('prof/videos/edit.html.twig', [
            'video' => $video,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/supprimer", name="videos_supprimer", methods={"GET","POST"})
     */
    public function supprimer(Video $video): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($video);
        $entityManager->flush();

        return $this->redirectToRoute('cours_show',['id'=>$video->getCours()->getId()]);
    }
    /**
     * @Route("/{id}", name="videos_delete", methods={"GET","POST"})
     */
    public function delete(Video $video): Response
    {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($video);
            $entityManager->flush();

        return $this->redirectToRoute('videos_new',['id'=>$video->getCours()->getId()]);
    }
}
