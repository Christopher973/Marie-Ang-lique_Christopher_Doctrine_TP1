<?php

namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Voiture;

class VoitureDao extends AbstractDao
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Voiture::class);
    }

    // Ajoute des méthodes spécifiques à Voiture si besoin

    public function create(Voiture $voiture)
    {
        $this->persist($voiture);
        return $voiture;
    }

    public function delete(Voiture $voiture)
    {
        $this->remove($voiture);
        return $voiture;
    }
}