<?php

namespace App\Entity;

use App\Repository\DetallePedidoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DetallePedidoRepository::class)
 */
class DetallePedido
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cantidad;

    /**
     * @ORM\Column(type="boolean")
     */
    private $baja;

    /**
     * @ORM\OneToMany(targetEntity=medicamento::class, mappedBy="id_detalle")
     */
    private $id_medicamento;

    /**
     * @ORM\ManyToOne(targetEntity=pedido::class, inversedBy="id_detalle")
     */
    private $pedido;

    public function __construct()
    {
        $this->id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCantidad(): ?string
    {
        return $this->cantidad;
    }

    public function setCantidad(string $cantidad): self
    {
        $this->cantidad = $cantidad;

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
            $idMedicamento->setIdDetalle($this);
        }

        return $this;
    }

    public function removeIdMedicamento(medicamento $idMedicamento): self
    {
        if ($this->id_medicamento->removeElement($idMedicamento)) {
            // set the owning side to null (unless already changed)
            if ($idMedicamento->getIdDetalle() === $this) {
                $idMedicamento->setIdDetalle(null);
            }
        }

        return $this;
    }

    public function getPedido(): ?pedido
    {
        return $this->pedido;
    }

    public function setPedido(?pedido $pedido): self
    {
        $this->pedido = $pedido;

        return $this;
    }
}
