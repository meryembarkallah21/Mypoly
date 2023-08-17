<?php

namespace App\Entity;

use App\Repository\BibliothequeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=BibliothequeRepository::class)
 * @Vich\Uploadable
 */
class Bibliotheque
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
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fichier;
    /**
     * @Assert\File(
     *     maxSize = "2M",
     *     maxSizeMessage = "Taille de fichier ne doit pas depasser 2Mo",
     *     mimeTypes = {"application/pdf","application/x-pdf"},
     *     mimeTypesMessage = "Veuillez Uploader le bon format tell que pdf"
     * )
     * @Vich\UploadableField(mapping="upload_fichier_bibliotheque", fileNameProperty="fichier")
     *
     *
     * @var File
     */
    private $doc;

    /**
     * @ORM\ManyToOne(targetEntity=Mention::class, inversedBy="bibliotheques")
     */
    private $mention;

    /**
     * @ORM\ManyToOne(targetEntity=Ec::class, inversedBy="bibliotheques")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ec;

    /**
     * @ORM\ManyToOne(targetEntity=Semestre::class, inversedBy="bibliotheques")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Semestre;



    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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


    public function getMention(): ?Mention
    {
        return $this->mention;
    }

    public function setMention(?Mention $mention): self
    {
        $this->mention = $mention;

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

    public function getSemestre(): ?Semestre
    {
        return $this->Semestre;
    }

    public function setSemestre(?Semestre $Semestre): self
    {
        $this->Semestre = $Semestre;

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

    public function setDoc(?File $doc = null): void
    {
        $this->doc = $doc;
        if (null !== $doc) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            //            $this->setUpdated = new \DateTimeImmutable();
        }
    }
    public function getDoc(): ?File
    {
        return $this->doc;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
