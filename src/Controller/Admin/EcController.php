<?php

namespace App\Controller\Admin;

use App\Entity\Cours;
use App\Entity\Ec;
use App\Entity\User;
use App\Form\EcType;
use App\Repository\EcRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/ec")
 */
class EcController extends AbstractController
{
    /**
     * @Route("/", name="ec_index", methods={"GET"})
     */
    public function index(EcRepository $ecRepository): Response
    {
        return $this->render('prof/bibliotheque/index.html.twig', [
            'ecs' => $ecRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="ec_new", methods={"GET","POST"})
     */
    public function new(Request $request,EcRepository $ecRepository): Response
    {
        $ec = new Ec();
        $form = $this->createForm(EcType::class, $ec);
        $form->handleRequest($request);
        $descp ='';
        $cours = new Cours();
        $em = $this->getDoctrine()->getManager();
        $prof = $em->getRepository(User::class)->listProfs();
        $profRequest = $em->getRepository(User::class)->findOneById($request->get('profs'));

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $ec->setProf($profRequest);
            $entityManager->persist($ec);
            $entityManager->flush();

            // ajout cours

            $cours->setEc($ec);
            $cours->setTitre($ec->getName());
            $cours->setStatus(0);
            $cours->setDescription($descp);
            $entityManager->persist($cours);
            $entityManager->flush();

            return $this->redirectToRoute('ec_new');
        }

        return $this->render('admin/ec/new.html.twig', [
            'ec' => $ec,
            'form' => $form->createView(),
            'ecs'=>$ecRepository->findAll(),
            'prof'=>$prof,
        ]);
    }

    /**
     * @Route("/{id}", name="ec_show", methods={"GET"})
     */
    public function show(Ec $ec): Response
    {
        return $this->render('admin/ec/show.html.twig', [
            'ec' => $ec,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ec_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ec $ec,EcRepository $ecRepository): Response
    {
        $form = $this->createForm(EcType::class, $ec);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $prof = $em->getRepository(User::class)->listProfs();
        $profRequest = $em->getRepository(User::class)->findOneById($request->get('profs'));
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $ec->setProf($profRequest);
            $entityManager->persist($ec);
            $entityManager->flush();

            return $this->redirectToRoute('ec_new');
        }

        return $this->render('admin/ec/edit.html.twig', [
            'ec' => $ec,
            'form' => $form->createView(),
            'ecs'=>$ecRepository->findAll(),
            'prof'=>$prof,
        ]);
    }

    /**
     * @Route("/{id}", name="ec_delete", methods={"POST"})
     */
    public function delete(Request $request, Ec $ec): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ec->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ec);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ec_new');
    }
}
