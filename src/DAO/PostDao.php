<?php
namespace Dao;

use Doctrine\ORM\EntityManagerInterface;
use Entity\Post;
use Repository\PostRepository;

class PostDao extends AbstractDao
{
    private $postRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Post::class);
        $this->postRepository = $entityManager->getRepository(Post::class); // Injection du repository
    }

    // Méthodes spécifiques à Post
    public function create(Post $post)
    {
        $this->persist($post);
        return $post;
    }
    
    public function update(Post $post)
    {
        $this->entityManager->flush();
        return $post;
    }

    public function delete(Post $post)
    {
        $this->remove($post);
        return $post;
    }

    // Utilisation du repository personnalisé
    public function findAllPostsOrderedByTitle()
    {
        return $this->postRepository->findAllOrderedByTitle();
    }
}