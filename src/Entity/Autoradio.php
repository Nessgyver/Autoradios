<?php

namespace App\Entity;

use App\Repository\AutoradioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AutoradioRepository::class)
 */
class Autoradio extends Common
{
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isApc;

    /**
     * @ORM\ManyToMany(targetEntity=Constructeur::class, inversedBy="autoradios")
     */
    private $constructeurs;

    /**
     * @ORM\ManyToMany(targetEntity=Adaptateur::class, inversedBy="autoradios")
     */
    private $adaptateurs;

    public function __construct()
    {
        $this->constructeurs = new ArrayCollection();
        $this->adaptateurs = new ArrayCollection();
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getIsApc(): ?bool
    {
        return $this->isApc;
    }

    public function setIsApc(?bool $isApc): self
    {
        $this->isApc = $isApc;

        return $this;
    }

    /**
     * @return Collection|Constructeur[]
     */
    public function getConstructeurs(): Collection
    {
        return $this->constructeurs;
    }

    public function addConstructeur(Constructeur $constructeur): self
    {
        if (!$this->constructeurs->contains($constructeur)) {
            $this->constructeurs[] = $constructeur;
        }

        return $this;
    }

    public function removeConstructeur(Constructeur $constructeur): self
    {
        if ($this->constructeurs->contains($constructeur)) {
            $this->constructeurs->removeElement($constructeur);
        }

        return $this;
    }

    /**
     * @return Collection|Adaptateur[]
     */
    public function getAdaptateurs(): Collection
    {
        return $this->adaptateurs;
    }

    public function addAdaptateur(Adaptateur $adaptateur): self
    {
        if (!$this->adaptateurs->contains($adaptateur)) {
            $this->adaptateurs[] = $adaptateur;
        }

        return $this;
    }

    public function removeAdaptateur(Adaptateur $adaptateur): self
    {
        if ($this->adaptateurs->contains($adaptateur)) {
            $this->adaptateurs->removeElement($adaptateur);
        }

        return $this;
    }
}
