<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Repository\CommentaireRepository::class)
 * @ORM\Table(name="t_commentaire")
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne (targetEntity ="Post", inversedBy ="commentaires")
     */
    private $post;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set commentaire.
     *
     * @param string $commentaire
     *
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire.
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set post.
     *
     * @param \Post|null $post
     *
     * @return Commentaire
     */
    public function setPost(\Post $post = null)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * Get post.
     *
     * @return \Post|null
     */
    public function getPost()
    {
        return $this->post;
    }
}
