<?php
namespace App\Backend\Modules\Chapters;
 
use \Fram\BackController;
use \Fram\HTTPRequest;
use \Entity\Chapters;
use \Entity\Comment;
use \FormBuilder\CommentFormBuilder;
use \FormBuilder\ChaptersFormBuilder;
use \Fram\FormHandler;
 
class ChaptersController extends BackController
{
  public function executeDelete(HTTPRequest $request)
  {
    $chaptersId = $request->getData('id');
 
    $this->managers->getManagerOf('Chapters')->delete($chaptersId);
    $this->managers->getManagerOf('Comments')->deleteFromChapters($chaptersId);
 
    $this->app->httpResponse()->redirect('.');
  }

  public function executeIndex(HTTPRequest $request)
  {
 
    $this->page->addVar('title', 'Gestion des chapitres');
 
    $manager = $this->managers->getManagerOf('Chapters');
 
    $this->page->addVar('listeChapters', $manager->getList());
    $this->page->addVar('nombreChapters', $manager->count());  

  }
 
 
  public function executeInsert(HTTPRequest $request)
  {
    
    $manager = $this->managers->getManagerOf('Chapters');
 
    $this->processForm($request);
      
    $chapters = $this->managers->getManagerOf('Chapters')->getUnique($request->getData('id'));
 
    $this->page->addVar('title', 'Ajout d\'un chapitre');
    $this->page->addVar('chapters', $chapters);
    $this->page->addVar('listeChapters', $manager->getList());       
    
  }
 
  public function executeUpdate(HTTPRequest $request)
  {
    $manager = $this->managers->getManagerOf('Chapters');  
    $this->processForm($request);
    
    $chapters = $this->managers->getManagerOf('Chapters')->getUnique($request->getData('id'));  
 
    $this->page->addVar('title', 'Modification d\'un chapitre');
    $this->page->addVar('chapters', $chapters);
    $this->page->addVar('listeChapters', $manager->getList());  
  }
 

  public function processForm(HTTPRequest $request)
  {
    if ($request->method() == 'POST')
    {
      $chapters = new Chapters([
        'auteur' => $request->postData('auteur'),
        'titre' => $request->postData('titre'),
        'contenu' => $request->postData('contenu')
      ]);
 
      if ($request->getExists('id'))
      {
        $chapters->setId($request->getData('id'));
      }
    }
    else
    {
      // L'identifiant du chapitre est transmis si on veut le modifier
      if ($request->getExists('id'))
      {
        $chapters = $this->managers->getManagerOf('Chapters')->getUnique($request->getData('id'));
      }
      else
      {
        $chapters = new Chapters;
      }
    }
 
    $formBuilder = new ChaptersFormBuilder($chapters);
    $formBuilder->build();
 
    $form = $formBuilder->form();
 
    $formHandler = new FormHandler($form, $this->managers->getManagerOf('Chapters'), $request);
 
    if ($formHandler->process())
    {
      $this->app->user()->setFlash($chapters->isChapter() ? 'Le chapitre a bien été ajouté !' : 'Le chapitre a bien été modifié !');
 
      $this->app->httpResponse()->redirect('/admin/');
    }
 
    $this->page->addVar('form', $form->createView());
  }
    
    // Annuler le signalement d'un commentaire
    public function executeDeleteReport(HTTPRequest $request)
    {
            $commentId = $request->getData('id');
            $this->managers->getManagerOf('Comments')->deleteReport($commentId);
            $this->app->user()->setFlash('<p id="info_delete_report" style="text-align:center"></p>'); 
            $this->app->httpResponse()->redirect('/admin/');
    }
    
    // Modérer un commentaire
    public function executeModerateComment(HTTPRequest $request)
    {
            $commentId = $request->getData('id');
            $this->managers->getManagerOf('Comments')->moderate($commentId);
            $this->app->user()->setFlash('<p id="info_moderate" style="text-align:center"></p>'); 
            $this->app->httpResponse()->redirect('/admin/');
    }
}