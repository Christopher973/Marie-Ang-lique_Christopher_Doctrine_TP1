<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Repository\AcheteurRepository::class)
 * @ORM\Table(name="t_acheteur")
 */
class Acheteur
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
    private $nom;

    /**
     * @ORM\OneToOne (targetEntity ="Voiture", mappedBy="acheteur")
     */
    private $voiture;

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
     * Set nom.
     *
     * @param string $nom
     *
     * @return Acheteur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set voiture.
     *
     * @param \Voiture|null $voiture
     *
     * @return Acheteur
     */
    public function setVoiture(\Voiture $voiture = null)
    {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * Get voiture.
     *
     * @return \Voiture|null
     */
    public function getVoiture()
    {
        return $this->voiture;
    }
}
