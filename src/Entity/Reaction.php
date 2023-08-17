<?php

namespace App\Entity;

use App\Repository\ReactionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReactionRepository::class)
 */
class Reaction
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
    private $react;


    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="reactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiant;

    /**
     * @ORM\ManyToOne(targetEntity=Ec::class, inversedBy="reactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ec;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReact(): ?bool
    {
        return $this->react;
    }

    public function setReact(bool $react): self
    {
        $this->react = $react;

        return $this;
    }


    public function getEtudiant(): ?User
    {
        return $this->etudiant;
    }

    public function setEtudiant(?User $etudiant): self
    {
        $this->etudiant = $etudiant;

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
