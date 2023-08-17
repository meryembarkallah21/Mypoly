<?php

namespace App\Controller\Etudiant;

use App\Entity\Calendrier;
use App\Entity\Inscrire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgendaController extends AbstractController
{
    /**
     * @Route("/etudiant/agenda", name="agenda_etudiant")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $inscrires= $em->getRepository(Inscrire::class)->findBy(['Etudiant' => $this->getUser()]);
        $agendas = $em->getRepository(Calendrier::class)->findAll();
        return $this->render('etudiant/espace/agenda/agenda.html.twig', [
            'agendas' => $agendas,
            'inscrires' => $inscrires
        ]);
    }
}
