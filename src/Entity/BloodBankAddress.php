<?php

namespace App\Entity;

use App\Repository\BloodBankAddressRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BloodBankAddressRepository::class)
 */
class BloodBankAddress
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fullAddress;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $contry;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $zipCode;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=7)
     */
    private $latitude;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=7)
     */
    private $longitude;

    /**
     * @ORM\OneToOne(targetEntity=BloodBank::class, mappedBy="address", cascade={"persist", "remove"})
     */
    private $bloodBank;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullAddress(): ?string
    {
        return $this->fullAddress;
    }

    public function setFullAddress(string $fullAddress): self
    {
        $this->fullAddress = $fullAddress;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getContry(): ?string
    {
        return $this->contry;
    }

    public function setContry(string $contry): self
    {
        $this->contry = $contry;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Set lattude and longitude
     */
    public function setGeoLocation(string $latitude, string $longitude): self
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;

        return $this;
    }

    public function getBloodBank(): ?BloodBank
    {
        return $this->bloodBank;
    }

    public function setBloodBank(BloodBank $bloodBank): self
    {
        // set the owning side of the relation if necessary
        if ($bloodBank->getAddress() !== $this) {
            $bloodBank->setAddress($this);
        }

        $this->bloodBank = $bloodBank;

        return $this;
    }
}
