<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AfspraakRepository")
 */
class Afspraak
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     */
    private $voornaam;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     */ 
    private $achternaam;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     */
    private $startdatum;

    /**
     * @ORM\Column(type="datetime")
     */
    private $einddatum;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     */
    private $behandeling;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank
     */
    private $email;

    /**
     * @ORM\Column(type="boolean")
     */
    private $bevestiging = false;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVoornaam(): ?string
    {
        return $this->voornaam;
    }

    public function setVoornaam(string $voornaam): self
    {
        $this->voornaam = $voornaam;

        return $this;
    }
    public function getAchternaam(): ?string
    {
        return $this->achternaam;
    }

    public function setAchternaam(string $achternaam): self
    {
        $this->achternaam = $achternaam;

        return $this;
    }
    public function getStartdatum(): ?\DateTime
    {
        return $this->startdatum;
    }

    public function setStartdatum(\DateTime $startdatum): self
    {
        $this->startdatum = $startdatum;

        return $this;
    }
    public function getEinddatum(): ?\DateTime
    {
        return $this->einddatum;
    }

    public function setEinddatum(\DateTime $einddatum): self
    {
        $this->einddatum = $einddatum;

        return $this;
    }
    public function getBehandeling(): ?string
    {
        return $this->behandeling;
    }

    public function setBehandeling(string $behandeling): self
    {
        $this->behandeling = $behandeling;

        return $this;
    }
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    public function getBevestiging(): ?boolean
    {
        return $this->bevestiging;
    }

    public function setBevestiging(boolean $bevestiging): self
    {
        $this->bevestiging = $bevestiging;

        return $this;
    }
}
