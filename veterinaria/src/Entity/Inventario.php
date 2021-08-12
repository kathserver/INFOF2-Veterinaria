<?php

namespace App\Entity;

use App\Repository\InventarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InventarioRepository::class)
 */
class Inventario
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cantidad;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaCompra;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\OneToMany(targetEntity=medicamento::class, mappedBy="id_inventario")
     */
    private $identificador;

    /**
     * @ORM\OneToMany(targetEntity=equipoMedico::class, mappedBy="identificador")
     */
    private $id_equipoMedico;

    public function __construct()
    {
        $this->identificador = new ArrayCollection();
        $this->id_equipoMedico = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCantidad(): ?string
    {
        return $this->cantidad;
    }

    public function setCantidad(string $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getFechaCompra(): ?\DateTimeInterface
    {
        return $this->fechaCompra;
    }

    public function setFechaCompra(\DateTimeInterface $fechaCompra): self
    {
        $this->fechaCompra = $fechaCompra;

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
     * @return Collection|medicamento[]
     */
    public function getIdentificador(): Collection
    {
        return $this->identificador;
    }

    public function addIdentificador(medicamento $identificador): self
    {
        if (!$this->identificador->contains($identificador)) {
            $this->identificador[] = $identificador;
            $identificador->setIdInventario($this);
        }

        return $this;
    }

    public function removeIdentificador(medicamento $identificador): self
    {
        if ($this->identificador->removeElement($identificador)) {
            // set the owning side to null (unless already changed)
            if ($identificador->getIdInventario() === $this) {
                $identificador->setIdInventario(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|equipoMedico[]
     */
    public function getIdEquipoMedico(): Collection
    {
        return $this->id_equipoMedico;
    }

    public function addIdEquipoMedico(equipoMedico $idEquipoMedico): self
    {
        if (!$this->id_equipoMedico->contains($idEquipoMedico)) {
            $this->id_equipoMedico[] = $idEquipoMedico;
            $idEquipoMedico->setIdentificador($this);
        }

        return $this;
    }

    public function removeIdEquipoMedico(equipoMedico $idEquipoMedico): self
    {
        if ($this->id_equipoMedico->removeElement($idEquipoMedico)) {
            // set the owning side to null (unless already changed)
            if ($idEquipoMedico->getIdentificador() === $this) {
                $idEquipoMedico->setIdentificador(null);
            }
        }

        return $this;
    }
}
