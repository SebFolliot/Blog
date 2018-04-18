<?php
namespace Model;

use \Fram\Manager;
use \Entity\Comment;

abstract class CommentsManager extends Manager
{

  abstract protected function add(Comment $comment);
  

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
    

  abstract protected function modify(Comment $comment);
  

  abstract public function get($id);
    

  abstract public function delete($id);
    

  abstract public function deleteFromChapters($chapters);
}