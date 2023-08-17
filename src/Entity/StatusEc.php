<?php

namespace App\Entity;

use App\Repository\StatusEcRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatusEcRepository::class)
 */
class StatusEc
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Inscrire::class, inversedBy="statusEcs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Inscrire;

    /**
     * @ORM\ManyToOne(targetEntity=Ec::class, inversedBy="statusEcs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ec;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getInscrire(): ?Inscrire
    {
        return $this->Inscrire;
    }

    public function setInscrire(?Inscrire $Inscrire): self
    {
        $this->Inscrire = $Inscrire;

        return $this;
    }

    public function getEc(): ?Ec
    {
        return $this->ec;
    }

    public function setEc(?Ec $ec): self
    {
        $this->ec = $ec;

        return $this;
    }


}
