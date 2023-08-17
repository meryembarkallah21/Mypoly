<?php

namespace App\Controller\Etudiant;

use App\Entity\Audio;
use App\Entity\Bibliotheque;
use App\Entity\Commentaire;
use App\Entity\Cours;
use App\Entity\Ec;
use App\Entity\Mention;
use App\Entity\Reaction;
use App\Entity\Semestre;
use App\Entity\FichierSupport;
use App\Entity\Inscrire;
use App\Entity\Parcours;
use App\Entity\StatusEc;
use App\Entity\Ue;
use App\Entity\User;
use App\Entity\Video;
use App\Form\CommentaireType;
use App\Repository\ReactionRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Time;

class MescoursController extends AbstractController
{

    /**
     * @Route("/etudiant/Mentions" , name="mes_mentions" , methods={"GET"})
     */
    public function cours(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $inscrire = $em->getRepository(Inscrire::class)->findBy(['Etudiant' => $this->getUser()]);

        return $this->render('etudiant/espace/cours/cours.html.twig', [ 'inscrires' => $inscrire , ]);
    }


    
    /**
     * @Route("/etudiant/Mentions/tableau_support" , name="tableau_support" , methods={"GET"})
     */
    public function tableau(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $inscrire = $em->getRepository(Inscrire::class)->findBy(['Etudiant' => $this->getUser()]);
        $parcours = $em->getRepository(Parcours::class)->findAll();
        $ue = $em->getRepository(Ue::class)->findAll();
        $mentions = $em->getRepository(Mention::class)->findAll();
        $semestre = $em->getRepository(Semestre::class)->findAll();

        $bibliotheques = $em->getRepository(Bibliotheque::class)->findAll();


        return $this->render('etudiant/espace/cours/tableau_support/tableau.html.twig',
            [ 'inscrires' => $inscrire ,'ue' => $ue ,
              'parcours' => $parcours, 'semestre' => $semestre ,
              'mentions'=> $mentions,'bibliotheques'=> $bibliotheques ]);
    }

    

    /**
     * @Route("/etudiant/Mentions/{id}" , name="mes_cours" , methods={"GET" , "POST"})
     */
    public function Ue( Inscrire $inscrire ): Response
    {
        $em= $this->getDoctrine()->getManager();
        $status = $em->getRepository(StatusEc::class)->findBy(['Inscrire' => $inscrire ]);
        $mention = $em->getRepository(Mention::class)->findOneBy(['id' => $inscrire->getMention()]);
        $semestre1 =$em->getRepository(Semestre::class)->findOneBy(['code' => 'S1']);
        $semestre2 =$em->getRepository(Semestre::class)->findOneBy(['code' => 'S2']);


        $s1 = $em->getRepository(Ue::class)->findBy([
            'mention' => $mention,
            'semestre' => $semestre1
        ]);
        $s2 = $em->getRepository(Ue::class)->findBy([
            'mention' => $mention,
            'semestre' => $semestre2
        ]);
        return $this->render('etudiant/espace/cours/liste_ue/list-ue.html.twig', [ 's2' => $s2,'Status' => $status,'inscrire' => $inscrire ,
            's1' => $s1]);
    }


    /**
     * @Route("/etudiant/Mentions/{id}/s1" , name="s1" , methods={"GET" , "POST"})
     */
    public function s1( Inscrire $inscrire ): Response
    {
        $em= $this->getDoctrine()->getManager();
        $status = $em->getRepository(StatusEc::class)->findBy(['Inscrire' => $inscrire ]);
        $mention = $em->getRepository(Mention::class)->findOneBy(['id' => $inscrire->getMention()]);
        $semestre1 =$em->getRepository(Semestre::class)->findOneBy(['code' => 'S1']);
        $s1 = $em->getRepository(Ue::class)->findBy([
            'mention' => $mention,
            'semestre' => $semestre1,

        ]);

        return $this->render('etudiant/espace/cours/liste_ue/s1.html.twig', ['inscrire' => $inscrire , 'Status' => $status,
            's1' => $s1]);
    }


    /**
     * @Route("/etudiant/Mentions/{id}/s2" , name="s2" , methods={"GET" , "POST"})
     */
    public function s2( Inscrire $inscrire ): Response
    {
        $em= $this->getDoctrine()->getManager();
        $status = $em->getRepository(StatusEc::class)->findBy(['Inscrire' => $inscrire ]);
        $mention = $em->getRepository(Mention::class)->findOneBy(['id' => $inscrire->getMention()]);
        $semestre2 =$em->getRepository(Semestre::class)->findOneBy(['code' => 'S2']);

        $s2 = $em->getRepository(Ue::class)->findBy([
            'mention' => $mention,
            'semestre' => $semestre2,

        ]);

        return $this->render('etudiant/espace/cours/liste_ue/s2.html.twig', ['s2' => $s2,'inscrire' => $inscrire ,'Status' => $status]);
    }



    /**
     * @Route("/etudiant/Mentions/Ec/cours/{id}" , name="cours" , methods={"GET" , "POST"})
     */
    public function Cour( Cours $cours,Request $request): Response
    {

        $em= $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $reacted = $em->getRepository(Reaction::class)->findOneBy(['etudiant' => $user,'ec' => $cours->getEc()]);
        $list_commentaire = $em->getRepository(Commentaire::class)->findBy(['cours' => $cours ]);
        $men = $cours->getEc()->getUe()->getMention();
        $inscri = $em->getRepository(Inscrire::class)->findOneBy(['mention' => $men]);
        $commentaire= new Commentaire();
        $form= $this->createForm(CommentaireType::class, $commentaire);
        $form->remove('auteur');
        $form->remove('cours');
        $form->remove('contenu');

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() && $request->get('contenu')!="") {
            $commentaire->setAuteur($user);
            $commentaire->setCours($cours);
            $commentaire->setContenu($request->get('contenu'));
            $commentaire->setStatus(0);
            $commentaire->setTime(new \DateTime());
            $em->persist($commentaire);
            $em->flush();


            $this->redirectToRoute('cours', [ 'id' => $cours->getId() ]);
        }

        return $this->render('etudiant/espace/cours/lecon.html.twig',[ 'form' => $form->createView() ,
            'cours' => $cours,'reacted' => $reacted , 'user' => $user ,
            'list_commentaires' => $list_commentaire,'inscri' => $inscri ] );
    }

    
    /**
     * @Route("/etudiant/Mentions/Ec/cours/commentaire/{id}" , name="delete_comment" , methods={"GET" , "POST"})
     */
    public function del(Commentaire $comment,Request $request): Response
    {
        $cours = $comment->getCours();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($comment);
            $entityManager->flush();
     
        return $this->redirectToRoute('cours',['id' => $cours->getId() ]);
    }
    

    /**
     * @Route("/etudiant/Mentions/Ec/get-fee", name="like_get_fee", options={"expose"=true } , methods={"GET","POST"})
     */
    public function getFee(Request $request, ReactionRepository $reactionRepository): Response
    {
        $em = $this->getDoctrine()->getManager();
        $cour = $em->getRepository(Cours::class)
                   ->findOneBy(['titre' => $request->get('cours')])
                   ->getEc();

        $user = $em->getRepository(User::class)
                   ->findOneBy(['name' => $request->get('user')]);
        $reactExist = $em->getRepository(Reaction::class)->findOneBy(['ec' => $cour,'etudiant' => $user]);
        if($reactExist){
                $em = $this->getDoctrine()->getManager();
                $em->remove($reactExist);
                $em->flush();
            return new JsonResponse(['like' => 0]);
        }

        $like = new Reaction();

        $like->setEc($cour);
        $like->setEtudiant($user);
        $like->setReact(1);
        $em->persist($like);
        $em->flush();

        return new JsonResponse(['like' => 1]);
    }



}
