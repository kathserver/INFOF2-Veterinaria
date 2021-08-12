<?php

namespace App\Entity;

use App\Repository\ConsultaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConsultaRepository::class)
 */
class Consulta
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $diagnostico;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\ManyToOne(targetEntity=paciente::class, inversedBy="consultas")
     */
    private $id_paciente;

    /**
     * @ORM\OneToOne(targetEntity=cita::class, cascade={"persist", "remove"})
     */
    private $id_cita;

    /**
     * @ORM\OneToMany(targetEntity=recetaMedica::class, mappedBy="consulta")
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

    public function getDiagnostico(): ?string
    {
        return $this->diagnostico;
    }

    public function setDiagnostico(string $diagnostico): self
    {
        $this->diagnostico = $diagnostico;

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
     * @return Collection|recetaMedica[]
     */
    public function getIdReceta(): Collection
    {
        return $this->id_receta;
    }

    public function addIdRecetum(recetaMedica $idRecetum): self
    {
        if (!$this->id_receta->contains($idRecetum)) {
            $this->id_receta[] = $idRecetum;
            $idRecetum->setConsulta($this);
        }

        return $this;
    }

    public function removeIdRecetum(recetaMedica $idRecetum): self
    {
        if ($this->id_receta->removeElement($idRecetum)) {
            // set the owning side to null (unless already changed)
            if ($idRecetum->getConsulta() === $this) {
                $idRecetum->setConsulta(null);
            }
        }

        return $this;
    }
}
