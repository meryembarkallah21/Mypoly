<?php

namespace App\Entity;

use App\Repository\AudioRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AudioRepository::class)
 * @Vich\Uploadable
 */
class Audio
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true, length=125)
     */
    private $fichier;


    /**
     * @Assert\File(
     *     maxSize="20M",
     *     mimeTypes = {"audio/mpeg","audio/mp4","video/3gpp","audio/3gpp","audio/mpeg3","audio/x-mpeg-3","video/mpeg"," video/x-mpeg"},
     *     mimeTypesMessage = "Veuillez Uploader le bon format tell que mpeg, mp4 audio"
     * )
     * @Vich\UploadableField(mapping="upload_fichier_audio", fileNameProperty="fichier")
     *
     * @var File
     */
    private $fichieraudio;



    /**
     * @ORM\ManyToOne(targetEntity=Cours::class, inversedBy="audio")
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

    public function setFichierAudio(?File $fichieraudio = null): void
    {
        $this->fichieraudio = $fichieraudio;
        if (null !== $fichieraudio) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
           //            $this->setUpdated = new \DateTimeImmutable();
        }
    }
    public function getFichierAudio(): ?File
    {
        return $this->fichieraudio;
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