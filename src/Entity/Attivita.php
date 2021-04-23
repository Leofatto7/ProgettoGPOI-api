<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Attivita
 *
 * @ORM\Table(name="attivita")
 * @ORM\Entity
 * @ApiResource()
 */
class Attivita
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_attivita", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAttivita;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="temperatura", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $temperatura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inizio", type="datetime", nullable=false)
     */
    private $dataInizio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fine", type="datetime", nullable=false)
     */
    private $dataFine;

    public function getIdAttivita(): ?int
    {
        return $this->idAttivita;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getTemperatura(): ?string
    {
        return $this->temperatura;
    }

    public function setTemperatura(string $temperatura): self
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    public function getDataInizio(): ?\DateTimeInterface
    {
        return $this->dataInizio;
    }

    public function setDataInizio(\DateTimeInterface $dataInizio): self
    {
        $this->dataInizio = $dataInizio;

        return $this;
    }

    public function getDataFine(): ?\DateTimeInterface
    {
        return $this->dataFine;
    }

    public function setDataFine(\DateTimeInterface $dataFine): self
    {
        $this->dataFine = $dataFine;

        return $this;
    }


}
