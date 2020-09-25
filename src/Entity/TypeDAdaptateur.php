<?php

namespace App\Entity;

use App\Repository\TypeDAdaptateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeDAdaptateurRepository::class)
 */
class TypeDAdaptateur
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
    private $type;

    /**
     * @ORM\OneToMany(targetEntity=Adaptateur::class, mappedBy="typeDAdaptateur", orphanRemoval=true)
     */
    private $adaptateurs;

    public function __construct()
    {
        $this->adaptateurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $adaptateur->setTypeDAdaptateur($this);
        }

        return $this;
    }

    public function removeAdaptateur(Adaptateur $adaptateur): self
    {
        if ($this->adaptateurs->contains($adaptateur)) {
            $this->adaptateurs->removeElement($adaptateur);
            // set the owning side to null (unless already changed)
            if ($adaptateur->getTypeDAdaptateur() === $this) {
                $adaptateur->setTypeDAdaptateur(null);
            }
        }

        return $this;
    }
}
