<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $loginname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $preprovision;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateofbirth;

    /**
     * @ORM\Column(type="date")
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailadress;

    /**
     * @ORM\Column(type="string")
     */
    private $hiring_date;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $salary;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $street;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postal_code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $place;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoginname(): ?string
    {
        return $this->loginname;
    }

    public function setLoginname(string $loginname): self
    {
        $this->loginname = $loginname;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getPreprovision(): ?string
    {
        return $this->preprovision;
    }

    public function setPreprovision(string $preprovision): self
    {
        $this->preprovision = $preprovision;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDateofbirth(): ?\DateTimeInterface
    {
        return $this->dateofbirth;
    }

    public function setDateofbirth(DateTimeInterface $dateofbirth): self
    {
        $this->dateofbirth = $dateofbirth;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getEmailadress(): ?string
    {
        return $this->emailadress;
    }

    public function setEmailadress(string $emailadress): self
    {
        $this->emailadress = $emailadress;

        return $this;
    }

    public function getHiringDate(): ?\DateTimeInterface
    {
        return $this->hiring_date;
    }

    public function setHiringDate(\DateTimeInterface $hiring_date): self
    {
        $this->hiring_date = $hiring_date;

        return $this;
    }

    public function getSalary(): ?string
    {
        return $this->salary;
    }

    public function setSalary(string $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postal_code;
    }

    public function setPostalCode(string $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }
}
