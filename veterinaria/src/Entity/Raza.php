<?php

namespace App\Entity;

use App\Repository\RazaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RazaRepository::class)
 */
class Raza
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
     * @ORM\Column(type="string", length=255)
     */
    private $nota;


    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\ManyToOne(targetEntity=Paciente::class, inversedBy="id_paciente")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_paciente;

    /**
     * @ORM\ManyToOne(targetEntity=especie::class, inversedBy="razas")
     */
    private $id_especie;

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

    public function getNota(): ?string
    {
        return $this->nota;
    }

    public function setNota(string $nota): self
    {
        $this->nota = $nota;

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

    public function getIdPaciente(): ?Paciente
    {
        return $this->id_paciente;
    }

    public function setIdPaciente(?Paciente $id_paciente): self
    {
        $this->id_paciente = $id_paciente;

        return $this;
    }

    public function getIdEspecie(): ?especie
    {
        return $this->id_especie;
    }

    public function setIdEspecie(?especie $id_especie): self
    {
        $this->id_especie = $id_especie;

        return $this;
    }
}
