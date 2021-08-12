<?php

namespace App\Entity;

use App\Repository\FacturaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FacturaRepository::class)
 */
class Factura
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="time")
     */
    private $hora;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $impuesto;

     /**
     * @ORM\Column(type="string", length=50)
     */
    private $estado;

     /**
     * @ORM\Column(type="string", length=50)
     */
    private $total;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\OneToMany(targetEntity=detalleFactura::class, mappedBy="id_factura")
     */
    private $id_detalleFactura;

    /**
     * @ORM\OneToOne(targetEntity=tipoPago::class, cascade={"persist", "remove"})
     */
    private $id_tipoPago;

    public function __construct()
    {
        $this->id_detalleFactura = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(\DateTimeInterface $hora): self
    {
        $this->hora = $hora;

        return $this;
    }

    
    public function getImpuesto(): ?string
    {
        return $this->impuesto;
    }

    public function setImpuesto(string $impuesto): self
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): self
    {
        $this->total = $total;

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
     * @return Collection|detalleFactura[]
     */
    public function getIdDetalleFactura(): Collection
    {
        return $this->id_detalleFactura;
    }

    public function addIdDetalleFactura(detalleFactura $idDetalleFactura): self
    {
        if (!$this->id_detalleFactura->contains($idDetalleFactura)) {
            $this->id_detalleFactura[] = $idDetalleFactura;
            $idDetalleFactura->setIdFactura($this);
        }

        return $this;
    }

    public function removeIdDetalleFactura(detalleFactura $idDetalleFactura): self
    {
        if ($this->id_detalleFactura->removeElement($idDetalleFactura)) {
            // set the owning side to null (unless already changed)
            if ($idDetalleFactura->getIdFactura() === $this) {
                $idDetalleFactura->setIdFactura(null);
            }
        }

        return $this;
    }

    public function getIdTipoPago(): ?tipoPago
    {
        return $this->id_tipoPago;
    }

    public function setIdTipoPago(?tipoPago $id_tipoPago): self
    {
        $this->id_tipoPago = $id_tipoPago;

        return $this;
    }
}
