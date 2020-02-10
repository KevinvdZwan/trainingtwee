<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LessonRepository")
 */
class Lesson
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="time")
     */
    private $time;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string")
     */
    private $location;

    /**
     * @ORM\Column(type="integer")
     */
    private $max_persons;



    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Betaling", mappedBy="lesson")
     */
    private $betaling;

    public function __construct()
    {
        $this->betaling = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getMaxPersons(): ?int
    {
        return $this->max_persons;
    }

    public function setMaxPersons(int $max_persons): self
    {
        $this->max_persons = $max_persons;

        return $this;
    }




    /**
     * @return Collection|betaling[]
     */
    public function getBetaling(): Collection
    {
        return $this->betaling;
    }

    public function addBetaling(betaling $betaling): self
    {
        if (!$this->betaling->contains($betaling)) {
            $this->betaling[] = $betaling;
            $betaling->setLesson($this);
        }

        return $this;
    }

    public function removeBetaling(betaling $betaling): self
    {
        if ($this->betaling->contains($betaling)) {
            $this->betaling->removeElement($betaling);
            // set the owning side to null (unless already changed)
            if ($betaling->getLesson() === $this) {
                $betaling->setLesson(null);
            }
        }

        return $this;
    }
}
