<?php

namespace App\Entity;

use App\Repository\PersonalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonalRepository::class)
 */
class Personal
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
    private $puesto;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $salarioBase;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaIngreso;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $area;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\OneToMany(targetEntity=Hospitalizacion::class, mappedBy="id_personal")
     */
    private $Id_hospital;

    /**
     * @ORM\OneToMany(targetEntity=Procedimiento::class, mappedBy="id_personal")
     */
    private $id_procedimiento;

    /**
     * @ORM\OneToMany(targetEntity=RecetaMedica::class, mappedBy="id_personal")
     */
    private $id_personal;

    /**
     * @ORM\OneToMany(targetEntity=Pedido::class, mappedBy="id_personal")
     */
    private $id_pedidos;

    public function __construct()
    {
        $this->Id_hospital = new ArrayCollection();
        $this->id_procedimiento = new ArrayCollection();
        $this->id_personal = new ArrayCollection();
        $this->id_pedidos = new ArrayCollection();
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

    public function getPuesto(): ?string
    {
        return $this->puesto;
    }

    public function setPuesto(string $puesto): self
    {
        $this->puesto = $puesto;

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

    public function getFechaIngreso(): ?\DateTimeInterface
    {
        return $this->fechaIngreso;
    }

    public function setFechaIngreso(\DateTimeInterface $fechaIngreso): self
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

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
     * @return Collection|Hospitalizacion[]
     */
    public function getIdHospital(): Collection
    {
        return $this->Id_hospital;
    }

    public function addIdHospital(Hospitalizacion $idHospital): self
    {
        if (!$this->Id_hospital->contains($idHospital)) {
            $this->Id_hospital[] = $idHospital;
            $idHospital->setIdPersonal($this);
        }

        return $this;
    }

    public function removeIdHospital(Hospitalizacion $idHospital): self
    {
        if ($this->Id_hospital->removeElement($idHospital)) {
            // set the owning side to null (unless already changed)
            if ($idHospital->getIdPersonal() === $this) {
                $idHospital->setIdPersonal(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Procedimiento[]
     */
    public function getIdProcedimiento(): Collection
    {
        return $this->id_procedimiento;
    }

    public function addIdProcedimiento(Procedimiento $idProcedimiento): self
    {
        if (!$this->id_procedimiento->contains($idProcedimiento)) {
            $this->id_procedimiento[] = $idProcedimiento;
            $idProcedimiento->setIdPersonal($this);
        }

        return $this;
    }

    public function removeIdProcedimiento(Procedimiento $idProcedimiento): self
    {
        if ($this->id_procedimiento->removeElement($idProcedimiento)) {
            // set the owning side to null (unless already changed)
            if ($idProcedimiento->getIdPersonal() === $this) {
                $idProcedimiento->setIdPersonal(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RecetaMedica[]
     */
    public function getIdPersonal(): Collection
    {
        return $this->id_personal;
    }

    public function addIdPersonal(RecetaMedica $idPersonal): self
    {
        if (!$this->id_personal->contains($idPersonal)) {
            $this->id_personal[] = $idPersonal;
            $idPersonal->setIdPersonal($this);
        }

        return $this;
    }

    public function removeIdPersonal(RecetaMedica $idPersonal): self
    {
        if ($this->id_personal->removeElement($idPersonal)) {
            // set the owning side to null (unless already changed)
            if ($idPersonal->getIdPersonal() === $this) {
                $idPersonal->setIdPersonal(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Pedido[]
     */
    public function getIdPedidos(): Collection
    {
        return $this->id_pedidos;
    }

    public function addIdPedido(Pedido $idPedido): self
    {
        if (!$this->id_pedidos->contains($idPedido)) {
            $this->id_pedidos[] = $idPedido;
            $idPedido->setIdPersonal($this);
        }

        return $this;
    }

    public function removeIdPedido(Pedido $idPedido): self
    {
        if ($this->id_pedidos->removeElement($idPedido)) {
            // set the owning side to null (unless already changed)
            if ($idPedido->getIdPersonal() === $this) {
                $idPedido->setIdPersonal(null);
            }
        }

        return $this;
    }
}
