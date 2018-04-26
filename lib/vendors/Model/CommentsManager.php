<?php
namespace Model;

use \Fram\Manager;
use \Entity\Comment;

abstract class CommentsManager extends Manager
{
  /**
   * Méthode permettant d'ajouter un commentaire
   */
  abstract protected function add(Comment $comment);
  
  /**
   * Méthode permettant d'enregistrer un commentaire.
   */
  public function save(Comment $comment)
  {
    if ($comment->isValid())
    {
      $comment->isChapter() ? $this->add($comment) : $this->modify($comment);
    }
    else
    {
      throw new \RuntimeException('Le commentaire doit être validé pour être enregistré');
    }
  }
    
    /**
   * Méthode permettant de modifier un commentaire.
   */
  abstract protected function modify(Comment $comment);
    
    /**
   * Méthode permettant de signaler un commentaire.
   */
   abstract protected function reporting($id);
    

  /**
   * Méthode permettant d'obtenir un commentaire spécifique.
   */
  abstract public function get($id);
    
    /**
   * Méthode permettant de supprimer un commentaire.
   */
  abstract public function delete($id);
    
     /**
   * Méthode permettant de supprimer tous les commentaires liés à un chapitre
   */
  abstract public function deleteFromChapters($chapters);
}