<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Repository\VoitureRepository::class)
 * @ORM\Table(name="t_voiture")
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $modele;

    /**
     * @ORM\OneToOne (targetEntity ="Acheteur", inversedBy ="voiture")
     * @ORM\JoinColumn (name ="acheteur_id", referencedColumnName ="id")
     */
    private $acheteur;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modele.
     *
     * @param string $modele
     *
     * @return Voiture
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele.
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set acheteur.
     *
     * @param \Acheteur|null $acheteur
     *
     * @return Voiture
     */
    public function setAcheteur(\Acheteur $acheteur = null)
    {
        $this->acheteur = $acheteur;

        return $this;
    }

    /**
     * Get acheteur.
     *
     * @return \Acheteur|null
     */
    public function getAcheteur()
    {
        return $this->acheteur;
    }
}
