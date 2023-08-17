<?php

namespace App\Controller\Admin;

use App\Entity\Semestre;
use App\Form\SemestreType;
use App\Repository\SemestreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/semestre")
 */
class SemestreController extends AbstractController
{
    /**
     * @Route("/", name="semestre_index", methods={"GET"})
     */
    public function index(SemestreRepository $semestreRepository): Response
    {
        return $this->render('admin/semestre/index.html.twig', [
            'semestres' => $semestreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="semestre_new", methods={"GET","POST"})
     */
    public function new(Request $request,SemestreRepository $semestreRepository): Response
    {
        $semestre = new Semestre();
        $form = $this->createForm(SemestreType::class, $semestre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($semestre);
            $entityManager->flush();

            return $this->redirectToRoute('semestre_new');
        }

        return $this->render('admin/semestre/new.html.twig', [
            'semestre' => $semestre,
            'form' => $form->createView(),
            'semestres'=>$semestreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="semestre_show", methods={"GET"})
     */
    public function show(Semestre $semestre): Response
    {
        return $this->render('admin/semestre/show.html.twig', [
            'semestre' => $semestre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="semestre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Semestre $semestre,SemestreRepository $semestreRepository): Response
    {
        $form = $this->createForm(SemestreType::class, $semestre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('semestre_new');
        }

        return $this->render('admin/semestre/edit.html.twig', [
            'semestre' => $semestre,
            'form' => $form->createView(),
            'semestres'=>$semestreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="semestre_delete", methods={"POST"})
     */
    public function delete(Request $request, Semestre $semestre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$semestre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($semestre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('semestre_new');
    }
}
