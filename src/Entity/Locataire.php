<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locataire
 *
 * @ORM\Table(name="locataire")
 * @ORM\Entity
 */
class Locataire
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_LOCATAIRE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLocataire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=15, nullable=true, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE", type="string", length=20, nullable=true, options={"fixed"=true})
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAIL", type="string", length=25, nullable=true, options={"fixed"=true})
     */
    private $mail;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TELEPHONE", type="integer", nullable=true)
     */
    private $telephone;

    public function getIdLocataire(): ?int
    {
        return $this->idLocataire;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }


}
