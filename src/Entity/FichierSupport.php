<?php

namespace App\Entity;

use App\Repository\FichierSupportRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=FichierSupportRepository::class)
 * @Vich\Uploadable
 */
class FichierSupport
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
    private $fichier;

    /**
     * @Assert\File(
     *     maxSize = "5M",
     *     maxSizeMessage = "Taille de l'image ne doit pas depasser 2Mo",
     *     mimeTypes = {"application/pdf","application/x-pdf","text/pdf","text/x-pdf","applications/vnd.pdf"},
     *     mimeTypesMessage = "Veuillez Uploader le bon format tell que pdf"
     * )
     * @Vich\UploadableField(mapping="upload_fichier_support", fileNameProperty="fichier")
     *
     *
     * @var File
     */
    private $fichiersu;


    /**
     * @ORM\ManyToOne(targetEntity=Cours::class, inversedBy="fichierSupport")
     * @ORM\JoinColumn(nullable=false)
     */
    private $cours;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setFichierSu(?File $fichiersu = null): void
    {
        $this->fichiersu = $fichiersu;
        if (null !== $fichiersu) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            // $this->setUpdated = new \DateTimeImmutable();
        }
    }

    public function getFichierSu(): ?File
    {
        return $this->fichiersu;
    }

    public function getCours(): ?Cours
    {
        return $this->cours;
    }

    public function setCours(?Cours $cours): self
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFichier();
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
}