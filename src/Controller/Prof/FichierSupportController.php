<?php

namespace App\Controller\Prof;
use App\Entity\Cours;
use App\Entity\FichierSupport;
use App\Form\FichierSupportType;
use App\Repository\FichierSupportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("prof/fichier/support")
 */
class FichierSupportController extends AbstractController
{
    /**
     * @Route("/", name="fichier_support_index", methods={"GET"})
     */
    public function index(FichierSupportRepository $fichierSupportRepository): Response
    {
        return $this->render('prof/fichier_support/index.html.twig', [
            'fichier_supports' => $fichierSupportRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="fichier_support_delete", methods={"GET","POST"})
     */
    public function delete(FichierSupport $fichierSupport): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($fichierSupport);
        $entityManager->flush();

        return $this->redirectToRoute('fichier_support_new',['id'=>$fichierSupport->getCours()->getId()]);
    }
    /**
     * @Route("/{id}/supprimer", name="fichier_support_supprimer", methods={"GET","POST"})
     */
    public function supprimer(FichierSupport $fichierSupport): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($fichierSupport);
        $entityManager->flush();

        return $this->redirectToRoute('cours_show',['id'=>$fichierSupport->getCours()->getId()]);
    }

    /**
     * @Route("/new/{id}", name="fichier_support_new", methods={"GET","POST"})
     */
    public function new(Request $request,Cours $cour): Response
    {

        // form support

        $fichierSupport = new FichierSupport();
        $forms = $this->createForm(FichierSupportType::class, $fichierSupport);
        $forms->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $fus = $em->getRepository(FichierSupport::class)->findByCours($cour);

        if ($forms->isSubmitted() && $forms->isValid()) {
            $fichierSupport->setCours($cour);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fichierSupport);
            $entityManager->flush();

            return $this->redirectToRoute('prof_ajout_cours',['id'=>$cour->getId()]);
        }

        return $this->render('prof/fichier_support/new.html.twig', [
            'fichier_support' => $fichierSupport,
            'fichier_supports'=>$fus,
            'forms' => $forms ->createView(),
            'cour' =>$cour,
        ]);
    }
    /**
     * @Route("/{id}/edit", name="fichier_support_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FichierSupport $fichierSupport,Cours $cour): Response
    {
        //form support

        $forms = $this->createForm(FichierSupportType::class, $fichierSupport);
        $forms->handleRequest($request);

        if ($forms->isSubmitted() && $forms->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('prof_ajout_cours',['id'=>$cour->getId()]);
        }

        return $this->render('prof/fichier_support/edit.html.twig', [
            'fichier_support' => $fichierSupport,
            'forms' => $forms ->createView(),
            'cour' =>$cour,
        ]);
    }
}
