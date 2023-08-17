<?php

namespace App\Services;

class Mail
{
   private $mailer;
   public function __construct(\Swift_Mailer $mailer)
   {
      $this->mailer = $mailer;
   }
    public function  registration($url, $user){
        $body = "click sur le lien suivant pour activé votre compte    <a href=\"".$url ."\">ici</a>";
        $message = (new \Swift_Message('Votre inscription'))
        ->setFrom("mytaskpro.cms@gmail.com")
        ->setTo($user->getEmail())
        ->setBody($body,'text/html' );

        $this->mailer->send($message);
    }

    public function resetPassword($url, $user){

        $body = "click sur le lien suivant pour reinitialiser votre mot de passe    <a href=\"".$url ."\">ici</a>";
  
        $message = (new \Swift_Message('Mot de passe oublier'))
        ->setFrom("mytaskpro.cms@gmail.com")
        ->setTo($user->getEmail())
        ->setBody($body,'text/html');
  
        $this->mailer->send($message);
     }
} 