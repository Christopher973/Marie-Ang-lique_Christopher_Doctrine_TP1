<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Commentaire;

class CommentaireDao extends AbstractDao
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Commentaire::class);
    }

    // Ajoute des méthodes spécifiques à Commentaire si besoin

    public function create(Commentaire $commentaire)
    {
        $this->persist($commentaire);
        return $commentaire;
    }

    public function delete(Commentaire $commentaire)
    {
        $this->remove($commentaire);
        return $commentaire;
    }
}