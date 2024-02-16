<?php

namespace App\Entity;

use App\Repository\AppointmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AppointmentRepository::class)]
class Appointment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column(length: 255)]
    private ?string $Date = null;

    #[ORM\Column(length: 255)]
    private ?string $HourOfAppointment = null;


    public function getId(): ?int
    {
        return $this->id;
    }



    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(string $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getHourOfAppointment(): ?string
    {
        return $this->HourOfAppointment;
    }

    public function setHourOfAppointment(string $HourOfAppointment): static
    {
        $this->HourOfAppointment = $HourOfAppointment;

        return $this;
    }

    
}
