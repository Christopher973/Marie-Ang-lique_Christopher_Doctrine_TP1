<?php



/**
 * Voiture
 */
class Voiture
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $modele;

    /**
     * @var \Acheteur
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
