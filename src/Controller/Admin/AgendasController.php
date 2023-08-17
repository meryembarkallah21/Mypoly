<?php

namespace App\Controller\Admin;

use App\Entity\Calendrier;
use App\Entity\Code;
use App\Entity\Cycle;
use App\Entity\Ec;
use App\Entity\Mention;
use App\Entity\Parcours;
use App\Entity\Semestre;
use App\Entity\User;
use App\Form\CalendarType;
use App\Form\CalendrierType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("admin/agendas")
 */
class AgendasController extends AbstractController
{
    /**
     * @Route("/", name="admin_agendas")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $matieres = $em->getRepository(Ec::class)->findAll();
        $filieres = $em->getRepository(Code::class)->findAll();
        $parcours = $em->getRepository(Parcours::class)->findAll();
        $semestres = $em->getRepository(Semestre::class)->findAll();
        $niveau = $em->getRepository(Cycle::class)->findAll();
        $profs= $em->getRepository(User::class)->listProfs();
        $events = $em->getRepository(Calendrier::class)->findAll();
        $edt = [];
        $calendrier = new Calendrier();
        $form = $this->createForm(CalendrierType::class, $calendrier);
        foreach ($events as $event){
            $edt[]=[
                'id'=>$event->getId(),
                'title'=>twig_raw_filter($event->getTitle()),
                'start'=>$event->getStart()->format('Y-m-d H:i:s'),
                'end'=>$event->getEnd()->format('Y-m-d H:i:s'),
                'description'=>$event->getDescription(),
                'allDay'=>$event->getAllDay(),
                'backgroundColor'=>$event->getBackgroundColor(),
                'borderColor'=>$event->getBorderColor(),
                'textColor'=>$event->getTextColor(),
            ];
        }
        $form = $form->createView();
        $data = json_encode($edt);
        return $this->render('admin/agendas/index.html.twig',compact('data','matieres','niveau','filieres','parcours','form','profs','semestres'));
    }
    /**
     * @Route("/api/{id}/edit", name="api_event_edit", methods={"PUT"})
     */
    public function majEvent(Calendrier $calendrier , Request $request)
    {

        //On récupère les données
        $donnees = json_decode($request->getContent());
        if(
            isset($donnees->title) && !empty($donnees->title) &&
            isset($donnees->start) && !empty($donnees->start) &&
            //isset($donnees->allDay) && !empty($donnees->allDay) &&
            //isset($donnees->end) && !empty($donnees->end) &&
            //isset($donnees->description) && !empty($donnees->description) &&
            isset($donnees->backgroundColor) && !empty($donnees->backgroundColor) &&
            isset($donnees->borderColor) && !empty($donnees->borderColor) &&
            isset($donnees->textColor) && !empty($donnees->textColor)
        )
        {
            //les données sont complètes
            //On initialise un code
            $code = 200;
            // On vérifie si l'id existe
            if(!$calendrier){
                //On instancie un emplois du temps
                $calendrier = new Calendrier();
                // On change le code
                $code = 201;
            }
            //On hydrate l'objet avec les donées
            $calendrier->setTitle($donnees->title);
            $calendrier->setStart(new \DateTime($donnees->start));
            if($donnees->allDay){
                $calendrier->setEnd(new \DateTime($donnees->start));
            }else{
                $calendrier->setEnd(new \DateTime($donnees->end));
            }
            $calendrier->setAllDay($donnees->allDay);
            $calendrier->setDescription($donnees->description);
            $calendrier->setBackgroundColor($donnees->backgroundColor);
            $calendrier->setBorderColor($donnees->borderColor);
            $calendrier->setTextColor($donnees->textColor);

            $em = $this->getDoctrine()->getManager();
            $em->persist($calendrier);
            $em->flush();

            // On retourne le code

            return new Response("Ok",$code);
        }
        else
        {
            //les données sont incomplètes
            return new Response("Données incomplètes ",404);
        }

    }
    /**
     *  @Route("/new/event", name="new_event", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function newEvent(Request $request)
    {
        $calendrier = new Calendrier();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(CalendrierType::class, $calendrier);
        $form->handleRequest($request);

        $prof = $em->getRepository(User::class)->findOneBy([
            'id'=>$request->get('_prof'),
        ]);

        $ec = $em->getRepository(Ec::class)->findOneBy([
            'id'=>$request->get('_ec'),
        ]);

        $fi = $em->getRepository(Code::class)->findOneBy([
            'id'=>$request->get('_filiere'),
        ]);

        $ni = $em->getRepository(Cycle::class)->findOneBy([
            'id'=>$request->get('_niveau'),
        ]);

        $pa = $em->getRepository(Parcours::class)->findOneBy([
            'id'=>$request->get('_parcours'),
        ]);

        $mentionrepo = $em->getRepository(Mention::class)->findOneBy([
            'cycle'=>$ni,
            'code'=>$fi,
            'parcours'=>$pa,
        ]);
        $semestre = $em->getRepository(Semestre::class)->findOneBy([
            'id'=>$request->get('_semestre'),
        ]);
        $publier = $request->get('_publie');
        if($publier == null){
            $publie = 0;
        }else
        {
            $publie = 1;
        }

        $titre = $request->get('titre');
        $calendrier->setTitle($titre);
        $calendrier->setStart(new \DateTime($request->get('start') ));
        $calendrier->setEnd(new \DateTime($request->get('end') ));
        $calendrier->setBackgroundColor($request->get('backgroundColor'));
        $calendrier->setBorderColor($request->get('borderColor'));
        $calendrier->setTextColor($request->get('textColor'));
        $calendrier->setAllDay(0);
        $calendrier->setUser($prof);
        $calendrier->setSemestre($semestre);
        $calendrier->setMention($mentionrepo);
        $calendrier->setEc($ec);
        $calendrier->setPublier($publie);
        $em = $this->getDoctrine()->getManager();
        $em->persist($calendrier);
        $em->flush();
        return $this->redirectToRoute('admin_agendas');
    }

    /**
     * @Route("/suppression/cours", name="calendrier_delete", methods={"GET"})
     * @param Request $request
     * @return RedirectResponse
     */
    public function deleteAction(Request $request)
    {
        if ($request->isMethod('GET')) {
            $em = $this->getDoctrine()->getManager();
            $calendrier = $em->getRepository(Calendrier::class)->find($request->get('id'));
            $em->remove($calendrier);
            $em->flush();
            return $this->redirectToRoute('admin_agendas');
        }
    }
    /**
     * @Route("/imprimer/pdf", name="imprimer_pdf")
     *
     */
    public function pdf()
    {
        return $this->redirectToRoute('admin_agendas');
    }

    /******* CRUD *******************/

    /**
     * @Route("/{id}/edit", name="admin_edit_evenement", methods={"GET","POST"})
     */
    public function edit(Request $request, Calendrier $calendrier): Response
    {
        $form = $this->createForm(CalendarType::class, $calendrier);
        $form->remove('user');
        $form->remove('publier');
        $form->remove('allDay');
        $form->remove('start');
        $form->remove('end');
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        $filiere = $em->getRepository(Code::class)->findAll();

        $cycle = $em->getRepository(Cycle::class)->findAll();

        $profs = $em->getRepository(User::class)->listProfs();

        $prof = $em->getRepository(User::class)->findOneBy([
            'id'=>$request->get('_prof'),
        ]);

        $fi = $em->getRepository(Code::class)->findOneBy([
            'id'=>$request->get('_filiere'),
        ]);

        $ni = $em->getRepository(Cycle::class)->findOneBy([
            'id'=>$request->get('_niveau'),
        ]);

        $pa = $em->getRepository(Parcours::class)->findOneBy([
            'id'=>$request->get('_parcours'),
        ]);

        $mentionrepo = $em->getRepository(Mention::class)->findOneBy([
            'cycle'=>$ni,
            'code'=>$fi,
            'parcours'=>$pa,
        ]);

        $publier = $request->get('_publie');

        if($publier == null){
            $publie = 0;
        }else
        {
            $publie = 1;
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $calendrier->setUser($prof);
            $calendrier->setMention($mentionrepo);
            $calendrier->setPublier($publie);
            $em = $this->getDoctrine()->getManager();
            $em->persist($calendrier);
            $em->flush();
            return $this->redirectToRoute('admin_agendas_list');
        }
        return $this->render('admin/agendas/edit.htm.twig', [
            'form'=>$form->createView(),
            'calendrier'=>$calendrier,
            'filieres'=>$filiere,
            'niveau'=>$cycle,
            'profs'=>$profs,
        ]);
    }
    /**
     * @Route("/list", name="admin_agendas_list", methods={"GET"})
     */
    public function list(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $agendas = $em->getRepository(Calendrier::class)->findAll();
        return $this->render('admin/agendas/list.html.twig', [
            'agendas'=>$agendas,
        ]);
    }

    /**
     * @Route("/{id}/supprimer", name="admin_agendas_supprimer", methods={"GET","POST"})
     */
    public function delete(Calendrier $agendas): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($agendas);
        $entityManager->flush();

        return $this->redirectToRoute('admin_agendas_list');
    }

}
