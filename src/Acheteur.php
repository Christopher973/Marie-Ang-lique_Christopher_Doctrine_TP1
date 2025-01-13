<?php



/**
 * Acheteur
 */
class Acheteur
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \Voiture
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
