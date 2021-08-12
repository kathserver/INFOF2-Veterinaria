<?php

namespace App\Entity;

use App\Repository\HistorialRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HistorialRepository::class)
 */
class Historial
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="time")
     */
    private $horaIngreso;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaIngreso;
    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\ManyToOne(targetEntity=paciente::class, inversedBy="id_historial")
     */
    private $id_paciente;

    /**
     * @ORM\OneToMany(targetEntity=servicio::class, mappedBy="id_historial")
     */
    private $id_servicio;

    /**
     * @ORM\ManyToOne(targetEntity=DetalleFactura::class, inversedBy="id_historial")
     */
    private $id_detalleFactura;

    public function __construct()
    {
        $this->id_servicio = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHoraIngreso(): ?\DateTimeInterface
    {
        return $this->horaIngreso;
    }

    public function setHoraIngreso(\DateTimeInterface $horaIngreso): self
    {
        $this->horaIngreso = $horaIngreso;

        return $this;
    }

    public function getFechaIngreso(): ?\DateTimeInterface
    {
        return $this->fechaIngreso;
    }

    public function setFechaIngreso(\DateTimeInterface $fechaIngreso): self
    {
        $this->fechaIngreso = $fechaIngreso;

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

    public function getIdPaciente(): ?paciente
    {
        return $this->id_paciente;
    }

    public function setIdPaciente(?paciente $id_paciente): self
    {
        $this->id_paciente = $id_paciente;

        return $this;
    }

    /**
     * @return Collection|servicio[]
     */
    public function getIdServicio(): Collection
    {
        return $this->id_servicio;
    }

    public function addIdServicio(servicio $idServicio): self
    {
        if (!$this->id_servicio->contains($idServicio)) {
            $this->id_servicio[] = $idServicio;
            $idServicio->setIdHistorial($this);
        }

        return $this;
    }

    public function removeIdServicio(servicio $idServicio): self
    {
        if ($this->id_servicio->removeElement($idServicio)) {
            // set the owning side to null (unless already changed)
            if ($idServicio->getIdHistorial() === $this) {
                $idServicio->setIdHistorial(null);
            }
        }

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
