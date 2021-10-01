<?php

namespace App\Entity;

use App\Repository\PageAboutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PageAboutRepository::class)
 */
class PageAbout
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sousTitre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $featureTitre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $featurePresentationTitre;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $featurePresentationContent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $featureTwoTitre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $featureVisionTitre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageAlt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSousTitre(): ?string
    {
        return $this->sousTitre;
    }

    public function setSousTitre(?string $sousTitre): self
    {
        $this->sousTitre = $sousTitre;

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

    public function getFeatureTitre(): ?string
    {
        return $this->featureTitre;
    }

    public function setFeatureTitre(?string $featureTitre): self
    {
        $this->featureTitre = $featureTitre;

        return $this;
    }

    public function getFeaturePresentationTitre(): ?string
    {
        return $this->featurePresentationTitre;
    }

    public function setFeaturePresentationTitre(?string $featurePresentationTitre): self
    {
        $this->featurePresentationTitre = $featurePresentationTitre;

        return $this;
    }

    public function getFeaturePresentationContent(): ?string
    {
        return $this->featurePresentationContent;
    }

    public function setFeaturePresentationContent(?string $featurePresentationContent): self
    {
        $this->featurePresentationContent = $featurePresentationContent;

        return $this;
    }

    public function getFeatureTwoTitre(): ?string
    {
        return $this->featureTwoTitre;
    }

    public function setFeatureTwoTitre(?string $featureTwoTitre): self
    {
        $this->featureTwoTitre = $featureTwoTitre;

        return $this;
    }

    public function getFeatureVisionTitre(): ?string
    {
        return $this->featureVisionTitre;
    }

    public function setFeatureVisionTitre(?string $featureVisionTitre): self
    {
        $this->featureVisionTitre = $featureVisionTitre;

        return $this;
    }

    public function getImageAlt(): ?string
    {
        return $this->imageAlt;
    }

    public function setImageAlt(?string $imageAlt): self
    {
        $this->imageAlt = $imageAlt;

        return $this;
    }
}
