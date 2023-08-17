<?php

namespace App\Controller\Prof;

use App\Entity\Audio;
use App\Entity\Bibliotheque;
use App\Entity\Code;
use App\Entity\Cours;
use App\Entity\Cycle;
use App\Entity\FichierSupport;
use App\Entity\Mention;
use App\Entity\Parcours;
use App\Entity\Video;
use App\Form\BibliothequeType;
use App\Form\CoursType;
use App\Repository\CoursRepository;
use App\Repository\EcRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("prof/cours")
 */
class CoursController extends AbstractController
{
    /**
     * @Route("/", name="cours_index", methods={"GET"})
     */
    public function index(CoursRepository $coursRepository): Response
    {
        return $this->render('prof/cours/index.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }
    /**
     * @Route("/bibliotheque", name="prof_bibliotheque", methods={"GET","POST"})
     */
    public function bible(Request $request, EcRepository $ecRepository,CoursRepository $coursRepository): Response
    {
        $em = $this->getDoctrine()->getManager();
        $bibliotheques = $em->getRepository(Bibliotheque::class)->findAll();
        $filiere = $em->getRepository(Code::class)->findAll();
        $cycle = $em->getRepository(Cycle::class)->findAll();

        $bibliotheque = new Bibliotheque();

        $formbl = $this->createForm(BibliothequeType::class, $bibliotheque);
        $formbl->remove('mention');
        $formbl->remove('status');
        $formbl->remove('fichier');
        $formbl->remove('doc');
        $formbl->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $fi = $em->getRepository(Code::class)->findOneBy([
            'id'=>$request->get('_filiere'),
        ]);
        $ni = $em->getRepository(Cycle::class)->findOneBy([
            'id'=>$request->get('_niveau'),
        ]);
        $pa = $em->getRepository(Parcours::class)->findOneBy([
            'id'=>$request->get('_parcours'),
        ]);
        $mentionrepo = $em->getRepository(Mention::class)->findOneBy([
            'cycle'=>$ni,
            'code'=>$fi,
            'parcours'=>$pa,
        ]);

        $publier = $request->get('_publie');
        if($publier == null){
            $publie = 0;
        }else
        {
            $publie = 1;
        }

        $doc = $request->files->get('doc');

        if ($formbl->isSubmitted() && $formbl->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $bibliotheque->setMention($mentionrepo);
            $bibliotheque->setStatus($publie);
            $bibliotheque->setDoc($doc);
            $entityManager->persist($bibliotheque);
            $entityManager->flush();

            return $this->redirectToRoute('prof_bibliotheque');
        }

        return $this->render('prof/bibliotheque/index.html.twig', [
            'ecs' => $ecRepository->findAll(),
            'cours' =>$coursRepository->findAll(),
            'filieres' =>$filiere,
            'niveaux'=>$cycle,
            'bibliotheques'=>$bibliotheques,
            'formbl'=>$formbl->createView(),
        ]);
    }

    /**
     * @Route("/new", name="cours_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $cour = new Cours();
        $form = $this->createForm(CoursType::class, $cour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cour);
            $entityManager->flush();

            return $this->redirectToRoute('cours_index');
        }

        return $this->render('prof/cours/new.html.twig', [
            'cour' => $cour,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cours_show", methods={"GET"})
     */
    public function show(Cours $cour): Response
    {
        $em = $this->getDoctrine()->getManager();
        $fichierSupports = $em->getRepository(FichierSupport::class)->findByCours($cour);
        $audios = $em->getRepository(Audio::class)->findByCours($cour);
        $videos = $em->getRepository(Video::class)->findByCours($cour);
        return $this->render('prof/cours/show.html.twig', [
            'cour' => $cour,
            'videos' => $videos,
            'fichier_supports'=>$fichierSupports,
            'audios' => $audios,
        ]);
    }

    /**
     * @Route("/{id}/supports", name="cours_support", methods={"GET"})
     */
    public function support(Cours $cour): Response
    {
        $em = $this->getDoctrine()->getManager();
        $fichierSupports = $em->getRepository(FichierSupport::class)->findByCours($cour);
        $audios = $em->getRepository(Audio::class)->findByCours($cour);
        $videos = $em->getRepository(Video::class)->findByCours($cour);
        return $this->render('prof/bibliotheque/support.html.twig', [
            'cour' => $cour,
            'videos' => $videos,
            'fichier_supports'=>$fichierSupports,
            'audios' => $audios,
        ]);
    }


    /**
     * @Route("/{id}", name="cours_delete", methods={"POST"})
     */
    public function delete(Request $request, Cours $cour): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cour->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($cour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cours_index');
    }

    /**
     * @Route("/{id}/supprimer/bibliotheque", name="prof_bibliotheque_delete", methods={"POST"})
     */
    public function supprimer(Request $request, Bibliotheque $bibliotheque): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($bibliotheque);
        $entityManager->flush();
        return $this->redirectToRoute('prof_bibliotheque', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{id}/edit/bibliotheque", name="prof_bibliotheque_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Bibliotheque $bibliotheque): Response
    {
        $em = $this->getDoctrine()->getManager();
        $bibliotheques = $em->getRepository(Bibliotheque::class)->findAll();
        $filiere = $em->getRepository(Code::class)->findAll();
        $cycle = $em->getRepository(Cycle::class)->findAll();

        $form = $this->createForm(BibliothequeType::class, $bibliotheque);
        $form->remove('mention');
        $form->remove('status');
        $form->remove('fichier');
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $fi = $em->getRepository(Code::class)->findOneBy([
            'id'=>$request->get('_filiere'),
        ]);
        $ni = $em->getRepository(Cycle::class)->findOneBy([
            'id'=>$request->get('_niveau'),
        ]);
        $pa = $em->getRepository(Parcours::class)->findOneBy([
            'id'=>$request->get('_parcours'),
        ]);
        $mentionrepo = $em->getRepository(Mention::class)->findOneBy([
            'cycle'=>$ni,
            'code'=>$fi,
            'parcours'=>$pa,
        ]);

        $publier = $request->get('_publie');
        if($publier == null){
            $publie = 0;
        }else
        {
            $publie = 1;
        }

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $bibliotheque->setMention($mentionrepo);
            $bibliotheque->setStatus($publie);
            $entityManager->persist($bibliotheque);
            $entityManager->flush();

            return $this->redirectToRoute('prof_bibliotheque');
        }

        return $this->render('prof/bibliotheque/edit.html.twig', [
            'bibliotheque' => $bibliotheque,
            'filieres' =>$filiere,
            'niveaux'=>$cycle,
            'formbl' => $form->createView(),
        ]);
    }

}
