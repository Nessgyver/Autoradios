<?php

namespace App\Entity;

use App\Repository\ConstructeurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConstructeurRepository::class)
 */
class Constructeur extends Common
{
    /**
     * @ORM\ManyToMany(targetEntity=Autoradio::class, mappedBy="constructeurs")
     */
    private $autoradios;

    public function __construct()
    {
        $this->autoradios = new ArrayCollection();
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
            $autoradio->addConstructeur($this);
        }

        return $this;
    }

    public function removeAutoradio(Autoradio $autoradio): self
    {
        if ($this->autoradios->contains($autoradio)) {
            $this->autoradios->removeElement($autoradio);
            $autoradio->removeConstructeur($this);
        }

        return $this;
    }
}
