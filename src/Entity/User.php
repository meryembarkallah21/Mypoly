<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;


use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @Vich\Uploadable
 * @UniqueEntity(
 * fields={"email"},
 * message="Adresse email existe déja dans la base"
 * )
 */
class User implements UserInterface, \Serializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\Email(message="Veuillez saisir adresse email valide")
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     * @Assert\Regex(
     *     pattern="/^[0-9 + ()]+$/",
     *     htmlPattern="^[0-9 + ()]+$",
     *     match=true,
     *     message="Seuls les caractères 0-9 sont autorisés"
     * )
     */
    private $tel;


    /**
     * @ORM\Column(type="string", nullable=true, length=125)
     */
    private $avatar;

    /**
    * @Assert\File(
    *     maxSize = "5M",
    *     maxSizeMessage = "Taille de l'image ne doit pas depasser 2Mo",
    *     mimeTypes = {"image/jpeg","image/gif","image/png", "image/jpg", "image/svg",},
    *     mimeTypesMessage = "Veuillez Uploader le bon format tell que jpeg, jpg, png"
    * )
     * @Vich\UploadableField(mapping="upload_avatar", fileNameProperty="avatar")
     * @var File
     */
    private $avatarfile;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;


    /**
     * @var string le token qui servira lors de l'oubli de mot de passe
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $resetToken;

    /**
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\OneToMany(targetEntity=Inscrire::class, mappedBy="Etudiant")
     */
    private $inscrires;



    /**
     * @ORM\OneToMany(targetEntity=Commentaire::class, mappedBy="auteur")
     */
    private $commentaires;

    /**
     * @ORM\OneToMany(targetEntity=Ec::class, mappedBy="prof")
     */
    private $ecs;

    /**
     * @ORM\OneToMany(targetEntity=Reaction::class, mappedBy="etudiant", orphanRemoval=true)
     */
    private $reactions;
    /**
     * @ORM\OneToMany(targetEntity=Calendrier::class, mappedBy="user")
     */
    private $calendriers;


    /**
     * @ORM\OneToMany(targetEntity=Document::class, mappedBy="user")
     */
    private $document;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;


    public function __construct()
    {
        //avatar.png
        $this->createdAt = new \Datetime();
        $this->updatedAt = new \Datetime();
        $this->avatar = "avatar.png";
        $this->inscrires = new ArrayCollection();

        $this->document = new ArrayCollection();
        $this->commentaires = new ArrayCollection();
        $this->ecs = new ArrayCollection();
        $this->reactions = new ArrayCollection();
        $this->calendriers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getResetToken(): string
    {
        return $this->resetToken;
    }

    /**
     * @param string $resetToken
     */
    public function setResetToken(?string $resetToken): void
    {
        $this->resetToken = $resetToken;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function isDisabled(){

        if($this->getStatus()==0){
            return true;
        }
        return false;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function setAvatarFile(?File $avatarfile = null): void
    {
        $this->avatarfile = $avatarfile;
        if (null !== $avatarfile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
//            $this->setUpdated = new \DateTimeImmutable();
        }
    }

    public function getAvatarFile(): ?File
    {
        return $this->avatarfile;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?string $updatedAt): self
    {
        try {
            $this->updatedAt = new \DateTime($updatedAt);
        }
        catch(\Exception $e) {
            //Do Nothing
        }

        return $this;
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize() {

        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
            $this->name,
            $this->tel,
        ));
    }

    /**
     *@see \Serializable::unserialize()
     */
    public function unserialize($serialized) {
        list (
            $this->id,
            $this->email,
            $this->password,
            $this->name,
            $this->tel,
            ) = unserialize($serialized, array('allowed_classes' => false));
    }

    /**
     * @return Collection|Inscrire[]
     */
    public function getInscrires(): Collection
    {
        return $this->inscrires;
    }

    public function addInscrire(Inscrire $inscrire): self
    {
        if (!$this->inscrires->contains($inscrire)) {
            $this->inscrires[] = $inscrire;
            $inscrire->setEtudiant($this);
        }

        return $this;
    }

    public function removeInscrire(Inscrire $inscrire): self
    {
        if ($this->inscrires->removeElement($inscrire)) {
            // set the owning side to null (unless already changed)
            if ($inscrire->getEtudiant() === $this) {
                $inscrire->setEtudiant(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setAuteur($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getAuteur() === $this) {
                $commentaire->setAuteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ec[]
     */
    public function getEcs(): Collection
    {
        return $this->ecs;
    }

    public function addEc(Ec $ec): self
    {
        if (!$this->ecs->contains($ec)) {
            $this->ecs[] = $ec;
            $ec->setProf($this);
        }

        return $this;
    }

    public function removeEc(Ec $ec): self
    {
        if ($this->ecs->removeElement($ec)) {
            // set the owning side to null (unless already changed)
            if ($ec->getProf() === $this) {
                $ec->setProf(null);
            }
        }

        return $this;
    }

        public function __toString(){
        return $this->getName();
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
                $reaction->setEtudiant($this);
            }

            return $this;
        }

        public function removeReaction(Reaction $reaction): self
        {
            if ($this->reactions->removeElement($reaction)) {
                // set the owning side to null (unless already changed)
                if ($reaction->getEtudiant() === $this) {
                    $reaction->setEtudiant(null);
                }
            }

            return $this;
        }
        /**
         * @return Collection|Calendrier[]
         */
        public function getCalendriers(): Collection
        {
            return $this->calendriers;
        }

        public function addCalendrier(Calendrier $calendrier): self
        {
            if (!$this->calendriers->contains($calendrier)) {
                $this->calendriers[] = $calendrier;
                $calendrier->setUser($this);
            }

            return $this;
        }

        public function removeCalendrier(Calendrier $calendrier): self
        {
            if ($this->calendriers->removeElement($calendrier)) {
                // set the owning side to null (unless already changed)
                if ($calendrier->getUser() === $this) {
                    $calendrier->setUser(null);
                }
            }

            return $this;
        }

    public function getVille(): ?string
    {
        return $this->ville;
    }


    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }



    /**
     * @return Collection|Document[]
     */
    public function getDocument(): Collection
    {
        return $this->document;
    }

    public function addDocument(Document $document): self
    {
        if (!$this->document->contains($document)) {
            $this->document[] = $document;
            $document->setUser($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->document->removeElement($document)) {
            // set the owning side to null (unless already changed)
            if ($document->getUser() === $this) {
                $document->setUser(null);
            }
        }

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


}
