<?php

namespace App\Entity;

use App\Repository\UeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UeRepository::class)
 */
class Ue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Mention::class, inversedBy="ue")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mention;

    /**
     * @ORM\ManyToOne(targetEntity=Semestre::class, inversedBy="no")
     * @ORM\JoinColumn(nullable=false)
     */
    private $semestre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Ec::class, mappedBy="ue", orphanRemoval=true)
     */
    private $no;

    public function __construct()
    {
        $this->no = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMention(): ?Mention
    {
        return $this->mention;
    }

    public function setMention(?Mention $mention): self
    {
        $this->mention = $mention;

        return $this;
    }

    public function getSemestre(): ?Semestre
    {
        return $this->semestre;
    }

    public function setSemestre(?Semestre $semestre): self
    {
        $this->semestre = $semestre;

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

    /**
     * @return Collection|Ec[]
     */
    public function getNo(): Collection
    {
        return $this->no;
    }

    public function addNo(Ec $no): self
    {
        if (!$this->no->contains($no)) {
            $this->no[] = $no;
            $no->setUe($this);
        }

        return $this;
    }

    public function removeNo(Ec $no): self
    {
        if ($this->no->removeElement($no)) {
            // set the owning side to null (unless already changed)
            if ($no->getUe() === $this) {
                $no->setUe(null);
            }
        }

        return $this;
    }
    public function __toString(){
        return $this->getName().'  -- '.$this->getMention()->getParcours()->getName().'--'.$this->getMention()->getCycle()->getCode().' en '.$this->getMention()->getCode()->getName();
    }
}
