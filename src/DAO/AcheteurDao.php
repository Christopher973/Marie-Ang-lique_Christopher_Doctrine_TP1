<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Acheteur;

class AcheteurDao extends AbstractDao
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Acheteur::class);
    }

    // Ajoute des méthodes spécifiques à Acheteur si besoin
    public function create(Acheteur $acheteur) {
        $this->persist($acheteur);
        return $acheteur;
    }

    public function delete(Acheteur $acheteur)
    {
        $this->remove($acheteur);
        return $acheteur;
    }
}