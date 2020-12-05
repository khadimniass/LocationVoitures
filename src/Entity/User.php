<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_USER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM_USER", type="string", length=19, nullable=true, options={"fixed"=true})
     */
    private $prenomUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM_USER", type="string", length=21, nullable=true, options={"fixed"=true})
     */
    private $nomUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE_USER", type="string", length=27, nullable=true, options={"fixed"=true})
     */
    private $adresseUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAIL_USER", type="string", length=39, nullable=true, options={"fixed"=true})
     */
    private $mailUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TEL_USER", type="string", length=29, nullable=true, options={"fixed"=true})
     */
    private $telUser;

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getPrenomUser(): ?string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(?string $prenomUser): self
    {
        $this->prenomUser = $prenomUser;

        return $this;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(?string $nomUser): self
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getAdresseUser(): ?string
    {
        return $this->adresseUser;
    }

    public function setAdresseUser(?string $adresseUser): self
    {
        $this->adresseUser = $adresseUser;

        return $this;
    }

    public function getMailUser(): ?string
    {
        return $this->mailUser;
    }

    public function setMailUser(?string $mailUser): self
    {
        $this->mailUser = $mailUser;

        return $this;
    }

    public function getTelUser(): ?string
    {
        return $this->telUser;
    }

    public function setTelUser(?string $telUser): self
    {
        $this->telUser = $telUser;

        return $this;
    }


}
