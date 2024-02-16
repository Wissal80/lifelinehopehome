<?php

namespace App\Entity;

use App\Repository\HospitalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HospitalRepository::class)]
class Hospital
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $IdDoctor = null;

    #[ORM\ManyToOne(inversedBy: 'hospitals')]
    private ?Doctor $Doctor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdDoctor(): ?string
    {
        return $this->IdDoctor;
    }

    public function setIdDoctor(string $IdDoctor): static
    {
        $this->IdDoctor = $IdDoctor;

        return $this;
    }

    public function getDoctor(): ?Doctor
    {
        return $this->Doctor;
    }

    public function setDoctor(?Doctor $Doctor): static
    {
        $this->Doctor = $Doctor;

        return $this;
    }
}
