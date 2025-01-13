<?php



/**
 * Adresse
 */
class Adresse
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $rue;

    /**
     * @var string
     */
    private $code_postal;

    /**
     * @var string
     */
    private $ville;


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
     * Set rue.
     *
     * @param string $rue
     *
     * @return Adresse
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue.
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set codePostal.
     *
     * @param string $codePostal
     *
     * @return Adresse
     */
    public function setCodePostal($codePostal)
    {
        $this->code_postal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal.
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * Set ville.
     *
     * @param string $ville
     *
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
}
