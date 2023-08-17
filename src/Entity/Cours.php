<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 * @Vich\Uploadable
 */
class Cours
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
    private $titre;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Ec::class, inversedBy="cours")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ec;

    /**
     * @ORM\OneToMany(targetEntity=FichierSupport::class, mappedBy="cours")
     */
    private $fichierSupport;


    /**
     * @ORM\OneToMany(targetEntity=Audio::class, mappedBy="cours")
     */
    private $audio;

    /**
     * @ORM\OneToMany(targetEntity=Video::class, mappedBy="cours")
     */
    private $video;

    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="cours")
     */
    private $commentaire;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $livre;


    /**
     * @Assert\File(
     *     maxSize = "5M",
     *     maxSizeMessage = "Taille de l'image ne doit pas depasser 2Mo",
     *     mimeTypes = {"image/jpeg","image/gif","image/png", "image/jpg", "image/svg",},
     *     mimeTypesMessage = "Veuillez Uploader le bon format tell que jpeg, jpg, png"
     * )
     * @Vich\UploadableField(mapping="upload_photo_livre", fileNameProperty="livre")
     *
     *
     * @var File
     */
    private $fichierlivre;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fichier;

    /**
     * @Assert\File(
     *     maxSize = "10M",
     *     maxSizeMessage = "Taille de l'image ne doit pas depasser 10Mo",
     *     mimeTypes = {"application/pdf","application/x-pdf","text/pdf","text/x-pdf","applications/vnd.pdf"},
     *     mimeTypesMessage = "Veuillez Uploader le bon format tell que pdf"
     * )
     * @Vich\UploadableField(mapping="upload_fichier_cours", fileNameProperty="fichier")
     *
     *
     * @var File
     */
    private $fichiercour;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;


    public function __construct()
    {
        $this->fichierSupport = new ArrayCollection();
        $this->commentaire = new ArrayCollection();
        $this->audio = new ArrayCollection();
        $this->videos = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getEc(): ?Ec
    {
        return $this->ec;
    }

    public function setEc(?Ec $ec): self
    {
        $this->ec = $ec;

        return $this;
    }
    /**
     * @return Collection|FichierSupport[]
     */
    public function getFichierSupport(): Collection
    {
        return $this->fichierSupport;
    }

    public function addFichierSupport(FichierSupport $fichierSupport): self
    {
        if (!$this->fichierSupport->contains($fichierSupport)) {
            $this->fichierSupport[] = $fichierSupport;
            $fichierSupport->setCours($this);
        }

        return $this;
    }

    public function removeFichierSupport(FichierSupport $fichierSupport): self
    {
        if ($this->fichierSupport->removeElement($fichierSupport)) {
            // set the owning side to null (unless already changed)
            if ($fichierSupport->getCours() === $this) {
                $fichierSupport->setCours(null);
            }
        }

        return $this;
    }



    /**
     * @return Collection|Audio[]
     */
    public function getAudio(): Collection
    {
        return $this->audio;
    }

    public function addAudio(Audio $audio): self
    {
        if (!$this->audio->contains($audio)) {
            $this->audio[] = $audio;
            $audio->setCours($this);
        }

        return $this;
    }

    public function removeAudio(Audio $audio): self
    {
        if ($this->audio->removeElement($audio)) {
            // set the owning side to null (unless already changed)
            if ($audio->getCours() === $this) {
                $audio->setCours(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Video[]
     */
    public function getVideo(): Collection
    {
        return $this->video;
    }

    public function addVideo(Video $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos[] = $video;
            $video->setCours($this);
        }

        return $this;
    }

    public function removeVideo(Video $video): self
    {
        if ($this->videos->removeElement($video)) {
            // set the owning side to null (unless already changed)
            if ($video->getCours() === $this) {
                $video->setCours(null);
            }
        }

        return $this;
    }



    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaire(): Collection
    {
        return $this->commentaire;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaire->contains($commentaire)) {
            $this->commentaire[] = $commentaire;
            $commentaire->setCours($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaire->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getCours() === $this) {
                $commentaire->setCours(null);
            }
        }

        return $this;
    }




    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier($fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }


    public function setFichierCour(?File $fichiercour = null): void
    {
        $this->fichiercour = $fichiercour;
        if (null !== $fichiercour) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            // $this->setUpdated = new \DateTimeImmutable();
        }
    }

    public function getFichierCour(): ?File
    {
        return $this->fichiercour;
    }


    public function getLivre(): ?string
    {
        return $this->livre;
    }


    public function setLivre($livre): self
    {
        $this->livre = $livre;

        return $this;
    }

    public function setFichierlivre(?File $fichierlivre = null): void
    {
        $this->fichierlivre = $fichierlivre;
        if (null !== $fichierlivre) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            // $this->setUpdated = new \DateTimeImmutable();
        }
    }

    public function getFichierlivre(): ?File
    {
        return $this->fichierlivre;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getTitre();
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }


}
