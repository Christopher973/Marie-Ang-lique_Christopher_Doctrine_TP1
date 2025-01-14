<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Groupe;

class GroupeDao extends AbstractDao
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Groupe::class);
    }

    // Ajoute des méthodes spécifiques à Groupe si besoin

    public function create(Groupe $groupe)
    {
        $this->persist($groupe);
        return $groupe;
    }

    public function delete(Groupe $groupe)
    {
        $this->remove($groupe);
        return $groupe;
    }
}