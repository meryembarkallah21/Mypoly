<?php

namespace App\Entity;

use App\Repository\CycleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CycleRepository::class)
 */
class Cycle
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Mention::class, mappedBy="cycle", orphanRemoval=true)
     */
    private $cycle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fraisInscription;

    /**
     * @ORM\OneToMany(targetEntity=Parcours::class, mappedBy="cycle")
     */
    private $parcours;


    public function __construct()
    {
        $this->cycle = new ArrayCollection();
        $this->parcours = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
    public function __toString(){
        
        return $this->getCode();
    }

    /**
     * @return Collection|Mention[]
     */
    public function getCycle(): Collection
    {
        return $this->cycle;
    }

    public function addCycle(Mention $cycle): self
    {
        if (!$this->cycle->contains($cycle)) {
            $this->cycle[] = $cycle;
            $cycle->setCycle($this);
        }

        return $this;
    }

    public function removeCycle(Mention $cycle): self
    {
        if ($this->cycle->removeElement($cycle)) {
            // set the owning side to null (unless already changed)
            if ($cycle->getCycle() === $this) {
                $cycle->setCycle(null);
            }
        }

        return $this;
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

    public function getFraisInscription(): ?string
    {
        return $this->fraisInscription;
    }

    public function setFraisInscription(string $fraisInscription): self
    {
        $this->fraisInscription = $fraisInscription;

        return $this;
    }

    /**
     * @return Collection|Parcours[]
     */
    public function getParcours(): Collection
    {
        return $this->parcours;
    }

    public function addParcour(Parcours $parcour): self
    {
        if (!$this->parcours->contains($parcour)) {
            $this->parcours[] = $parcour;
            $parcour->setCycle($this);
        }

        return $this;
    }

    public function removeParcour(Parcours $parcour): self
    {
        if ($this->parcours->removeElement($parcour)) {
            // set the owning side to null (unless already changed)
            if ($parcour->getCycle() === $this) {
                $parcour->setCycle(null);
            }
        }

        return $this;
    }

}
