<?php

namespace App\Entity;

use App\Repository\BloodBankRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BloodBankRepository::class)
 */
class BloodBank
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=50, unique=true)
     */
    private $codeName;

    /**
     * @ORM\OneToOne(targetEntity=BloodBankAddress::class, inversedBy="bloodBank", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $address;

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

    public function getCodeName(): ?string
    {
        return $this->codeName;
    }

    public function setCodeName(string $codeName): self
    {
        $this->codeName = $codeName;

        return $this;
    }

    public function getAddress(): ?BloodBankAddress
    {
        return $this->address;
    }

    public function setAddress(BloodBankAddress $address): self
    {
        $this->address = $address;

        return $this;
    }
}
