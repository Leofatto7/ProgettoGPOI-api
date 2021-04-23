<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Misurazioni;
use App\Entity\Utenti;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Problemi
 *
 * @ORM\Table(name="problemi", indexes={@ORM\Index(name="id_misurazione", columns={"id_misurazione"}), @ORM\Index(name="id_utente", columns={"id_utente"})})
 * @ORM\Entity
 * @ApiResource()
 */
class Problemi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_problema", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProblema;

    /**
     * @var bool
     *
     * @ORM\Column(name="alta_bassa", type="boolean", nullable=false)
     */
    private $altaBassa;

    /**
     * @var \Misurazioni
     *
     * @ORM\ManyToOne(targetEntity="Misurazioni")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_misurazione", referencedColumnName="id_misurazione")
     * })
     */
    private $idMisurazione;

    /**
     * @var \Utenti
     *
     * @ORM\ManyToOne(targetEntity="Utenti")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utente", referencedColumnName="id_utente")
     * })
     */
    private $idUtente;

    public function getIdProblema(): ?int
    {
        return $this->idProblema;
    }

    public function getAltaBassa(): ?bool
    {
        return $this->altaBassa;
    }

    public function setAltaBassa(bool $altaBassa): self
    {
        $this->altaBassa = $altaBassa;

        return $this;
    }

    public function getIdMisurazione(): ?Misurazioni
    {
        return $this->idMisurazione;
    }

    public function setIdMisurazione(?Misurazioni $idMisurazione): self
    {
        $this->idMisurazione = $idMisurazione;

        return $this;
    }

    public function getIdUtente(): ?Utenti
    {
        return $this->idUtente;
    }

    public function setIdUtente(?Utenti $idUtente): self
    {
        $this->idUtente = $idUtente;

        return $this;
    }


}
