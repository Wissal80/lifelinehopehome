<?php

namespace App\Entity;

use App\Repository\OwnerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OwnerRepository::class)]
class Owner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Surname = null;

    #[ORM\OneToMany(targetEntity: Appointment::class, mappedBy: 'owner')]
    private Collection $Appointment;

    public function __construct()
    {
        $this->Appointment = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): static
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    public function setSurname(string $Surname): static
    {
        $this->Surname = $Surname;

        return $this;
    }

    /**
     * @return Collection<int, Appointment>
     */
    public function getAppointment(): Collection
    {
        return $this->Appointment;
    }

    public function addAppointment(Appointment $appointment): static
    {
        if (!$this->Appointment->contains($appointment)) {
            $this->Appointment->add($appointment);
            $appointment->setOwner($this);
        }

        return $this;
    }

    public function removeAppointment(Appointment $appointment): static
    {
        if ($this->Appointment->removeElement($appointment)) {
            // set the owning side to null (unless already changed)
            if ($appointment->getOwner() === $this) {
                $appointment->setOwner(null);
            }
        }

        return $this;
    }
}
