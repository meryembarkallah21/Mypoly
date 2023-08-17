<?php

namespace App\Controller\Admin;

use App\Entity\Code;
use App\Entity\Cycle;
use App\Entity\Mention;
use App\Entity\Parcours;
use App\Form\MentionType;
use App\Repository\MentionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/mention")
 */
class MentionController extends AbstractController
{
    /**
     * @Route("/", name="mention_index", methods={"GET"})
     */
    public function index(MentionRepository $mentionRepository): Response
    {
        return $this->render('admin/mention/index.html.twig', [
            'mentions' => $mentionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/get-parcours", name="get-parc", options={"expose"=true } , methods={"GET","POST"})
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

    /**
     * @Route("/new", name="mention_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $mentionRepository = $em->getRepository(Mention::class)->findAll();
        $filiere = $em->getRepository(Code::class)->findAll();

        $cycle = $em->getRepository(Cycle::class)->findAll();

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
        $mention = new Mention();

        if(empty($mentionrepo)){

            if($fi and $ni and $pa){
                $mention->setCycle($ni);
                $mention->setCode($fi);
                $mention->setParcours($pa);
                $em->persist($mention);
                $em->flush();

                return $this->redirectToRoute('mention_new');
            }
        }
        return $this->render('admin/mention/new.html.twig', [
            'mention'=>$mention,
            'mentions'=> $mentionRepository,
            'filieres'=>$filiere,
            'niveaux'=>$cycle,
        ]);
    }

    /**
     * @Route("/{id}", name="mention_show", methods={"GET"})
     */
    public function show(Mention $mention): Response
    {
        return $this->render('admin/mention/show.html.twig', [
            'mention' => $mention,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="mention_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Mention $mention): Response
    {
        $em = $this->getDoctrine()->getManager();
        $mentionRepository = $em->getRepository(Mention::class)->findAll();
        $filiere = $em->getRepository(Code::class)->findAll();

        $cycle = $em->getRepository(Cycle::class)->findAll();

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
        if(empty($mentionrepo)){

            if($fi and $ni and $pa){
                $mention->setCycle($ni);
                $mention->setCode($fi);
                $mention->setParcours($pa);
                $em->persist($mention);
                $em->flush();

                return $this->redirectToRoute('mention_new');
            }
        }
        return $this->render('admin/mention/edit.html.twig', [
            'mention'=>$mention,
            'mentions'=> $mentionRepository,
            'filieres'=>$filiere,
            'niveaux'=>$cycle,
        ]);
    }

    /**
     * @Route("/{id}", name="mention_delete", methods={"POST"})
     */
    public function delete(Request $request, Mention $mention): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mention->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mention);
            $entityManager->flush();
        }

        return $this->redirectToRoute('mention_new');
    }
}
