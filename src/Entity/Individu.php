<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=Repository\IndividuRepository::class)
 * @ORM\Table(name="t_individu")
 */
class Individu
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
     * @ORM\ManyToMany (targetEntity ="Club", inversedBy="individus")
     * @ORM\JoinTable (name ="t_individu_club")
     */
    private $clubs;

    public function __construct () {
        $this->clubs = new ArrayCollection();
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
     * @return Individu
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
     * Add club.
     *
     * @param \Club $club
     *
     * @return Individu
     */
    public function addClub(\Club $club)
    {
        $this->clubs[] = $club;

        return $this;
    }

    /**
     * Remove club.
     *
     * @param \Club $club
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeClub(\Club $club)
    {
        return $this->clubs->removeElement($club);
    }

    /**
     * Get clubs.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClubs()
    {
        return $this->clubs;
    }
}
