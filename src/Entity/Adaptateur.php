<?php

namespace App\Entity;

use App\Repository\AdaptateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdaptateurRepository::class)
 */
class Adaptateur extends Common
{
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @ORM\ManyToOne(targetEntity=TypeDAdaptateur::class, inversedBy="adaptateurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeDAdaptateur;

    /**
     * @ORM\ManyToMany(targetEntity=Autoradio::class, mappedBy="adaptateurs")
     */
    private $autoradios;

    public function __construct()
    {
        $this->autoradios = new ArrayCollection();
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

    public function getTypeDAdaptateur(): ?TypeDAdaptateur
    {
        return $this->typeDAdaptateur;
    }

    public function setTypeDAdaptateur(?TypeDAdaptateur $typeDAdaptateur): self
    {
        $this->typeDAdaptateur = $typeDAdaptateur;

        return $this;
    }

    /**
     * @return Collection|Autoradio[]
     */
    public function getAutoradios(): Collection
    {
        return $this->autoradios;
    }

    public function addAutoradio(Autoradio $autoradio): self
    {
        if (!$this->autoradios->contains($autoradio)) {
            $this->autoradios[] = $autoradio;
            $autoradio->addAdaptateur($this);
        }

        return $this;
    }

    public function removeAutoradio(Autoradio $autoradio): self
    {
        if ($this->autoradios->contains($autoradio)) {
            $this->autoradios->removeElement($autoradio);
            $autoradio->removeAdaptateur($this);
        }

        return $this;
    }
}
