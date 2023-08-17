<?php

namespace App\Entity;

use App\Repository\EcRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EcRepository::class)
 */
class Ec
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=Ue::class, inversedBy="no")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ue;

    /**
     * @ORM\Column(type="integer")
     */
    private $coeff;

    /**
     * @ORM\OneToMany(targetEntity=Cours::class, mappedBy="ec", orphanRemoval=true)
     */
    private $cours;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ecs")
     */
    private $prof;

    /**
     * @ORM\OneToMany(targetEntity=Reaction::class, mappedBy="ec", orphanRemoval=true)
     */
    private $reactions;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity=StatusEc::class, mappedBy="ec", orphanRemoval=true)
     */
    private $statusEcs;

    /**
     * @ORM\OneToMany(targetEntity=Bibliotheque::class, mappedBy="ec")
     */
    private $bibliotheques;



    public function __construct()
    {
        $this->cours = new ArrayCollection();
        $this->status = 0;
        $this->audios = new ArrayCollection();
        $this->reactions = new ArrayCollection();
        $this->statusEcs = new ArrayCollection();
        $this->bibliotheques = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUe(): ?Ue
    {
        return $this->ue;
    }

    public function setUe(?Ue $ue): self
    {
        $this->ue = $ue;

        return $this;
    }

    public function getCoeff(): ?int
    {
        return $this->coeff;
    }

    public function setCoeff(int $coeff): self
    {
        $this->coeff = $coeff;

        return $this;
    }

    /**
     * @return Collection|Cours[]
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): self
    {
        if (!$this->cours->contains($cour)) {
            $this->cours[] = $cour;
            $cour->setEc($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): self
    {
        if ($this->cours->removeElement($cour)) {
            // set the owning side to null (unless already changed)
            if ($cour->getEc() === $this) {
                $cour->setEc(null);
            }
        }

        return $this;
    }

    public function getProf(): ?User
    {
        return $this->prof;
    }

    public function setProf(?User $prof): self
    {
        $this->prof = $prof;

        return $this;
    }

    /**
     * @return Collection|Reaction[]
     */
    public function getReactions(): Collection
    {
        return $this->reactions;
    }

    public function addReaction(Reaction $reaction): self
    {
        if (!$this->reactions->contains($reaction)) {
            $this->reactions[] = $reaction;
            $reaction->setEc($this);
        }

        return $this;
    }

    public function removeReaction(Reaction $reaction): self
    {
        if ($this->reactions->removeElement($reaction)) {
            // set the owning side to null (unless already changed)
            if ($reaction->getEc() === $this) {
                $reaction->setEc(null);
            }
        }

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
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

    /**
     * @return Collection|StatusEc[]
     */
    public function getStatusEcs(): Collection
    {
        return $this->statusEcs;
    }

    public function addStatusEc(StatusEc $statusEc): self
    {
        if (!$this->statusEcs->contains($statusEc)) {
            $this->statusEcs[] = $statusEc;
            $statusEc->setEc($this);
        }

        return $this;
    }

    public function removeStatusEc(StatusEc $statusEc): self
    {
        if ($this->statusEcs->removeElement($statusEc)) {
            // set the owning side to null (unless already changed)
            if ($statusEc->getEc() === $this) {
                $statusEc->setEc(null);
            }
        }

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
            $bibliotheque->setEc($this);
        }

        return $this;
    }

    public function removeBibliotheque(Bibliotheque $bibliotheque): self
    {
        if ($this->bibliotheques->removeElement($bibliotheque)) {
            // set the owning side to null (unless already changed)
            if ($bibliotheque->getEc() === $this) {
                $bibliotheque->setEc(null);
            }
        }

        return $this;
    }





}
