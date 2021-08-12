<?php

namespace App\Entity;

use App\Repository\DetalleFacturaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DetalleFacturaRepository::class)
 */
class DetalleFactura
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
    private $subTotal;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\OneToOne(targetEntity=pedido::class, cascade={"persist", "remove"})
     */
    private $id_pedido;

    /**
     * @ORM\ManyToOne(targetEntity=cliente::class, inversedBy="id_detallefactura")
     */
    private $id_cliente;

    /**
     * @ORM\OneToMany(targetEntity=historial::class, mappedBy="id_detalleFactura")
     */
    private $id_historial;

    /**
     * @ORM\OneToMany(targetEntity=servicio::class, mappedBy="id_detalleFactura")
     */
    private $id_Servicio;

    /**
     * @ORM\OneToMany(targetEntity=descuento::class, mappedBy="id_detalleFactura")
     */
    private $id_descuento;

    /**
     * @ORM\ManyToOne(targetEntity=Factura::class, inversedBy="id_detalleFactura")
     */
    private $id_factura;

    public function __construct()
    {
        $this->id_historial = new ArrayCollection();
        $this->id_Servicio = new ArrayCollection();
        $this->id_descuento = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    
    public function getSubTotal(): ?string
    {
        return $this->subTotal;
    }

    public function setSubTotal(string $subTotal): self
    {
        $this->subTotal = $subTotal;

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

    public function getIdPedido(): ?pedido
    {
        return $this->id_pedido;
    }

    public function setIdPedido(?pedido $id_pedido): self
    {
        $this->id_pedido = $id_pedido;

        return $this;
    }

    public function getIdCliente(): ?cliente
    {
        return $this->id_cliente;
    }

    public function setIdCliente(?cliente $id_cliente): self
    {
        $this->id_cliente = $id_cliente;

        return $this;
    }

    /**
     * @return Collection|historial[]
     */
    public function getIdHistorial(): Collection
    {
        return $this->id_historial;
    }

    public function addIdHistorial(historial $idHistorial): self
    {
        if (!$this->id_historial->contains($idHistorial)) {
            $this->id_historial[] = $idHistorial;
            $idHistorial->setIdDetalleFactura($this);
        }

        return $this;
    }

    public function removeIdHistorial(historial $idHistorial): self
    {
        if ($this->id_historial->removeElement($idHistorial)) {
            // set the owning side to null (unless already changed)
            if ($idHistorial->getIdDetalleFactura() === $this) {
                $idHistorial->setIdDetalleFactura(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|servicio[]
     */
    public function getIdServicio(): Collection
    {
        return $this->id_Servicio;
    }

    public function addIdServicio(servicio $idServicio): self
    {
        if (!$this->id_Servicio->contains($idServicio)) {
            $this->id_Servicio[] = $idServicio;
            $idServicio->setIdDetalleFactura($this);
        }

        return $this;
    }

    public function removeIdServicio(servicio $idServicio): self
    {
        if ($this->id_Servicio->removeElement($idServicio)) {
            // set the owning side to null (unless already changed)
            if ($idServicio->getIdDetalleFactura() === $this) {
                $idServicio->setIdDetalleFactura(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|descuento[]
     */
    public function getIdDescuento(): Collection
    {
        return $this->id_descuento;
    }

    public function addIdDescuento(descuento $idDescuento): self
    {
        if (!$this->id_descuento->contains($idDescuento)) {
            $this->id_descuento[] = $idDescuento;
            $idDescuento->setIdDetalleFactura($this);
        }

        return $this;
    }

    public function removeIdDescuento(descuento $idDescuento): self
    {
        if ($this->id_descuento->removeElement($idDescuento)) {
            // set the owning side to null (unless already changed)
            if ($idDescuento->getIdDetalleFactura() === $this) {
                $idDescuento->setIdDetalleFactura(null);
            }
        }

        return $this;
    }

    public function getIdFactura(): ?Factura
    {
        return $this->id_factura;
    }

    public function setIdFactura(?Factura $id_factura): self
    {
        $this->id_factura = $id_factura;

        return $this;
    }
}
