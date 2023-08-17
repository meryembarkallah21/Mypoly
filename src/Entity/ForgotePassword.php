<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
class ForgotePassword
{

    private $email;

    /**
     * @Assert\Length(min=4, minMessage="Votre mot de passe doit faire au moins 4 carracteres !")
     */
    private $newPassword;


    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    public function setNewPassword(string $newPassword): self
    {
        $this->newPassword = $newPassword;

        return $this;
    }
}
