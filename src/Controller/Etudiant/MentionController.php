<?php

namespace App\Controller\Etudiant;

use App\Repository\CodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class  MentionController extends AbstractController
{
    /**
     * @Route("/etudiant/mention", name="mention", methods={"GET"})
     */
    public function index(CodeRepository $codeRepository): Response
    {
        return $this->render('etudiant/espace/mention/index.html.twig', [
            'codes' => $codeRepository->findAll(),
        ]);
    }
}
