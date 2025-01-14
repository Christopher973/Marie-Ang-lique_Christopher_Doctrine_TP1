<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;

abstract class AbstractDao
{
    protected $entityManager;
    protected $entityClass;

    public function __construct(EntityManagerInterface $entityManager, string $entityClass)
    {
        $this->entityManager = $entityManager;
        $this->entityClass = $entityClass;
    }

    public function find($id)
    {
        return $this->entityManager->find($this->entityClass, $id);
    }

    public function findAll()
    {
        return $this->entityManager->getRepository($this->entityClass)->findAll();
    }

    public function persist($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }

    public function remove($entity)
    {
        $this->entityManager->remove($entity);
        $this->entityManager->flush();
    }
    
    public function update($entity)
    {
        $this->entityManager->flush();
        return $entity;
    }
}