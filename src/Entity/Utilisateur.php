<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="t_utilisateur")
 */
class Utilisateur
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
     * @ORM\ManyToMany (targetEntity ="Groupe")
     * @ORM\JoinTable (name ="t_utilisateur_groupe",
     * joinColumns ={@ORM\JoinColumn (name ="utilisateur_id",referencedColumnName ="id")},
     * inverseJoinColumns ={@ORM\JoinColumn (name ="groupe_id",referencedColumnName ="id")})
     */
    private $groupes;

    public function __construct () {
        $this->groupes = new ArrayCollection();
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
