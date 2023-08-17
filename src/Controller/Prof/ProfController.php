<?php

namespace App\Controller\Prof;

use App\Entity\Code;
use App\Entity\Commentaire;
use App\Entity\Cours;
use App\Entity\Cycle;
use App\Entity\Ec;
use App\Entity\Parcours;
use App\Form\CommentaireType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfController extends AbstractController
{
    /**
     * @Route("/prof/tableau-de-bord", name="prof_dashbord")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $ecs = $em->getRepository(Ec::class)->findBy([
            'prof'=>$this->getUser(),
        ]);
        $cours = $em->getRepository(Cours::class)->findAll();
        $commentaires = $em->getRepository(Commentaire::class)->findAll();
        return $this->render('prof/dashboard/dashboard.html.twig', [
            'dashboard' => 'ProfController',
            'ecs'=>$ecs,
            'cours'=>$cours,
            'commentaires'=>$commentaires,
        ]);
    }

    /**
     * @Route("/prof/commentaire/cours/{id}" , name="prof_commenter" , methods={"GET" , "POST"})
     */
    public function Cour( Cours $cours,Request $request): Response
    {
        $em= $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $ecs = $em->getRepository(Ec::class)->findBy([
            'prof'=>$this->getUser(),
        ]);
        $commentaires = $em->getRepository(Commentaire::class)->findBy(['cours' => $cours ]);
        $commentaire = new Commentaire();
        $form= $this->createForm(CommentaireType::class, $commentaire);
        $cour_s = $em->getRepository(Cours::class)->findAll();
        $form->remove('auteur');
        $form->remove('cours');
        $form->remove('contenu');

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $commentaire->setAuteur($user);
            $commentaire->setCours($cours);
            $commentaire->setContenu($request->get('contenu'));
            $commentaire->setStatus(0);
            $commentaire->setTime(new \DateTime());
            $em->persist($commentaire);
            $em->flush();

            $this->redirectToRoute('prof_commenter', [ 'id' => $cours->getId() ]);
        }

        return $this->render('prof/commentaire/index.html.twig',[
            'dashboard' => 'ProfController',
            'form' => $form->createView() ,
            'cour' => $cours,
            'cours'=> $cour_s,
            'user' => $user ,
            'commentaires' => $commentaires,
            'ecs'=>$ecs,
        ] );
    }
    /**
     * @Route("/prof/commentaire/{id}/supprimer" , name="prof_suprimer_comment" , methods={"GET" , "POST"})
     */
    public function del(Commentaire $comment,Request $request): Response
    {
        $cours = $comment->getCours();

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($comment);
        $entityManager->flush();

        return $this->redirectToRoute('prof_commenter',['id' => $cours->getId() ]);
    }
    /**
     * @Route("prof/get-parcours", name="prof-get-parc", options={"expose"=true } , methods={"GET","POST"})
     */
    public function getParc(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $niveau = $em->getRepository(Cycle::class)->findOneBy([
            'id'=>$request->get('niveau'),
        ]);
        $code = $em->getRepository(Code::class)->findOneBy([
            'id'=>$request->get('code'),
        ]);
        $parcours = $em->getRepository(Parcours::class)->findBy([
            'cycle'=>$niveau,
            'code'=>$code,
        ]);
        $parcour = [];

        foreach ($parcours as $parc){
            $parcour[] = [
                'id' => $parc->getId(),
                'name' => $parc->getName(),
            ];
        }
        return new JsonResponse(['parcours' => $parcour]);
    }
}
