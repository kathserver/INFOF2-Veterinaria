<?php

namespace App\Entity;

use App\Repository\MedicamentoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedicamentoRepository::class)
 */
class Medicamento
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
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $especificacion;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $precioCompra;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $precioVenta;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\ManyToOne(targetEntity=Hospitalizacion::class, inversedBy="id_medicamento")
     */
    private $id_hospitali;

    /**
     * @ORM\ManyToOne(targetEntity=RecetaMedica::class, inversedBy="id_medicamento")
     */
    private $id_receta;

    /**
     * @ORM\ManyToOne(targetEntity=Inventario::class, inversedBy="identificador")
     */
    private $id_inventario;

    /**
     * @ORM\ManyToOne(targetEntity=DetallePedido::class, inversedBy="id_medicamento")
     */
    private $id_detalle;

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

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getEspecificacion(): ?string
    {
        return $this->especificacion;
    }

    public function setEspecificacion(?string $especificacion): self
    {
        $this->especificacion = $especificacion;

        return $this;
    }

    public function getPrecioCompra(): ?string
    {
        return $this->precioCompra;
    }

    public function setPrecioCompra(string $precioCompra): self
    {
        $this->precioCompra = $precioCompra;

        return $this;
    }

    public function getPrecioVenta(): ?string
    {
        return $this->precioVenta;
    }

    public function setPrecioVenta(string $precioVenta): self
    {
        $this->precioVenta = $precioVenta;

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

    public function getIdHospitali(): ?Hospitalizacion
    {
        return $this->id_hospitali;
    }

    public function setIdHospitali(?Hospitalizacion $id_hospitali): self
    {
        $this->id_hospitali = $id_hospitali;

        return $this;
    }

    public function getIdReceta(): ?RecetaMedica
    {
        return $this->id_receta;
    }

    public function setIdReceta(?RecetaMedica $id_receta): self
    {
        $this->id_receta = $id_receta;

        return $this;
    }

    public function getIdInventario(): ?Inventario
    {
        return $this->id_inventario;
    }

    public function setIdInventario(?Inventario $id_inventario): self
    {
        $this->id_inventario = $id_inventario;

        return $this;
    }

    public function getIdDetalle(): ?DetallePedido
    {
        return $this->id_detalle;
    }

    public function setIdDetalle(?DetallePedido $id_detalle): self
    {
        $this->id_detalle = $id_detalle;

        return $this;
    }
}
