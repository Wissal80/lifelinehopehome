<?php

namespace App\Entity;

use App\Repository\MedicationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicationsRepository::class)]
class Medications
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $NameMedications = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getNameMedications(): ?string
    {
        return $this->NameMedications;
    }

    public function setNameMedications(string $NameMedications): static
    {
        $this->NameMedications = $NameMedications;

        return $this;
    }
}
