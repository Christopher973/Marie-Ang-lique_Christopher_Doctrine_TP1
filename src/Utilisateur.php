<?php



/**
 * Utilisateur
 */
class Utilisateur
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $groupes = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Utilisateur
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
     * Add groupe.
     *
     * @param \Groupe $groupe
     *
     * @return Utilisateur
     */
    public function addGroupe(\Groupe $groupe)
    {
        $this->groupes[] = $groupe;

        return $this;
    }

    /**
     * Remove groupe.
     *
     * @param \Groupe $groupe
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeGroupe(\Groupe $groupe)
    {
        return $this->groupes->removeElement($groupe);
    }

    /**
     * Get groupes.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupes()
    {
        return $this->groupes;
    }
}
