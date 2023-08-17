<?php

namespace App\Controller\Admin;

use App\Entity\Code;
use App\Entity\Cycle;
use App\Entity\Inscrire;
use App\Entity\Parcours;
use App\Entity\User;
use App\Repository\InscrireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/admin/dashboard", name="admin_dashboard")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $inscrire = $em->getRepository(Inscrire::class)->findAll();
        $mention = $em->getRepository(Code::class)->findAll();
        $niveau = $em->getRepository(Cycle::class)->findAll();
        $parcour = $em->getRepository(Parcours::class)->findAll();
        $profs = $em->getRepository(User::class)->listProfs();
        $admins = $em->getRepository(User::class)->listAdmins();
        return $this->render('admin/dashboard/dashboard.html.twig', [
            'controller_name' => 'DashboardController',
            'inscrires'=>$inscrire,
            'mentions'=>$mention,
            'niveaux'=>$niveau,
            'parcours'=>$parcour,
            'profs'=>$profs,
            'admins'=>$admins,
        ]);
    }
    /**
     * @Route("admin/etudiant/liste/{id}/{cycle}", name="liste_etudiant", methods={"GET"})
     */
    public function liste(Request $request,InscrireRepository $inscrireRepository,Parcours $parcours): Response
    {
        $niveau = $request->get('cycle');
        return $this->render('admin/dashboard/liste_etudiant.html.twig', [
            'inscrires' => $inscrireRepository->findAll(),
            'parcours' => $parcours,
            'cycle' => $niveau,
        ]);
    }
    /**
     * @Route("admin/etudiant/index/{id}/{name}", name="list_etudiant", methods={"GET"})
     */
    public function list(InscrireRepository $inscrireRepository,Request $request,Cycle $cycle): Response
    {
        $name = $request->get('name');
        return $this->render('admin/dashboard/list_etudiant.html.twig', [
            'inscrires' => $inscrireRepository->findAll(),
            'name'=>$name,
            'cycle'=>$cycle,
        ]);
    }
    /**
     * @Route("admin/etudiant/profil/{id}", name="profil_show", methods={"GET"})
     */
    public function show(Inscrire $inscrire): Response
    {
        return $this->render('admin/dashboard/profil.html.twig', [
            'inscrire' => $inscrire,
        ]);
    }
    /**
     * @Route("admin/etudiant/delete/profil/{id}", name="profil_delete", methods={"POST"})
     */
    public function delete(Request $request, Inscrire $inscrire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$inscrire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($inscrire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_dashboard');
    }

}
