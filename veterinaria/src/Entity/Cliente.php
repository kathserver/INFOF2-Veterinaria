<?php

namespace App\Entity;

use App\Repository\ClienteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClienteRepository::class)
 */
class Cliente
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
     * @ORM\Column(type="string", length=100)
     */
    private $correo;

        /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\OneToMany(targetEntity=Paciente::class, mappedBy="id_cliente")
     */
    private $pacientes;

    /**
     * @ORM\OneToMany(targetEntity=DetalleFactura::class, mappedBy="id_cliente")
     */
    private $id_detallefactura;

    public function __construct()
    {
        $this->pacientes = new ArrayCollection();
        $this->id_detallefactura = new ArrayCollection();
    }

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

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): self
    {
        $this->correo = $correo;

        return $this;
    }
    public function getBaja(): ?string
    {
        return $this->baja;
    }

    public function setBaja(string $baja): self
    {
        $this->baja = $baja;

        return $this;
    }

    /**
     * @return Collection|Paciente[]
     */
    public function getPacientes(): Collection
    {
        return $this->pacientes;
    }

    public function addPaciente(Paciente $paciente): self
    {
        if (!$this->pacientes->contains($paciente)) {
            $this->pacientes[] = $paciente;
            $paciente->setIdCliente($this);
        }

        return $this;
    }

    public function removePaciente(Paciente $paciente): self
    {
        if ($this->pacientes->removeElement($paciente)) {
            // set the owning side to null (unless already changed)
            if ($paciente->getIdCliente() === $this) {
                $paciente->setIdCliente(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|DetalleFactura[]
     */
    public function getIdDetallefactura(): Collection
    {
        return $this->id_detallefactura;
    }

    public function addIdDetallefactura(DetalleFactura $idDetallefactura): self
    {
        if (!$this->id_detallefactura->contains($idDetallefactura)) {
            $this->id_detallefactura[] = $idDetallefactura;
            $idDetallefactura->setIdCliente($this);
        }

        return $this;
    }

    public function removeIdDetallefactura(DetalleFactura $idDetallefactura): self
    {
        if ($this->id_detallefactura->removeElement($idDetallefactura)) {
            // set the owning side to null (unless already changed)
            if ($idDetallefactura->getIdCliente() === $this) {
                $idDetallefactura->setIdCliente(null);
            }
        }

        return $this;
    }
}
