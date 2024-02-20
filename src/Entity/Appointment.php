<?php

namespace App\Entity;

use App\Repository\AppointmentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AppointmentRepository::class)]
class Appointment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type:"date")]
    #[Assert\NotBlank(message:"Please provide the date of the appointment")]
    private ?\DateTimeInterface $Date = null;
    
    #[ORM\Column(type:"datetime")]
    #[Assert\NotBlank(message:"Please provide the time of the appointment")]
    #[Assert\Range(
        min: "08:00",
        max: "17:00",
        minMessage: "The appointment time should be after 8:00",
        maxMessage: "The appointment time should be before 17:00"
    )]
    private ?\DateTimeInterface $HourOfAppointment = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Please provide the name of the owner")]
    #[Assert\Length(max: 255, maxMessage:"The name should not be longer than {{ limit }} characters")]
    #[Assert\Regex(
        pattern: '/^[^\d_]+$/',
        message: "Owner name cannot contain numbers or underscores"
    )]
    private ?string $NameOwner = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(?\DateTimeInterface $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getHourOfAppointment(): ?\DateTimeInterface
    {
        return $this->HourOfAppointment;
    }

    public function setHourOfAppointment(?\DateTimeInterface $HourOfAppointment): static
    {
        $this->HourOfAppointment = $HourOfAppointment;

        return $this;
    }

    public function getNameOwner(): ?string
    {
        return $this->NameOwner;
    }

    public function setNameOwner(?string $NameOwner): static
    {
        $this->NameOwner = $NameOwner;

        return $this;
    }
}
