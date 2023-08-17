<?php

namespace App\Controller\Admin;

use App\Entity\Code;
use App\Entity\Cycle;
use App\Entity\Parcours;
use App\Repository\MentionRepository;
use App\Entity\Mention;
use App\Form\MentionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ParametreController extends AbstractController
{
    /**
     * @Route("admin/parametre", name="parametre")
     */
    public function index(Request $request): Response
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
        return $this->render('admin/parametre/index.html.twig', [
            'mention'=>$mention,
            'mentions'=> $mentionRepository,
            'filieres'=>$filiere,
            'niveaux'=>$cycle,
        ]);
    }
}
