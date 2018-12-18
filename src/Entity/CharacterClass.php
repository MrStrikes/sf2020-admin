<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CharacterClassRepository")
 */
class CharacterClass
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $pvMax;

    /**
     * @ORM\Column(type="integer")
     */
    private $mpMax;

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

    public function getPvMax(): ?int
    {
        return $this->pvMax;
    }

    public function setPvMax(int $pvMax): self
    {
        $this->pvMax = $pvMax;

        return $this;
    }

    public function getMpMax(): ?int
    {
        return $this->mpMax;
    }

    public function setMpMax(int $mpMax): self
    {
        $this->mpMax = $mpMax;

        return $this;
    }
}
