<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Attivita;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Misurazioni
 *
 * @ORM\Table(name="misurazioni", indexes={@ORM\Index(name="id_attivita", columns={"id_attivita"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Misurazioni
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_misurazione", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMisurazione;

    /**
     * @var string
     *
     * @ORM\Column(name="temp1", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $temp1;

    /**
     * @var string
     *
     * @ORM\Column(name="temp2", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $temp2;

    /**
     * @var string
     *
     * @ORM\Column(name="temp3", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $temp3;

    /**
     * @var string
     *
     * @ORM\Column(name="tempMedia", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $tempmedia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataOra", type="datetime", nullable=false)
     */
    private $dataora;

    /**
     * @var \Attivita
     *
     * @ORM\ManyToOne(targetEntity="Attivita")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_attivita", referencedColumnName="id_attivita")
     * })
     */
    private $idAttivita;

    public function getIdMisurazione(): ?int
    {
        return $this->idMisurazione;
    }

    public function getTemp1(): ?string
    {
        return $this->temp1;
    }

    public function setTemp1(string $temp1): self
    {
        $this->temp1 = $temp1;

        return $this;
    }

    public function getTemp2(): ?string
    {
        return $this->temp2;
    }

    public function setTemp2(string $temp2): self
    {
        $this->temp2 = $temp2;

        return $this;
    }

    public function getTemp3(): ?string
    {
        return $this->temp3;
    }

    public function setTemp3(string $temp3): self
    {
        $this->temp3 = $temp3;

        return $this;
    }

    public function getTempmedia(): ?string
    {
        return $this->tempmedia;
    }

    public function setTempmedia(string $tempmedia): self
    {
        $this->tempmedia = $tempmedia;

        return $this;
    }

    public function getDataora(): ?\DateTimeInterface
    {
        return $this->dataora;
    }

    public function setDataora(\DateTimeInterface $dataora): self
    {
        $this->dataora = $dataora;

        return $this;
    }

    public function getIdAttivita(): ?Attivita
    {
        return $this->idAttivita;
    }

    public function setIdAttivita(?Attivita $idAttivita): self
    {
        $this->idAttivita = $idAttivita;

        return $this;
    }


}
