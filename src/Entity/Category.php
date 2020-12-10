<?php

namespace App\Entity;

use App\Entity\Traits\Timestampable;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 * @ORM\HasLifecycleCallbacks
 */
#HasLifecycleCallbacks : ce trucs sert à entrer automatiquement les Timestampables lors de la création d'un new.
class Category
{
    use Timestampable;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="ce champ ne doit pas être vide")
     */
    private $matricul;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="ce champ ne doit pas être vide")
     * @Assert\Range(min="0")
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="ce champ ne doit pas etre vide")
     * @Assert\Length(min="mettez au mois 10 carractère")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ce champ ne doit pas etre vide.")
     */
    private $mark;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricul(): ?string
    {
        return $this->matricul;
    }

    public function setMatricul(?string $matricul): self
    {
        $this->matricul = $matricul;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark(?string $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }



}