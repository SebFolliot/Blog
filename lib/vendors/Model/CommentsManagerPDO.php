<?php
namespace Model;

use \Entity\Comment;

class CommentsManagerPDO extends CommentsManager
{
  protected function add(Comment $comment)
  {
    $q = $this->dao->prepare('INSERT INTO comments SET chapters = :chapters, auteur = :auteur, contenu = :contenu, date = NOW()');
    
    $q->bindValue(':chapters', $comment->chapter(), \PDO::PARAM_INT);
    $q->bindValue(':auteur', $comment->auteur());
    $q->bindValue(':contenu', $comment->contenu());
    
    $q->execute();
    
    $comment->setId($this->dao->lastInsertId());
  }
  
  public function getListOf($chapters)
  {
    if (!ctype_digit($chapters))
    {
      throw new \InvalidArgumentException('L\'identifiant du chapitre passé doit être un nombre entier valide');
    }
    
    $q = $this->dao->prepare('SELECT id, chapters, auteur, contenu, report, moderate, date FROM comments WHERE chapters = :chapters ORDER BY date DESC');
    $q->bindValue(':chapters', $chapters, \PDO::PARAM_INT);
    $q->execute();
    
    $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Comment');
    
    $comments = $q->fetchAll();
    
    foreach ($comments as $comment)
    {
      $comment->setDate(new \DateTime($comment->date()));
    }
    
    return $comments;
  }
  
    // Fonction permettant de passer à 1 le booléen report
    
  public function reporting($id)
  {
    $this->dao->exec('UPDATE comments SET report = 1 WHERE id = '.(int) $id); 
  }
    
    // Fonction permettant de passer à 0 le booléen report  
  public function deleteReport($id)
  {
    $this->dao->exec('UPDATE comments SET report = 0 WHERE id = '.(int) $id); 
  }  
     
  
  public function get($id)
  {
    $q = $this->dao->prepare('SELECT id, chapters, auteur, contenu, report, moderate FROM comments WHERE id = :id');
    $q->bindValue(':id', (int) $id, \PDO::PARAM_INT);
    $q->execute();
    
    $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Comment');
    
    return $q->fetch();
  }
    
  public function deleteFromChapters($chapters)
  {
    $this->dao->exec('DELETE FROM comments WHERE chapters = '.(int) $chapters);
  }
  
  // Fonction permettant de passer à 1 le booleen moderate    
  public function moderate($id)
  {
    $this->dao->exec('UPDATE comments SET moderate = 1 WHERE id = '.(int) $id); 
  }
}