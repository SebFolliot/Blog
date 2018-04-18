<?php
namespace Model;

use \Fram\Manager;
use \Entity\Chapters;

abstract class ChaptersManager extends Manager
{
  
  abstract public function getList($debut = -1, $limite = -1);
    
   
  abstract public function getUnique($id);
    

  abstract public function count();
  

  abstract protected function add(Chapters $chapter);
  

  public function save(Chapters $chapters)
  {
    if ($chapters->isValid())
    {
      $chapters->isChapter() ? $this->add($chapters) : $this->modify($chapters);
    }
    else
    {
      throw new \RuntimeException('Le chapitre doit être validé pour être enregistré');
    }
  }
    

        abstract protected function modify(Chapters $chapters);
    

    
        abstract public function delete($id);
}
