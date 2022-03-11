<?php

namespace App\Entity;

use App\Repository\LogementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LogementRepository::class)
 */
class Logement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_logement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomLogement(): ?string
    {
        return $this->Nom_logement;
    }

    public function setNomLogement(string $Nom_logement): self
    {
        $this->Nom_logement = $Nom_logement;

        return $this;
    }
}
