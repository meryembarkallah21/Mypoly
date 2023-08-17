<?php

namespace App\Controller\Vitrine;

use App\Entity\Code;
use App\Entity\Ec;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VitrineController extends AbstractController
{
    /**
     * @Route("/", name="vitrine")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $mentions = $em->getRepository(Code::class)->findAll();
        return $this->render('vitrine/index.html.twig', [
            'controller_name' => 'VitrineController',
            'mentions'=>$mentions,
        ]);
    }
    /**
     * @Route("/qui-sommes-nous", name="quisommesnous")
     */
    public function quisommesnous(): Response
    {
        return $this->render('vitrine/qui-sommes-nous.html.twig', [
            'controller_name' => 'VitrineController',
        ]);
    }

    /**
     * @Route("/presentation", name="presentation")
     */
    public function presentation(): Response
    {
        return $this->render('vitrine/presentation.html.twig', [
            'controller_name' => 'VitrineController',
        ]);
    }

    /**
     * @Route("/enseignants", name="enseignant")
     */
    public function enseignant(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $prof = $em->getRepository(User::class)->listProfs();
        $ecs = $em->getRepository(Ec::class)->findAll();
        $mentions = $em->getRepository(Code::class)->findAll();
        return $this->render('vitrine/enseignant.html.twig', [
            'controller_name' => 'VitrineController',
            'profs'=>$prof,
            'mentions'=>$mentions,
            'ecs'=>$ecs,
        ]);
    }
}
