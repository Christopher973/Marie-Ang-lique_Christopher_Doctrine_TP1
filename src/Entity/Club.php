<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=Repository\ClubRepository::class)
 * @ORM\Table(name="t_club")
 */
class Club
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
     * @ORM\ManyToMany (targetEntity ="Individu", mappedBy ="clubs")
     */
    private $individus;

    public function __construct () {
        $this->individus= new ArrayCollection();
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
     * @return Club
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
     * Add individu.
     *
     * @param \Individu $individu
     *
     * @return Club
     */
    public function addIndividu(\Individu $individu)
    {
        $this->individus[] = $individu;

        return $this;
    }

    /**
     * Remove individu.
     *
     * @param \Individu $individu
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIndividu(\Individu $individu)
    {
        return $this->individus->removeElement($individu);
    }

    /**
     * Get individus.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIndividus()
    {
        return $this->individus;
    }
}
