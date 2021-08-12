<?php

namespace App\Entity;

use App\Repository\RecetaMedicaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecetaMedicaRepository::class)
 */
class RecetaMedica
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $especificaciones;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\ManyToOne(targetEntity=Consulta::class, inversedBy="id_receta")
     */
    private $consulta;

    /**
     * @ORM\ManyToOne(targetEntity=personal::class, inversedBy="id_personal")
     */
    private $id_personal;

    /**
     * @ORM\ManyToOne(targetEntity=cita::class, inversedBy="id_receta")
     */
    private $id_cita;

    /**
     * @ORM\OneToMany(targetEntity=medicamento::class, mappedBy="id_receta")
     */
    private $id_medicamento;

    /**
     * @ORM\ManyToOne(targetEntity=paciente::class, inversedBy="id_receta")
     */
    private $id_paciente;

    public function __construct()
    {
        $this->id_medicamento = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEspecificaciones(): ?string
    {
        return $this->especificaciones;
    }

    public function setEspecificaciones(?string $especificaciones): self
    {
        $this->especificaciones = $especificaciones;

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

    public function getConsulta(): ?Consulta
    {
        return $this->consulta;
    }

    public function setConsulta(?Consulta $consulta): self
    {
        $this->consulta = $consulta;

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

    public function getIdCita(): ?cita
    {
        return $this->id_cita;
    }

    public function setIdCita(?cita $id_cita): self
    {
        $this->id_cita = $id_cita;

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
            $idMedicamento->setIdReceta($this);
        }

        return $this;
    }

    public function removeIdMedicamento(medicamento $idMedicamento): self
    {
        if ($this->id_medicamento->removeElement($idMedicamento)) {
            // set the owning side to null (unless already changed)
            if ($idMedicamento->getIdReceta() === $this) {
                $idMedicamento->setIdReceta(null);
            }
        }

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
}
