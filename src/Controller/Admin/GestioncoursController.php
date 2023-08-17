<?php

namespace App\Controller\Admin;

use App\Entity\Audio;
use App\Entity\Code;
use App\Entity\Cours;
use App\Entity\Cycle;
use App\Entity\Ec;
use App\Entity\FichierSupport;
use App\Entity\Mention;
use App\Entity\Parcours;
use App\Entity\Ue;
use App\Entity\Video;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;



/**
 * @Route("admin/gestionCours")
 */
class GestioncoursController extends AbstractController
{


    /**
     * @Route("/index", name="index_admin_gestion_cours", methods={"GET"})
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $mentions = $em->getRepository(Code::class)->findAll();

        return $this->render('admin/gestionCours/index.html.twig', ['mentions' => $mentions ]);
    }

    /**
     * @Route("/{id}", name="admin_cours_show", methods={"GET"})
     */
    public function show(Cours $cour): Response
    {
        $em = $this->getDoctrine()->getManager();
        $fichierSupports = $em->getRepository(FichierSupport::class)->findByCours($cour);
        $audios = $em->getRepository(Audio::class)->findByCours($cour);
        $videos = $em->getRepository(Video::class)->findByCours($cour);
        return $this->render('admin/gestionCours/show.html.twig', [
            'cour' => $cour,
            'videos' => $videos,
            'fichier_supports'=>$fichierSupports,
            'audios' => $audios,
        ]);
    }


    /**
     * @Route("/cours/{id}/supports", name="admin_cours_support", methods={"GET"})
     */
    public function support(Cours $cour): Response
    {
        $em = $this->getDoctrine()->getManager();
        $fichierSupports = $em->getRepository(FichierSupport::class)->findByCours($cour);
        $audios = $em->getRepository(Audio::class)->findByCours($cour);
        $videos = $em->getRepository(Video::class)->findByCours($cour);
        return $this->render('admin/gestionCours/support.html.twig', [
            'cour' => $cour,
            'videos' => $videos,
            'fichier_supports'=>$fichierSupports,
            'audios' => $audios,
        ]);
    }

    /**
     * @Route("/mention/{id}", name="parcours_admin_gestion_cours", methods={"GET"})
     *
     */
    public function parcoursList(Code $code)
    {
        $em = $this->getDoctrine()->getManager();
        $cycles = $em->getRepository(Cycle::class)->findAll();

        $cycle = [];
        $i = 0;
        foreach ($cycles as $cy){
            $cycle[$i] = $cy ;
            $i++;
        }

        $parcours = $em->getRepository(Parcours::class)->findBy(['code' => $code ]);
        $mentionL1 = $em->getRepository(Mention::class)->findBy(['code' => $code, 'cycle' => $cycle[0] ]);
        $mentionL2 = $em->getRepository(Mention::class)->findBy(['code' => $code, 'cycle' => $cycle[1] ]);
        $mentionL3 = $em->getRepository(Mention::class)->findBy(['code' => $code, 'cycle' => $cycle[2] ]);

        return $this->render('admin/gestionCours/parcours.html.twig', [
            'parcours' => $parcours,
            'mentionL1' => $mentionL1,
            'mentionL2' => $mentionL2,
            'mentionL3' => $mentionL3,
            'code' => $code
        ]);
    }

    /**
     * @Route("/parcours/{id}", name="admin_cours",methods={"GET","POST"})
     */
    public function cours(Mention $mention): Response
    {
        $em = $this->getDoctrine()->getManager();

        $ues = $em->getRepository(Ue::class)->findBy([
            'mention'=>$mention,
        ]);
        return $this->render('admin/gestionCours/cours.html.twig', [
            'ues'=>$ues,
            'mention'=>$mention,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_cours_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cours $cour): Response
    {

        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('admin_cours_support',['id'=>$cour->getId()]);
        }

        return $this->render('admin/gestionCours/edit.html.twig', [
            'cour' => $cour,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/cours/audio/{id}/supprimer", name="admin_audio_supprimer", methods={"GET","POST"})
     */
    public function audio_supprimer(Audio $audio): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($audio);
        $entityManager->flush();

        return $this->redirectToRoute('admin_cours_show',['id'=>$audio->getCours()->getId()]);
    }

    /**
     * @Route("/cours/fichier_support/{id}/supprimer", name="admin_fichier_support_supprimer", methods={"GET","POST"})
     */
    public function support_supprimer(FichierSupport $fichierSupport): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($fichierSupport);
        $entityManager->flush();

        return $this->redirectToRoute('admin_cours_show',['id'=>$fichierSupport->getCours()->getId()]);
    }


    /**
     * @Route("/cours/video/{id}/supprimer", name="admin_videos_supprimer", methods={"GET","POST"})
     */
    public function video_supprimer(Video $video): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($video);
        $entityManager->flush();

        return $this->redirectToRoute('admin_cours_show',['id'=>$video->getCours()->getId()]);
    }


}