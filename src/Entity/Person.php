<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $preprovision;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateofbirth;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emailadress;



    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $salary;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postal_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Lesson", mappedBy="person")
     */
    private $hiring_date;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Betaling", mappedBy="person")
     */
    private $member;

    public function __construct()
    {
        $this->hiring_date = new ArrayCollection();
        $this->member = new ArrayCollection();
    }

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

    /**
     * @return Collection|Lesson[]
     */
    public function getHiringDate(): Collection
    {
        return $this->hiring_date;
    }

    public function addHiringDate(lesson $hiringDate): self
    {
        if (!$this->hiring_date->contains($hiringDate)) {
            $this->hiring_date[] = $hiringDate;
            $hiringDate->setPerson($this);
        }

        return $this;
    }

    public function removeHiringDate(lesson $hiringDate): self
    {
        if ($this->hiring_date->contains($hiringDate)) {
            $this->hiring_date->removeElement($hiringDate);
            // set the owning side to null (unless already changed)
            if ($hiringDate->getPerson() === $this) {
                $hiringDate->setPerson(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|betaling[]
     */
    public function getMember(): Collection
    {
        return $this->member;
    }

    public function addMember(betaling $member): self
    {
        if (!$this->member->contains($member)) {
            $this->member[] = $member;
            $member->setPerson($this);
        }

        return $this;
    }

    public function removeMember(betaling $member): self
    {
        if ($this->member->contains($member)) {
            $this->member->removeElement($member);
            // set the owning side to null (unless already changed)
            if ($member->getPerson() === $this) {
                $member->setPerson(null);
            }
        }

        return $this;
    }
}
