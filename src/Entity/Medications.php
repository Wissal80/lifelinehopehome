<?php

namespace App\Entity;

use App\Repository\MedicationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: MedicationsRepository::class)]
class Medications
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Regex(
        pattern: "/\d/",
        match: false,
        message: "The description cannot contain numbers."
    )]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Name of Medications must contain characters.")]
    #[Assert\Length(max: 255, maxMessage: "Name of Medications cannot be longer than {{ limit }} characters")]
    private ?string $NameMedications = null;

    

    #[ORM\Column(length: 255)]
    #[Assert\Length(max: 255, maxMessage: "Medical Notes cannot be longer than {{ limit }} characters")]
    private ?string $MedicalNotes = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Dosage cannot be blank")]
    #[Assert\Regex(
        pattern: "/^\d+(\.\d+)?\s*\w+$/",
        message: "Invalid dosage format. Please provide a valid format (e.g., '10 mg')."
    )]
    private ?string $Dosage = null;

    #[ORM\OneToMany(targetEntity: Owner::class, mappedBy: 'Medications')]
    private Collection $owners;

    public function __construct()
    {
        $this->owners = new ArrayCollection();
    }

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

    
    public function getMedicalNotes(): ?string
    {
        return $this->MedicalNotes;
    }

    public function setMedicalNotes(string $MedicalNotes): static
    {
        $this->MedicalNotes = $MedicalNotes;

        return $this;
    }

    public function getDosage(): ?string
    {
        return $this->Dosage;
    }

    public function setDosage(string $Dosage): static
    {
        $this->Dosage = $Dosage;

        return $this;
    }

 
}
