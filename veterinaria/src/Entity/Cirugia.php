<?php

namespace App\Entity;

use App\Repository\CirugiaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CirugiaRepository::class)
 */
class Cirugia
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
    private $motivo;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_paciente;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_personal;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_cita;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdPaciente(): ?int
    {
        return $this->id_paciente;
    }

    public function setIdPaciente(int $id_paciente): self
    {
        $this->id_paciente = $id_paciente;

        return $this;
    }

    public function getIdPersonal(): ?int
    {
        return $this->id_personal;
    }

    public function setIdPersonal(int $id_personal): self
    {
        $this->id_personal = $id_personal;

        return $this;
    }

    public function getIdCita(): ?int
    {
        return $this->id_cita;
    }

    public function setIdCita(int $id_cita): self
    {
        $this->id_cita = $id_cita;

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
}
