<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Individu;

class IndividuDao extends AbstractDao
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Individu::class);
    }

    // Ajoute des méthodes spécifiques à Individu si besoin

    public function create(Individu $individu)
    {
        $this->persist($individu);
        return $individu;
    }

    public function delete(Individu $individu)
    {
        $this->remove($individu);
        return $individu;
    }
}