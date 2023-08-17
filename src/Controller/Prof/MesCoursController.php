<?php

namespace App\Controller\Prof;

use App\Entity\Code;
use App\Entity\Cours;
use App\Entity\Cycle;
use App\Entity\Ec;
use App\Entity\Mention;
use App\Entity\Parcours;
use App\Entity\Ue;
use App\Entity\FichierSupport;
use App\Form\FichierSupportType;
use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MesCoursController extends AbstractController
{
    /**
     * @Route("prof/mes-cours/{id}", name="prof_cours",methods={"GET","POST"})
     */
    public function cours(Mention $mention,CoursRepository $coursRepository): Response
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $ecs = $em->getRepository(Ec::class)->findBy([
            'prof'=>$user,
        ]);
        $ues = $em->getRepository(Ue::class)->findBy([
           'mention'=>$mention,
        ]);
        return $this->render('prof/mes_cours/index.html.twig', [
            'controller_name' => 'MesCoursController',
            'ecs' =>$ecs,
            'ues'=>$ues,
            'mention'=>$mention,
            'cours'=>$coursRepository->findAll(),
        ]);
    }
    /**
     * @Route("prof/ajout-cours/{id}", name="prof_ajout_cours" , methods={"GET","POST"})
     */
    public function ajout(Request $request,Cours $cour): Response
    {
        $em = $this->getDoctrine()->getManager();
        $ecs = $em->getRepository(Ec::class)->findAll();
        $ues = $em->getRepository(Ue::class)->findAll();
        $cours = $em->getRepository(Cours::class)->findAll();
        $fus = $em->getRepository(FichierSupport::class)->findByCours($cour);

        //form fichierSupport

        $fichierSupport = new FichierSupport();
        $forms = $this->createForm(FichierSupportType::class, $fichierSupport);
        $forms->handleRequest($request);

        if ($forms->isSubmitted() && $forms->isValid()) {
            $fichierSupport->setCours($cour);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fichierSupport);
            $entityManager->flush();

            return $this->redirectToRoute('prof_ajout_cours',['id'=>$cour->getId()]);
        }


        return $this->render('prof/mes_cours/ajout_cours.html.twig', [
            'controller_name' => 'MesCoursController',
            'cour'  =>$cour,
            'ecs' =>$ecs,
            'ues' =>$ues,
            'cours'=>$cours,
            'fichierSupport'=> $fichierSupport,
            'forms' => $forms->createView(),
            'fichier_supports'=>$fus,

        ]);
    }
    /**
     * @Route("prof/mes-mentions", name="prof_mentions")
     */
    public function mention(): Response
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $ec = $em->getRepository(Ec::class)->findBy([
            'prof'=>$user,
        ]);
        $mention = $em->getRepository(Code::class)->findAll();
        $niveau = $em->getRepository(Cycle::class)->findAll();
        $parcours = $em->getRepository(Parcours::class)->findAll();
        return $this->render('prof/mes_mentions/index.html.twig', [
            'controller_name' => 'MesCoursController',
            'ecs' =>$ec,
            'mentions'=>$mention,
            'niveaux' =>$niveau,
            'parcours'=>$parcours,
        ]);
    }
}
