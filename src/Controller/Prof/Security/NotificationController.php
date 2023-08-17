<?php

namespace App\Controller\Prof\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NotificationController extends AbstractController
{
    /**
     * @Route("prof/reset-password", name="prof_after_send_mail")
     */
    public function notifyAfterResetLink(){

        return $this->render('prof/security/notify_after_reset_password.html.twig');
    }
    /**
     * @Route("prof/inscription-succes", name="prof_after_inscription")
     */
    public function notifyAfterInscription(){

        return $this->render('prof/security/notify_after_inscription.html.twig');
    }
}
