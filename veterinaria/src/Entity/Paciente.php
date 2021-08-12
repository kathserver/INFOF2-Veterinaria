<?php

namespace App\Entity;

use App\Repository\PacienteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PacienteRepository::class)
 */
class Paciente
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
     * @ORM\Column(type="date")
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\OneToMany(targetEntity=raza::class, mappedBy="id_paciente")
     */
    private $id_raza;

    /**
     * @ORM\ManyToOne(targetEntity=cliente::class, inversedBy="id_pacientes")
     */
    private $id_cliente;

    /**
     * @ORM\OneToMany(targetEntity=ChekIn::class, mappedBy="id_paciente")
     */
    private $chekIns;

    /**
     * @ORM\OneToMany(targetEntity=Cita::class, mappedBy="id_paciente")
     */
    private $citas;

    /**
     * @ORM\OneToMany(targetEntity=Consulta::class, mappedBy="id_paciente")
     */
    private $consultas;

    /**
     * @ORM\OneToMany(targetEntity=Hospitalizacion::class, mappedBy="id_paciente")
     */
    private $hospitalizacions;

    /**
     * @ORM\OneToMany(targetEntity=Historial::class, mappedBy="id_paciente")
     */
    private $id_historial;

    /**
     * @ORM\OneToMany(targetEntity=RecetaMedica::class, mappedBy="id_paciente")
     */
    private $id_receta;

    public function __construct()
    {
        $this->id_raza = new ArrayCollection();
        $this->chekIns = new ArrayCollection();
        $this->citas = new ArrayCollection();
        $this->consultas = new ArrayCollection();
        $this->hospitalizacions = new ArrayCollection();
        $this->id_historial = new ArrayCollection();
        $this->id_receta = new ArrayCollection();
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

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(\DateTimeInterface $fechaNacimiento): self
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getSalarioBase(): ?string
    {
        return $this->salarioBase;
    }

    public function setSalarioBase(string $salarioBase): self
    {
        $this->salarioBase = $salarioBase;

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

    /**
     * @return Collection|raza[]
     */
    public function getIdRaza(): Collection
    {
        return $this->id_raza;
    }

    public function addIdRaza(raza $idRaza): self
    {
        if (!$this->id_raza->contains($idRaza)) {
            $this->id_raza[] = $idRaza;
            $idRaza->setIdPaciente($this);
        }

        return $this;
    }

    public function removeIdRaza(raza $idRaza): self
    {
        if ($this->id_raza->removeElement($idRaza)) {
            // set the owning side to null (unless already changed)
            if ($idRaza->getIdPaciente() === $this) {
                $idRaza->setIdPaciente(null);
            }
        }

        return $this;
    }

    public function getIdCliente(): ?cliente
    {
        return $this->id_cliente;
    }

    public function setIdCliente(?cliente $id_cliente): self
    {
        $this->id_cliente = $id_cliente;

        return $this;
    }

    /**
     * @return Collection|ChekIn[]
     */
    public function getChekIns(): Collection
    {
        return $this->chekIns;
    }

    public function addChekIn(ChekIn $chekIn): self
    {
        if (!$this->chekIns->contains($chekIn)) {
            $this->chekIns[] = $chekIn;
            $chekIn->setIdPaciente($this);
        }

        return $this;
    }

    public function removeChekIn(ChekIn $chekIn): self
    {
        if ($this->chekIns->removeElement($chekIn)) {
            // set the owning side to null (unless already changed)
            if ($chekIn->getIdPaciente() === $this) {
                $chekIn->setIdPaciente(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Cita[]
     */
    public function getCitas(): Collection
    {
        return $this->citas;
    }

    public function addCita(Cita $cita): self
    {
        if (!$this->citas->contains($cita)) {
            $this->citas[] = $cita;
            $cita->setIdPaciente($this);
        }

        return $this;
    }

    public function removeCita(Cita $cita): self
    {
        if ($this->citas->removeElement($cita)) {
            // set the owning side to null (unless already changed)
            if ($cita->getIdPaciente() === $this) {
                $cita->setIdPaciente(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Consulta[]
     */
    public function getConsultas(): Collection
    {
        return $this->consultas;
    }

    public function addConsulta(Consulta $consulta): self
    {
        if (!$this->consultas->contains($consulta)) {
            $this->consultas[] = $consulta;
            $consulta->setIdPaciente($this);
        }

        return $this;
    }

    public function removeConsulta(Consulta $consulta): self
    {
        if ($this->consultas->removeElement($consulta)) {
            // set the owning side to null (unless already changed)
            if ($consulta->getIdPaciente() === $this) {
                $consulta->setIdPaciente(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Hospitalizacion[]
     */
    public function getHospitalizacions(): Collection
    {
        return $this->hospitalizacions;
    }

    public function addHospitalizacion(Hospitalizacion $hospitalizacion): self
    {
        if (!$this->hospitalizacions->contains($hospitalizacion)) {
            $this->hospitalizacions[] = $hospitalizacion;
            $hospitalizacion->setIdPaciente($this);
        }

        return $this;
    }

    public function removeHospitalizacion(Hospitalizacion $hospitalizacion): self
    {
        if ($this->hospitalizacions->removeElement($hospitalizacion)) {
            // set the owning side to null (unless already changed)
            if ($hospitalizacion->getIdPaciente() === $this) {
                $hospitalizacion->setIdPaciente(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Historial[]
     */
    public function getIdHistorial(): Collection
    {
        return $this->id_historial;
    }

    public function addIdHistorial(Historial $idHistorial): self
    {
        if (!$this->id_historial->contains($idHistorial)) {
            $this->id_historial[] = $idHistorial;
            $idHistorial->setIdPaciente($this);
        }

        return $this;
    }

    public function removeIdHistorial(Historial $idHistorial): self
    {
        if ($this->id_historial->removeElement($idHistorial)) {
            // set the owning side to null (unless already changed)
            if ($idHistorial->getIdPaciente() === $this) {
                $idHistorial->setIdPaciente(null);
            }
        }

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
            $idRecetum->setIdPaciente($this);
        }

        return $this;
    }

    public function removeIdRecetum(RecetaMedica $idRecetum): self
    {
        if ($this->id_receta->removeElement($idRecetum)) {
            // set the owning side to null (unless already changed)
            if ($idRecetum->getIdPaciente() === $this) {
                $idRecetum->setIdPaciente(null);
            }
        }

        return $this;
    }
}
