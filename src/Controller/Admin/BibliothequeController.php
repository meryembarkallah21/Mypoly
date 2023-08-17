<?php

namespace App\Controller\Admin;

use App\Entity\Bibliotheque;
use App\Entity\Code;
use App\Entity\Cycle;
use App\Entity\Mention;
use App\Entity\Parcours;
use App\Form\BibliothequeType;
use App\Repository\BibliothequeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/bibliotheque")
 */
class BibliothequeController extends AbstractController
{
    /**
     * @Route("/", name="admin_bibliotheque_index", methods={"GET"})
     */
    public function index(BibliothequeRepository $bibliothequeRepository): Response
    {
        $bibliotheque = new Bibliotheque();
        $em = $this->getDoctrine()->getManager();
        $filiere = $em->getRepository(Code::class)->findAll();
        $cycle = $em->getRepository(Cycle::class)->findAll();
        $form = $this->createForm(BibliothequeType::class, $bibliotheque);
        $form->remove('mention');
        $form->remove('status');
        $form->remove('fichier');
        $form->remove('doc');
        return $this->render('admin/bibliotheque/index.html.twig', [
            'bibliotheques' => $bibliothequeRepository->findAll(),
            'form'=>$form->createView(),
            'filieres'=>$filiere,
            'niveaux'=>$cycle,
        ]);
    }

    /**
     * @Route("/new", name="admin_bibliotheque_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $bibliotheque = new Bibliotheque();
        $form = $this->createForm(BibliothequeType::class, $bibliotheque);
        $form->remove('mention');
        $form->remove('status');
        $form->remove('fichier');
        $form->remove('doc');
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

        $doc = $request->files->get('doc');

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $bibliotheque->setMention($mentionrepo);
            $bibliotheque->setStatus($publie);
            $bibliotheque->setDoc($doc);
            $entityManager->persist($bibliotheque);
            $entityManager->flush();

            return $this->redirectToRoute('admin_bibliotheque_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/bibliotheque/new.html.twig', [
            'bibliotheque' => $bibliotheque,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_bibliotheque_show", methods={"GET"})
     */
    public function show(Bibliotheque $bibliotheque): Response
    {
        return $this->render('admin/bibliotheque/show.html.twig', [
            'bibliotheque' => $bibliotheque,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_bibliotheque_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Bibliotheque $bibliotheque): Response
    {
        $form = $this->createForm(BibliothequeType::class, $bibliotheque);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bibliotheque_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/bibliotheque/edit.html.twig', [
            'bibliotheque' => $bibliotheque,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_bibliotheque_delete", methods={"POST"})
     */
    public function delete(Request $request, Bibliotheque $bibliotheque): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bibliotheque->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($bibliotheque);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_bibliotheque_index', [], Response::HTTP_SEE_OTHER);
    }
}
