<?php

namespace App\Entity;

use App\Repository\ServicioRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServicioRepository::class)
 */
class Servicio
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
     * @ORM\Column(type="string", length=50)
     */
    private $precioXhora;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\ManyToOne(targetEntity=Historial::class, inversedBy="id_servicio")
     */
    private $id_historial;

    /**
     * @ORM\ManyToOne(targetEntity=DetalleFactura::class, inversedBy="id_Servicio")
     */
    private $id_detalleFactura;

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

    public function getPrecioXhora(): ?string
    {
        return $this->precioXhora;
    }

    public function setPrecioXhora(string $precioXhora): self
    {
        $this->precioXhora = $precioXhora;

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

    public function getIdHistorial(): ?Historial
    {
        return $this->id_historial;
    }

    public function setIdHistorial(?Historial $id_historial): self
    {
        $this->id_historial = $id_historial;

        return $this;
    }

    public function getIdDetalleFactura(): ?DetalleFactura
    {
        return $this->id_detalleFactura;
    }

    public function setIdDetalleFactura(?DetalleFactura $id_detalleFactura): self
    {
        $this->id_detalleFactura = $id_detalleFactura;

        return $this;
    }
}
