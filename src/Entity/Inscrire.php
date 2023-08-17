<?php

namespace App\Entity;

use App\Repository\InscrireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass=InscrireRepository::class)
 * * @Vich\Uploadable
 */
class Inscrire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity=Mention::class, inversedBy="no")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mention;

    /**
     * @ORM\ManyToOne(targetEntity=Years::class, inversedBy="no")
     * @ORM\JoinColumn(nullable=false)
     */
    private $year;



    /**
     * @var int
     *
     * @ORM\Column(name="matricule", type="integer")
     */
    private $matricule;


    /**
     * @ORM\Column(type="date")
     */
    private $dateInscription;

    /**
     * @ORM\ManyToOne(targetEntity=Parcours::class, inversedBy="inscrires")
     */
    private $parcours;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="inscrires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Etudiant;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;



    /**
     * @var File
     *
     *    @Assert\File(
     *    maxSize = "5M",
     *    maxSizeMessage = "Taille de l'image ne doit pas depasser 2Mo",
     *    mimeTypes = {"image/jpeg","image/gif","image/png", "image/jpg", "image/svg",},
     *    mimeTypesMessage = "Veuillez Uploader le bon format tell que jpeg, jpg, png")
     *
     * @Vich\UploadableField(mapping="motif_inscription_file", fileNameProperty="fichierVirement")
     */
    private $fichierVir;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fichierVirement;

    /**
     * @ORM\Column(type="integer")
     */
    private $isAdmis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typePayement;

    /**
     * @ORM\OneToMany(targetEntity=StatusEc::class, mappedBy="Inscrire", orphanRemoval=true)
     */
    private $statusEcs;



    public function __construct()
    {
        //motif.png
        //$this->motif = "motif.png";
        $this->isAdmis = 0;
        $this->statusEcs = new ArrayCollection();
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

    public function getYear(): ?Years
    {
        return $this->year;
    }

    public function setYear(?Years $year): self
    {
        $this->year = $year;

        return $this;
    }





    public function getDateInscription(): ?\DateTimeInterface
    {
        return $this->dateInscription;
    }

    public function setDateInscription(\DateTimeInterface $dateInscription): self
    {
        $this->dateInscription = $dateInscription;

        return $this;
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

    public function getEtudiant(): ?User
    {
        return $this->Etudiant;
    }

    public function setEtudiant(?User $Etudiant): self
    {
        $this->Etudiant = $Etudiant;

        return $this;
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

    public function getFichierVirement(): ?string
    {
        return $this->fichierVirement;
    }

    public function setFichierVirement($fichierVirement): self
    {
        $this->fichierVirement = $fichierVirement;

        return $this;
    }


    public function getFichierVir(): ?File
    {
        return $this->fichierVir;
    }

    public function setFichierVir(?File $fichierVir): void
    {
        $this->fichierVir = $fichierVir;
    }


    /**
     * Set matricule.
     *
     * @param int $matricule
     *
     * @return Inscrire
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule.
     *
     * @return int
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    public function getIsAdmis(): ?int
    {
        return $this->isAdmis;
    }

    public function setIsAdmis(int $isAdmis): self
    {
        $this->isAdmis = $isAdmis;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getTypePayement(): ?string
    {
        return $this->typePayement;
    }

    public function setTypePayement(string $typePayement): self
    {
        $this->typePayement = $typePayement;

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
            $statusEc->setInscrire($this);
        }

        return $this;
    }

    public function removeStatusEc(StatusEc $statusEc): self
    {
        if ($this->statusEcs->removeElement($statusEc)) {
            // set the owning side to null (unless already changed)
            if ($statusEc->getInscrire() === $this) {
                $statusEc->setInscrire(null);
            }
        }

        return $this;
    }




}
