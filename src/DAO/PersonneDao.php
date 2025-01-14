<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Personne;

class PersonneDao extends AbstractDao
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Personne::class);
    }

    // Ajoute des méthodes spécifiques à Personne si besoin

    public function create(Personne $personne)
    {
        $this->persist($personne);
        return $personne;
    }

    public function delete(Personne $personne)
    {
        $this->remove($personne);
        return $personne;
    }
}