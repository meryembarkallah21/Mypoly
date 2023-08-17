<?php

namespace App\Controller\Etudiant\Inscription;

use App\Entity\Code;
use App\Entity\ComptePayement;
use App\Entity\Cycle;
use App\Entity\Inscrire;
use App\Entity\Parcours;
use App\Entity\Years;
use App\Repository\CycleRepository;
use App\Repository\MentionRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Mention;
use Symfony\Component\Form\FormInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\InscrireType;
use App\Form\MentionType;
use Doctrine\ORM\Mapping\Id;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Length;


class InscriptionMentionController extends AbstractController
{

    /**
     * @Route("/etudiant/Inscription/Mle", name="check_mle" , methods={"GET","POST"})
     */
    public function Mle(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $code = $em->getRepository(Code::class)->findOneBy(['id' => $request->get('id')]);

        $inscription = $em->getRepository(Inscrire::class)->findOneBy(['matricule' => $request->get('matricule'),
                                                                                'Etudiant' => $this->getUser() ]);
        if($inscription){
            if ($inscription->getMention()->getCode() == $code){
                return $this->redirectToRoute('etudiant_reinscription',['id' => $inscription->getId() ]);
            }
        }

        $this->addFlash('error',"ce numero matricule n'est pas le votre");
        return $this->redirectToRoute('mention');
    }



    /**
     * @Route("/etudiant/Inscription/{id}", name="etudiant_inscription" , methods={"GET","POST"})
     */
    public function inscription_mention(Code $code,Request $request): Response
    {
        $user= $this->getUser();
        $em= $this->getDoctrine()->getManager();
        $inscrire = new Inscrire();

        $form = $this->createForm(InscrireType::class, $inscrire);
        $comptes = $em->getRepository(ComptePayement::class)->findAll();

        $form->remove('ville');
        $form->remove('year');
        $form->remove('mention');
        $form->remove('parcours');
        $form->remove('Etudiant');
        $annee = $em->getRepository(Years::class)->findOneBy(['current'=> 1 ]);
        $cycle= $em->getRepository(Cycle::class)->findAll();
        $parcours = $em->getRepository(Parcours::class)->findBy(['code' => $code ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $inscrire->setDateInscription(new \DateTime());
            $inscrire->setEtudiant($user);
            $inscrire->setStatus(0);

            $parc = $em->getRepository(Parcours::class)->findOneBy(['id' => $request->get('parcours')]);
            $cycl = $em->getRepository(Cycle::class)->findOneBy(['id' => $request->get('cycle')]);
            $men = $em->getRepository(Mention::class)->findOneBy(['cycle' => $cycl, 'parcours' => $parc ]);
            $inscrire->setYear($annee);
            $inscrire->setTypePayement($request->get('payement'));
            $inscrire->setMatricule($request->get('matricule'));
            $inscrire->setParcours($parc);
            $inscrire->setMention($men);
            $em->persist($inscrire);
            $em->flush();

            return $this->redirectToRoute('after_inscription',['id' => $inscrire->getId() ]);
        }

        return $this->render('etudiant/espace/inscription/inscription.html.twig', ['inscrire' => $inscrire,'user' => $user ,
            'form' => $form->createView(),
            'cycles' => $cycle,
            'code' => $code,
            'annee'=> $annee,
            'comptes' => $comptes,
            'controller_name' => 'InscriptionController',
            'parcours' => $parcours,
            'matricule' => $this->generateMatricule($annee)
        ]);
    }




    /**
     * @Route("/etudiant/Reinscription/{id}", name="etudiant_reinscription" , methods={"GET","POST"})
     */
    public function reinscription_mention(Inscrire $inscription,Request $request): Response
    {
        $em= $this->getDoctrine()->getManager();
        $inscrire = new Inscrire();

        if ($inscription->getIsAdmis() == 0 ){
            $this->addFlash('error',"la réinscription n'est pas autorisé avant la sortie du résultat final");
            return $this->redirectToRoute('mention');
        }elseif ($inscription->getMention()->getCycle()->getCode() == "L1" and $inscription->getIsAdmis() == 1){
            $cycle = $em->getRepository(Cycle::class)->findOneBy(['code' => "L2"]);
        }elseif ($inscription->getMention()->getCycle()->getCode() == "L2" and $inscription->getIsAdmis() == 1){
            $cycle = $em->getRepository(Cycle::class)->findOneBy(['code' => "L3"]);
        }elseif ($inscription->getIsAdmis() == 2){
            $cycle = $inscription->getMention()->getCycle();
        }


        $form = $this->createForm(InscrireType::class, $inscrire);
        $comptes = $em->getRepository(ComptePayement::class)->findAll();

        $form->remove('year');
        $form->remove('mention');
        $form->remove('parcours');
        $form->remove('Etudiant');
        $annee = $em->getRepository(Years::class)->findOneBy(['current'=> 1 ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $inscrire->setDateInscription(new \DateTime());
            $inscrire->setEtudiant($inscription->getEtudiant());
            $inscrire->setStatus(0);

            $mention = $em->getRepository(Mention::class)->findOneBy(['cycle' => $request->get('cycle'),'parcours' => $inscription->getParcours()]);
            $inscrire->setYear($annee);
            $inscrire->setMatricule($request->get('matricule'));
            $inscrire->setTypePayement($request->get('payement'));
            $inscrire->setParcours($inscription->getParcours());
            $inscrire->setMention($mention);
            $em->persist($inscrire);
            $em->flush();

            return $this->redirectToRoute('after_inscription',['id' => $inscrire->getId() ]);
        }

        return $this->render('etudiant/espace/inscription/reinscription.html.twig', [
            'form' => $form->createView(),
            'cycle' => $cycle,
            'inscription' => $inscription,
            'annee'=> $annee,
            'comptes' => $comptes,
            'controller_name' => 'InscriptionController',
            'matricule' => $this->generateMatricule($annee)
        ]);
    }





    /**
     * @Route("/etudiant/get-fee", name="etudiant_inscription_get_fee", options={"expose"=true } , methods={"GET","POST"})
     */
    public function getFee(Request $request, CycleRepository $cycleRepository): Response
    {
        $repo = $cycleRepository->findOneBy(['id' => $request->get('niveau')]);
        $parcours = $this->getDoctrine()->getManager()
                         ->getRepository(Parcours::class)
                         ->findBy(['cycle' => $repo,'code' => $request->get('code')]);

        $parcour = [];

        foreach ($parcours as $parc){
            $parcour[] = [
              'id' => $parc->getId(),
              'name' => $parc->getName(),
            ];
        }


        return new JsonResponse(['droit' => $repo->getFraisInscription(),'parcours' => $parcour]);
    }


    /**
     * @Route("/etudiant/Inscription/after_inscription/{id}", name="after_inscription" , methods={"GET","POST"})
     */
    public function after_inscription(Inscrire $inscrire): Response
    {
       return  $this->render('etudiant/espace/inscription/after_inscription.html.twig',['inscrire' => $inscrire ]);
    }

    /**
     *
     * @return int
     */
    private function generateMatricule($annee)
    {
        $em = $this->getDoctrine()->getManager();
        $mat = $em->getRepository(Inscrire::class)->findBy(
            ['year' => $annee],
            [
                'id' => 'desc',
            ]
        );

        return empty($mat) ? 1 : $mat[0]->getMatricule() + 1;
    }

}
