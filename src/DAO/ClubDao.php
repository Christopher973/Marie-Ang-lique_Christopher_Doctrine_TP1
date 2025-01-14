<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Club;

class ClubDao extends AbstractDao
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Club::class);
    }

    // Ajoute des méthodes spécifiques à Club si besoin

    public function create(Club $club)
    {
        $this->persist($club);
        return $club;
    }

    public function delete(Club $club)
    {
        $this->remove($club);
        return $club;
    }
}