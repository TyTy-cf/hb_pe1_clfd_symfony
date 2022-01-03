<?php

namespace App\Entity;

use App\Repository\RankRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RankRepository::class)
 */
class Rank
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private string $subject;

    /**
     * @ORM\Column(type="float")
     */
    private float $rank;

    /**
     * @ORM\ManyToOne(targetEntity=Student::class, inversedBy="ranks")
     * @ORM\JoinColumn(nullable=false)
     */
    private Student $student;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getRank(): ?float
    {
        return $this->rank;
    }

    public function setRank(float $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getStudent(): ?Student
    {
        return $this->student;
    }

    public function setStudent(?Student $student): self
    {
        $this->student = $student;

        return $this;
    }
}
