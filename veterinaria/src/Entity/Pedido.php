<?php

namespace App\Entity;

use App\Repository\PedidoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PedidoRepository::class)
 */
class Pedido
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estado;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaPedido;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaLlegada;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $subTotal;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\ManyToOne(targetEntity=proveedor::class, inversedBy="id_pedido")
     */
    private $id_provee;

    /**
     * @ORM\ManyToOne(targetEntity=personal::class, inversedBy="id_pedidos")
     */
    private $id_personal;

    /**
     * @ORM\OneToMany(targetEntity=DetallePedido::class, mappedBy="pedido")
     */
    private $id_detalle;

    public function __construct()
    {
        $this->id_detalle = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFechaPedido(): ?\DateTimeInterface
    {
        return $this->fechaPedido;
    }

    public function setFechaPedido(\DateTimeInterface $fechaPedido): self
    {
        $this->fechaPedido = $fechaPedido;

        return $this;
    }

    public function getFechaLlegada(): ?\DateTimeInterface
    {
        return $this->fechaLlegada;
    }

    public function setFechaLlegada(\DateTimeInterface $fechaLlegada): self
    {
        $this->fechaLlegada = $fechaLlegada;

        return $this;
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

    public function getIdProvee(): ?proveedor
    {
        return $this->id_provee;
    }

    public function setIdProvee(?proveedor $id_provee): self
    {
        $this->id_provee = $id_provee;

        return $this;
    }

    public function getIdPersonal(): ?personal
    {
        return $this->id_personal;
    }

    public function setIdPersonal(?personal $id_personal): self
    {
        $this->id_personal = $id_personal;

        return $this;
    }

    /**
     * @return Collection|DetallePedido[]
     */
    public function getIdDetalle(): Collection
    {
        return $this->id_detalle;
    }

    public function addIdDetalle(DetallePedido $idDetalle): self
    {
        if (!$this->id_detalle->contains($idDetalle)) {
            $this->id_detalle[] = $idDetalle;
            $idDetalle->setPedido($this);
        }

        return $this;
    }

    public function removeIdDetalle(DetallePedido $idDetalle): self
    {
        if ($this->id_detalle->removeElement($idDetalle)) {
            // set the owning side to null (unless already changed)
            if ($idDetalle->getPedido() === $this) {
                $idDetalle->setPedido(null);
            }
        }

        return $this;
    }
}
