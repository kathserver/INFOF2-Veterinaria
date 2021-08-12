<?php

namespace App\Entity;

use App\Repository\DescuentoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DescuentoRepository::class)
 */
class Descuento
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
    private $porcentaje;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\ManyToOne(targetEntity=DetalleFactura::class, inversedBy="id_descuento")
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

    public function getPorcentaje(): ?string
    {
        return $this->porcentaje;
    }

    public function setPorcentaje(string $porcentaje): self
    {
        $this->porcentaje = $porcentaje;

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
