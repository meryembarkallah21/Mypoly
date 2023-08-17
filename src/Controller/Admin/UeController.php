<?php

namespace App\Controller\Admin;

use App\Entity\Code;
use App\Entity\Cycle;
use App\Entity\Mention;
use App\Entity\Parcours;
use App\Entity\Semestre;
use App\Entity\Ue;
use App\Form\UeType;
use App\Repository\UeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/ue")
 */
class UeController extends AbstractController
{
    /**
     * @Route("/", name="ue_index", methods={"GET"})
     */
    public function index(UeRepository $ueRepository): Response
    {
        return $this->render('admin/ue/index.html.twig', [
            'ues' => $ueRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="ue_new", methods={"GET","POST"})
     */
    public function new(Request $request,UeRepository $ueRepository): Response
    {
        $ue = new Ue();
        $entityManager = $this->getDoctrine()->getManager();
        $form = $this->createForm(UeType::class, $ue);
        $form->remove('mention');
        $form->remove('semestre');
        $form->handleRequest($request);
        $filiere = $entityManager->getRepository(Code::class)->findAll();

        $cycle = $entityManager->getRepository(Cycle::class)->findAll();
        $semestre = $entityManager->getRepository(Semestre::class)->findAll();

        $fi = $entityManager->getRepository(Code::class)->findOneBy([
            'id'=>$request->get('_filiere'),
        ]);
        $ni = $entityManager->getRepository(Cycle::class)->findOneBy([
            'id'=>$request->get('_niveau'),
        ]);
        $pa = $entityManager->getRepository(Parcours::class)->findOneBy([
            'id'=>$request->get('_parcours'),
        ]);
        $mentionrepo = $entityManager->getRepository(Mention::class)->findOneBy([
            'cycle'=>$ni,
            'code'=>$fi,
            'parcours'=>$pa,
        ]);
         $se = $entityManager->getRepository(Semestre::class)->findOneBy([
             'id'=>$request->get('_semestre'),
         ]);

        $ues = $entityManager->getRepository(Ue::class)->findOneBy([
            'name'=>$request->get('_name'),
            'mention'=>$mentionrepo,
            'semestre'=>$se,
        ]);
        if(!empty($mentionrepo) and empty($ues)){
            $ue->setName($request->get('_name'));
            $ue->setMention($mentionrepo);
            $ue->setSemestre($se);
            $entityManager->persist($ue);
            $entityManager->flush();
            return $this->redirectToRoute('ue_new');
        }
        return $this->render('admin/ue/new.html.twig', [
            'ue' => $ue,
            'ues'=>$ueRepository->findAll(),
            'filieres'=>$filiere,
            'niveaux'=>$cycle,
            'semestres'=>$semestre,
        ]);
    }

    /**
     * @Route("/{id}", name="ue_show", methods={"GET"})
     */
    public function show(Ue $ue): Response
    {
        return $this->render('admin/ue/show.html.twig', [
            'ue' => $ue,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ue_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ue $ue,UeRepository $ueRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $form = $this->createForm(UeType::class, $ue);
        $form->remove('mention');
        $form->remove('semestre');
        $form->handleRequest($request);
        $filiere = $entityManager->getRepository(Code::class)->findAll();

        $cycle = $entityManager->getRepository(Cycle::class)->findAll();
        $semestre = $entityManager->getRepository(Semestre::class)->findAll();

        $fi = $entityManager->getRepository(Code::class)->findOneBy([
            'id'=>$request->get('_filiere'),
        ]);
        $ni = $entityManager->getRepository(Cycle::class)->findOneBy([
            'id'=>$request->get('_niveau'),
        ]);
        $pa = $entityManager->getRepository(Parcours::class)->findOneBy([
            'id'=>$request->get('_parcours'),
        ]);
        $mentionrepo = $entityManager->getRepository(Mention::class)->findOneBy([
            'cycle'=>$ni,
            'code'=>$fi,
            'parcours'=>$pa,
        ]);
        $se = $entityManager->getRepository(Semestre::class)->findOneBy([
            'id'=>$request->get('_semestre'),
        ]);

        $ues = $entityManager->getRepository(Ue::class)->findOneBy([
            'name'=>$request->get('_name'),
            'mention'=>$mentionrepo,
            'semestre'=>$se,
        ]);
        if(!empty($mentionrepo) and empty($ues)){
            $ue->setName($request->get('_name'));
            $ue->setMention($mentionrepo);
            $ue->setSemestre($se);
            $entityManager->persist($ue);
            $entityManager->flush();
            return $this->redirectToRoute('ue_new');
        }

        return $this->render('admin/ue/edit.html.twig', [
            'ue' => $ue,
            'ues'=>$ueRepository->findAll(),
            'filieres'=>$filiere,
            'niveaux'=>$cycle,
            'semestres'=>$semestre,
        ]);
    }

    /**
     * @Route("/{id}", name="ue_delete", methods={"POST"})
     */
    public function delete(Request $request, Ue $ue): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ue->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ue);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ue_new');
    }
}
