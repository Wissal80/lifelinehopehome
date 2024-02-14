<?php

namespace App\Entity;

use App\Repository\SmartBraceletRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SmartBraceletRepository::class)]
class SmartBracelet
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
