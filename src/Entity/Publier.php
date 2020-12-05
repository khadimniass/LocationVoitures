<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publier
 *
 * @ORM\Table(name="publier")
 * @ORM\Entity
 */
class Publier
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CAT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCat;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_LOCATAIRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idLocataire;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="CREATE_PUB_AT", type="date", nullable=true)
     */
    private $createPubAt;

    public function getIdCat(): ?int
    {
        return $this->idCat;
    }

    public function getIdLocataire(): ?int
    {
        return $this->idLocataire;
    }

    public function getCreatePubAt(): ?\DateTimeInterface
    {
        return $this->createPubAt;
    }

    public function setCreatePubAt(?\DateTimeInterface $createPubAt): self
    {
        $this->createPubAt = $createPubAt;

        return $this;
    }


}
