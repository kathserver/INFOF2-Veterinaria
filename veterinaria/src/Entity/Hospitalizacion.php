<?php

namespace App\Entity;

use App\Repository\HospitalizacionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HospitalizacionRepository::class)
 */
class Hospitalizacion
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
     * @ORM\ManyToOne(targetEntity=paciente::class, inversedBy="hospitalizacions")
     */
    private $id_paciente;

    /**
     * @ORM\ManyToOne(targetEntity=personal::class, inversedBy="Id_hospital")
     */
    private $id_personal;

    /**
     * @ORM\OneToOne(targetEntity=jaula::class, cascade={"persist", "remove"})
     */
    private $id_jaula;

    /**
     * @ORM\OneToMany(targetEntity=medicamento::class, mappedBy="id_hospitali")
     */
    private $id_medicamento;

    public function __construct()
    {
        $this->id_medicamento = new ArrayCollection();
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
        $this->facha = $fecha;

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

    public function getIdPersonal(): ?personal
    {
        return $this->id_personal;
    }

    public function setIdPersonal(?personal $id_personal): self
    {
        $this->id_personal = $id_personal;

        return $this;
    }

    public function getIdJaula(): ?jaula
    {
        return $this->id_jaula;
    }

    public function setIdJaula(?jaula $id_jaula): self
    {
        $this->id_jaula = $id_jaula;

        return $this;
    }

    /**
     * @return Collection|medicamento[]
     */
    public function getIdMedicamento(): Collection
    {
        return $this->id_medicamento;
    }

    public function addIdMedicamento(medicamento $idMedicamento): self
    {
        if (!$this->id_medicamento->contains($idMedicamento)) {
            $this->id_medicamento[] = $idMedicamento;
            $idMedicamento->setIdHospitali($this);
        }

        return $this;
    }

    public function removeIdMedicamento(medicamento $idMedicamento): self
    {
        if ($this->id_medicamento->removeElement($idMedicamento)) {
            // set the owning side to null (unless already changed)
            if ($idMedicamento->getIdHospitali() === $this) {
                $idMedicamento->setIdHospitali(null);
            }
        }

        return $this;
    }
}
