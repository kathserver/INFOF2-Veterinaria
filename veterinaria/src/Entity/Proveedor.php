<?php

namespace App\Entity;

use App\Repository\ProveedorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProveedorRepository::class)
 */
class Proveedor
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
     * @ORM\Column(type="date")
     */
    private $fechaLlega;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estado;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\OneToMany(targetEntity=Pedido::class, mappedBy="id_provee")
     */
    private $id_pedido;

    public function __construct()
    {
        $this->id_pedido = new ArrayCollection();
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

    public function getFechaLlega(): ?\DateTimeInterface
    {
        return $this->fechaLlega;
    }

    public function setFechaLlega(\DateTimeInterface $fechaLlega): self
    {
        $this->fechaLlega = $fechaLlega;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(?string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
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
     * @return Collection|Pedido[]
     */
    public function getIdPedido(): Collection
    {
        return $this->id_pedido;
    }

    public function addIdPedido(Pedido $idPedido): self
    {
        if (!$this->id_pedido->contains($idPedido)) {
            $this->id_pedido[] = $idPedido;
            $idPedido->setIdProvee($this);
        }

        return $this;
    }

    public function removeIdPedido(Pedido $idPedido): self
    {
        if ($this->id_pedido->removeElement($idPedido)) {
            // set the owning side to null (unless already changed)
            if ($idPedido->getIdProvee() === $this) {
                $idPedido->setIdProvee(null);
            }
        }

        return $this;
    }
}
