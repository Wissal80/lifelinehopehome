<?php

namespace App\Entity;

use App\Repository\DoctorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DoctorRepository::class)]
class Doctor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Surname = null;

    #[ORM\Column(length: 255)]
    private ?string $Speciality = null;

    #[ORM\OneToMany(targetEntity: Hospital::class, mappedBy: 'Doctor')]
    private Collection $hospitals;

    public function __construct()
    {
        $this->hospitals = new ArrayCollection();
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

    public function getSpeciality(): ?string
    {
        return $this->Speciality;
    }

    public function setSpeciality(string $Speciality): static
    {
        $this->Speciality = $Speciality;

        return $this;
    }

    /**
     * @return Collection<int, Hospital>
     */
    public function getHospitals(): Collection
    {
        return $this->hospitals;
    }

    public function addHospital(Hospital $hospital): static
    {
        if (!$this->hospitals->contains($hospital)) {
            $this->hospitals->add($hospital);
            $hospital->setDoctor($this);
        }

        return $this;
    }

    public function removeHospital(Hospital $hospital): static
    {
        if ($this->hospitals->removeElement($hospital)) {
            // set the owning side to null (unless already changed)
            if ($hospital->getDoctor() === $this) {
                $hospital->setDoctor(null);
            }
        }

        return $this;
    }
}
