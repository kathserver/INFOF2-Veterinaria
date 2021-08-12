<?php

namespace App\Entity;

use App\Repository\EspecieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EspecieRepository::class)
 */
class Especie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nota;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\OneToMany(targetEntity=Raza::class, mappedBy="id_especie")
     */
    private $razas;

    public function __construct()
    {
        $this->razas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNota(): ?string
    {
        return $this->nota;
    }

    public function setNota(?string $nota): self
    {
        $this->nota = $nota;

        return $this;
    }

    public function getBaja(): ?bool
    {
        return $this->baja;
    }

    public function setBaja(bool $baja): self
    {
        $this->baja = $baja;

        return $this;
    }

    /**
     * @return Collection|Raza[]
     */
    public function getRazas(): Collection
    {
        return $this->razas;
    }

    public function addRaza(Raza $raza): self
    {
        if (!$this->razas->contains($raza)) {
            $this->razas[] = $raza;
            $raza->setIdEspecie($this);
        }

        return $this;
    }

    public function removeRaza(Raza $raza): self
    {
        if ($this->razas->removeElement($raza)) {
            // set the owning side to null (unless already changed)
            if ($raza->getIdEspecie() === $this) {
                $raza->setIdEspecie(null);
            }
        }

        return $this;
    }
}
