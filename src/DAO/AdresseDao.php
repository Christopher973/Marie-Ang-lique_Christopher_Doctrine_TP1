<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Adresse;

class AdresseDao extends AbstractDao
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Adresse::class);
    }

    // Ajoute des méthodes spécifiques à Adresse si besoin

    public function create(Adresse $adresse)
    {
        $this->persist($adresse);
        return $adresse;
    }

    public function delete(Adresse $adresse)
    {
        $this->remove($adresse);
        return $adresse;
    }
}