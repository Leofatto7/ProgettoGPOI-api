<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * Utenti
 *
 * @ORM\Table(name="utenti")
 * @ORM\Entity
 * @ApiResource()
 */
class Utenti
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_utente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtente;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=30, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cognome", type="string", length=30, nullable=false)
     */
    private $cognome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    public function getIdUtente(): ?int
    {
        return $this->idUtente;
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

    public function getCognome(): ?string
    {
        return $this->cognome;
    }

    public function setCognome(string $cognome): self
    {
        $this->cognome = $cognome;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }


}
