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

    public function getId(): ?int
    {
        return $this->id;
    }
}
