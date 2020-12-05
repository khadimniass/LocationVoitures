<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CAT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCat;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_USER", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MARK", type="string", length=25, nullable=true, options={"fixed"=true})
     */
    private $mark;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MATRICULE_CAT", type="string", length=16, nullable=true, options={"fixed"=true})
     */
    private $matriculeCat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRICE", type="string", length=15, nullable=true, options={"fixed"=true})
     */
    private $price;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESCRIPTION", type="string", length=90, nullable=true, options={"fixed"=true})
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="CREATE_LOC_AT", type="date", nullable=false)
     */
    private $createLocAt;

    public function getIdCat(): ?int
    {
        return $this->idCat;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

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

    public function getMatriculeCat(): ?string
    {
        return $this->matriculeCat;
    }

    public function setMatriculeCat(?string $matriculeCat): self
    {
        $this->matriculeCat = $matriculeCat;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
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

    public function getCreateLocAt(): ?\DateTimeInterface
    {
        return $this->createLocAt;
    }

    public function setCreateLocAt(\DateTimeInterface $createLocAt): self
    {
        $this->createLocAt = $createLocAt;

        return $this;
    }


}
