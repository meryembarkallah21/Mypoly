<?php

namespace App\Controller\Etudiant\bookstore;

use App\Entity\Calendrier;
use App\Entity\Cours;
use App\Entity\Ec;
use App\Entity\Inscrire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("etudiant/bookstore")
 */
class BookstoreController extends AbstractController
{
    /**
     * @Route("/", name="etudiant_bookstore")
     */
    public function index(SessionInterface $session): Response
    {
        $em = $this->getDoctrine()->getManager();
        $books = $em->getRepository(Cours::class);

        $panier = $session->get('panier', []);

        $panierwithData = [];

        foreach($panier as $id => $quantity){
            $panierwithData[] = [
                'book' => $books->find($id),
                'quantity' => $quantity
            ];
        }

        $total = 0;

        foreach($panierwithData as $item){

            $totalItem = $item['book']->getPrix();
            $total +=$totalItem;
        }


        return $this->render('etudiant/espace/bookstore/bookstore.html.twig', [
        'books'=> $books->findAll(),
        'items' => $panierwithData,
        'total' => $total
        ]);
    }

    /**
     * @Route("/panier/add/{id}", name="cart_add")
     */
    public function add($id,SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        $panier[$id] = 1;

        $session->set('panier', $panier);

        return $this->redirectToRoute("etudiant_bookstore");
    }

    /**
     * @Route("/panier/remove/{id}", name="cart_remove")
     */
    public function remove($id,SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute("etudiant_bookstore");
    }

}