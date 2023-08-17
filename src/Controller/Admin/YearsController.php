<?php

namespace App\Controller\Admin;

use App\Entity\Years;
use App\Form\YearsType;
use App\Repository\YearsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/years")
 */
class YearsController extends AbstractController
{
    /**
     * @Route("/", name="years_index", methods={"GET"})
     */
    public function index(YearsRepository $yearsRepository): Response
    {
        return $this->render('admin/years/index.html.twig', [
            'years' => $yearsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="years_new", methods={"GET","POST"})
     */
    public function new(Request $request,YearsRepository $yearsRepository): Response
    {
        $year = new Years();
        $form = $this->createForm(YearsType::class, $year);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($year);
            $entityManager->flush();

            return $this->redirectToRoute('years_new');
        }

        return $this->render('admin/years/new.html.twig', [
            'year' => $year,
            'form' => $form->createView(),
            'years'=>$yearsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="years_show", methods={"GET"})
     */
    public function show(Years $year): Response
    {
        return $this->render('admin/years/show.html.twig', [
            'year' => $year,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="years_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Years $year,YearsRepository $yearsRepository): Response
    {
        $form = $this->createForm(YearsType::class, $year);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('years_new');
        }

        return $this->render('admin/years/edit.html.twig', [
            'year' => $year,
            'form' => $form->createView(),
            'years'=>$yearsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="years_delete", methods={"POST"})
     */
    public function delete(Request $request, Years $year): Response
    {
        if ($this->isCsrfTokenValid('delete'.$year->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($year);
            $entityManager->flush();
        }

        return $this->redirectToRoute('years_new');
    }
}
