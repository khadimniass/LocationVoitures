<?php
namespace App\Entity\Traits;

trait Timestampable
{
    /**
     * @ORM\Column(type="datetime",options={"default":"CURRENT_TIMESTAMP"})
     */
    private $created_at;

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }


    /**
     * @ORM\PrePersist
     */
    public function updateTimestamps()
    {

        $this->setCreatedAt(new \DateTimeImmutable);
    }

}