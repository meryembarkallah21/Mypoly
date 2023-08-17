<?php

namespace App\Entity;

use App\Repository\MentionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MentionRepository::class)
 */
class Mention
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Cycle::class, inversedBy="cycle")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cycle;


    /**
     * @ORM\OneToMany(targetEntity=Ue::class, mappedBy="mention", orphanRemoval=true)
     */
    private $ue;


    /**
     * @ORM\OneToMany(targetEntity=Inscrire::class, mappedBy="mention")
     */
    private $no;




    /**
     * @ORM\ManyToOne(targetEntity=Code::class, inversedBy="mentions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $code;

    /**
     * @ORM\ManyToOne(targetEntity=Parcours::class, inversedBy="mentions")
     */
    private $parcours;

    /**
     * @ORM\OneToMany(targetEntity=Bibliotheque::class, mappedBy="mention")
     */
    private $bibliotheques;



    public function __construct()
    {
        $this->ue = new ArrayCollection();
        $this->no = new ArrayCollection();
        $this->bibliotheques = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getCycle(): ?Cycle
    {
        return $this->cycle;
    }

    public function setCycle(?Cycle $cycle): self
    {
        $this->cycle = $cycle;

        return $this;
    }




    /**
     * @return Collection|Ue[]
     */
    public function getUe(): Collection
    {
        return $this->ue;
    }

    public function addUe(Ue $ue): self
    {
        if (!$this->ue->contains($ue)) {
            $this->ue[] = $ue;
            $ue->setParcours($this);
        }

        return $this;
    }

    public function removeUe(Ue $ue): self
    {
        if ($this->ue->removeElement($ue)) {
            // set the owning side to null (unless already changed)
            if ($ue->getMention() === $this) {
                $ue->setMention(null);
            }
        }

        return $this;
    }







    /**
     * @return Collection|Inscrire[]
     */
    public function getNo(): Collection
    {
        return $this->no;
    }

    public function addNo(Inscrire $no): self
    {
        if (!$this->no->contains($no)) {
            $this->no[] = $no;
            $no->setMention($this);
        }

        return $this;
    }

    public function removeNo(Inscrire $no): self
    {
        if ($this->no->removeElement($no)) {
            // set the owning side to null (unless already changed)
            if ($no->getMention() === $this) {
                $no->setMention(null);
            }
        }
        return $this;
    }



    public function getCode(): ?Code
    {
        return $this->code;
    }

    public function setCode(?Code $code): self
    {
        $this->code = $code;

        return $this;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getCycle()->getCode().' en '.$this->getCode()->getName().' parcours '.$this->getParcours();
    }

    public function getParcours(): ?Parcours
    {
        return $this->parcours;
    }

    public function setParcours(?Parcours $parcours): self
    {
        $this->parcours = $parcours;

        return $this;
    }

    /**
     * @return Collection|Bibliotheque[]
     */
    public function getBibliotheques(): Collection
    {
        return $this->bibliotheques;
    }

    public function addBibliotheque(Bibliotheque $bibliotheque): self
    {
        if (!$this->bibliotheques->contains($bibliotheque)) {
            $this->bibliotheques[] = $bibliotheque;
            $bibliotheque->setMention($this);
        }

        return $this;
    }

    public function removeBibliotheque(Bibliotheque $bibliotheque): self
    {
        if ($this->bibliotheques->removeElement($bibliotheque)) {
            // set the owning side to null (unless already changed)
            if ($bibliotheque->getMention() === $this) {
                $bibliotheque->setMention(null);
            }
        }

        return $this;
    }
}
