<?php

namespace App\Controller\Admin;

use App\Entity\Inscrire;
use App\Form\InscrireType;
use App\Repository\InscrireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/inscrire")
 */
class InscrireController extends AbstractController
{
    /**
     * @Route("/", name="inscrire_index", methods={"GET"})
     */
    public function index(InscrireRepository $inscrireRepository): Response
    {
        return $this->render('admin/inscrire/index.html.twig', [
            'inscrires' => $inscrireRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="inscrire_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $inscrire = new Inscrire();
        $form = $this->createForm(InscrireType::class, $inscrire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($inscrire);
            $entityManager->flush();

            return $this->redirectToRoute('inscrire_index');
        }

        return $this->render('admin/inscrire/new.html.twig', [
            'inscrire' => $inscrire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="inscrire_show", methods={"GET"})
     */
    public function show(Inscrire $inscrire): Response
    {
        return $this->render('admin/inscrire/show.html.twig', [
            'inscrire' => $inscrire,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="inscrire_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Inscrire $inscrire): Response
    {
        $form = $this->createForm(InscrireType::class, $inscrire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('inscrire_index');
        }

        return $this->render('admin/inscrire/edit.html.twig', [
            'inscrire' => $inscrire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="inscrire_delete", methods={"POST"})
     */
    public function delete(Request $request, Inscrire $inscrire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$inscrire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($inscrire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('inscrire_index');
    }
}
