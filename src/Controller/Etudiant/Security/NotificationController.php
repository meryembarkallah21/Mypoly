<?php

namespace App\Controller\Etudiant\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotificationController extends AbstractController
{
    /**
     * @Route("/reset-password", name="etudiant_after_send_mail")
     */
    public function notifyAfterResetLink(){

        return $this->render('etudiant/security/notify_after_reset_password.html.twig');
    }
    /**
     * @Route("/inscription-succes", name="etudiant_after_inscription")
     */
    public function notifyAfterInscription(){

        return $this->render('etudiant/security/notify_after_inscription.html.twig');
    }
}
