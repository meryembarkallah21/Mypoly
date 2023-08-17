<?php

namespace App\Controller\Etudiant;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    /**
     * @Route("/etudiant/tableau-de-bord", name="etudiant")
     */
    public function index(): Response
    {
        return $this->render('etudiant/espace/dashboard.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
}
