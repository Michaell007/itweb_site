<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $texteIntroduction;

    /**
     * @ORM\Column(type="text")
     */
    private $texteComplet;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="activites")
     * @ORM\JoinColumn(nullable=false)
     *  @Assert\NotBlank
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

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

    public function getTexteIntroduction(): ?string
    {
        return $this->texteIntroduction;
    }

    public function setTexteIntroduction(string $texteIntroduction): self
    {
        $this->texteIntroduction = $texteIntroduction;

        return $this;
    }

    public function getTexteComplet(): ?string
    {
        return $this->texteComplet;
    }

    public function setTexteComplet(string $texteComplet): self
    {
        $this->texteComplet = $texteComplet;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamp() : void
    {
        $this->setUpdatedAt(new \DateTime('now'));
    }

}
