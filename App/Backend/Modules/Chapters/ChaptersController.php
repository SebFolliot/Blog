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
 
    $this->app->user()->setFlash('Le chapitre a bien été supprimé !');
 
    $this->app->httpResponse()->redirect('.');
  }
 
  public function executeDeleteComment(HTTPRequest $request)
  {
    $this->managers->getManagerOf('Comments')->delete($request->getData('id'));
 
    $this->app->user()->setFlash('Le commentaire a bien été supprimé !');
 
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
    $this->processForm($request);
 
    $this->page->addVar('title', 'Ajout d\'un chapitre');
  }
 
  public function executeUpdate(HTTPRequest $request)
  {
    $this->processForm($request);
 
    $this->page->addVar('title', 'Modification d\'un chapitre');
  }
 
  public function executeUpdateComment(HTTPRequest $request)
  {
    $this->page->addVar('title', 'Modification d\'un commentaire');
 
    if ($request->method() == 'POST')
    {
      $comment = new Comment([
        'id' => $request->getData('id'),
        'auteur' => $request->postData('auteur'),
        'contenu' => $request->postData('contenu')
      ]);
    }
    else
    {
      $comment = $this->managers->getManagerOf('Comments')->get($request->getData('id'));
    }
 
    $formBuilder = new CommentFormBuilder($comment);
    $formBuilder->build();
 
    $form = $formBuilder->form();
 
    $formHandler = new FormHandler($form, $this->managers->getManagerOf('Comments'), $request);
 
    if ($formHandler->process())
    {
      $this->app->user()->setFlash('Le commentaire a bien été modifié');
 
      $this->app->httpResponse()->redirect('/admin/');
    }
 
    $this->page->addVar('form', $form->createView());
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
}