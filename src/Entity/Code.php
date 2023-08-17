<?php

namespace App\Entity;

use App\Repository\CodeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CodeRepository::class)
 * @Vich\Uploadable
 */
class Code
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $icon;

    /**
     * @Assert\File(
     *     maxSize = "5M",
     *     maxSizeMessage = "Taille de l'image ne doit pas depasser 5Mo",
     *     mimeTypes = {"image/jpeg","image/gif","image/png", "image/jpg", "image/svg",},
     *     mimeTypesMessage = "Veuillez Uploader le bon format tell que jpeg, jpg, png"
     * )
     * @Vich\UploadableField(mapping="upload_fichier_icon", fileNameProperty="icon")
     *
     *
     * @var File
     */
    private $fichierIcon;




    /**
     * @ORM\OneToMany(targetEntity=Mention::class, mappedBy="code", orphanRemoval=true)
     */
    private $mentions;

    /**
     * @ORM\OneToMany(targetEntity=Parcours::class, mappedBy="code")
     */
    private $parcours;

    public function __construct()
    {
        $this->mentions = new ArrayCollection();
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
    /**
     * @return Collection|Mention[]
     */
    public function getMentions(): Collection
    {
        return $this->mentions;
    }

    public function addMention(Mention $mention): self
    {
        if (!$this->mentions->contains($mention)) {
            $this->mentions[] = $mention;
            $mention->setCode($this);
        }

        return $this;
    }

    public function removeMention(Mention $mention): self
    {
        if ($this->mentions->removeElement($mention)) {
            // set the owning side to null (unless already changed)
            if ($mention->getCode() === $this) {
                $mention->setCode(null);
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
            $parcour->setCode($this);
        }

        return $this;
    }

    public function removeParcour(Parcours $parcour): self
    {
        if ($this->parcours->removeElement($parcour)) {
            // set the owning side to null (unless already changed)
            if ($parcour->getCode() === $this) {
                $parcour->setCode(null);
            }
        }

        return $this;
    }




    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon($icon): self
    {
        $this->icon = $icon;

        return $this;
    }
    public function setFichierIcon(?File $fichierIcon = null): void
    {
        $this->fichierIcon = $fichierIcon;
        if (null !== $fichierIcon) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            // $this->setUpdated = new \DateTimeImmutable();
        }
    }

    public function getFichierIcon(): ?File
    {
        return $this->fichierIcon;
    }



}
