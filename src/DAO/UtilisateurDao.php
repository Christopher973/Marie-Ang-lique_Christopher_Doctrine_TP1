<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Utilisateur;

class UtilisateurDao extends AbstractDao
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Utilisateur::class);
    }

    // Ajoute des méthodes spécifiques à Utilisateur si besoin

    public function create(Utilisateur $utilisateur)
    {
        $this->persist($utilisateur);
        return $utilisateur;
    }

    public function delete(Utilisateur $utilisateur)
    {
        $this->remove($utilisateur);
        return $utilisateur;
    }
}