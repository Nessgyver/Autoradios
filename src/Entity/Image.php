<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
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
    private $nom;

    /**
     * @ORM\OneToOne(targetEntity=Common::class, mappedBy="image", cascade={"persist", "remove"})
     */
    private $common;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCommon(): ?Common
    {
        return $this->common;
    }

    public function setCommon(?Common $common): self
    {
        $this->common = $common;

        // set (or unset) the owning side of the relation if necessary
        $newImage = null === $common ? null : $this;
        if ($common->getImage() !== $newImage) {
            $common->setImage($newImage);
        }

        return $this;
    }
}
