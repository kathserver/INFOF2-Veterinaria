<?php

namespace App\Entity;

use App\Repository\CitaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CitaRepository::class)
 */
class Cita
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $motivo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estado;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\ManyToOne(targetEntity=paciente::class, inversedBy="citas")
     */
    private $id_paciente;

    /**
     * @ORM\OneToMany(targetEntity=RecetaMedica::class, mappedBy="id_cita")
     */
    private $id_receta;

    public function __construct()
    {
        $this->id_receta = new ArrayCollection();
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

    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    public function setMotivo(?string $motivo): self
    {
        $this->motivo = $motivo;

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
     * @return Collection|RecetaMedica[]
     */
    public function getIdReceta(): Collection
    {
        return $this->id_receta;
    }

    public function addIdRecetum(RecetaMedica $idRecetum): self
    {
        if (!$this->id_receta->contains($idRecetum)) {
            $this->id_receta[] = $idRecetum;
            $idRecetum->setIdCita($this);
        }

        return $this;
    }

    public function removeIdRecetum(RecetaMedica $idRecetum): self
    {
        if ($this->id_receta->removeElement($idRecetum)) {
            // set the owning side to null (unless already changed)
            if ($idRecetum->getIdCita() === $this) {
                $idRecetum->setIdCita(null);
            }
        }

        return $this;
    }
}
