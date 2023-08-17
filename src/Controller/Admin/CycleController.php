<?php

namespace App\Controller\Admin;

use App\Entity\Cycle;
use App\Form\CycleType;
use App\Repository\CycleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/cycle")
 */
class CycleController extends AbstractController
{
    /**
     * @Route("/", name="cycle_index", methods={"GET"})
     */
    public function index(CycleRepository $cycleRepository): Response
    {
        return $this->render('admin/cycle/index.html.twig', [
            'cycles' => $cycleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="cycle_new", methods={"GET","POST"})
     */
    public function new(Request $request,CycleRepository $cycleRepository): Response
    {
        $cycle = new Cycle();
        $form = $this->createForm(CycleType::class, $cycle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cycle);
            $entityManager->flush();

            return $this->redirectToRoute('cycle_new');
        }

        return $this->render('admin/cycle/new.html.twig', [
            'cycle' => $cycle,
            'form' => $form->createView(),
            'cycles' => $cycleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="cycle_show", methods={"GET"})
     */
    public function show(Cycle $cycle): Response
    {
        return $this->render('admin/cycle/show.html.twig', [
            'cycle' => $cycle,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="cycle_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cycle $cycle,CycleRepository $cycleRepository): Response
    {
        $form = $this->createForm(CycleType::class, $cycle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cycle_new');
        }

        return $this->render('admin/cycle/edit.html.twig', [
            'cycle' => $cycle,
            'form' => $form->createView(),
            'cycles'=> $cycleRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="cycle_delete", methods={"POST"})
     */
    public function delete(Request $request, Cycle $cycle): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cycle->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($cycle);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cycle_new');
    }
}
