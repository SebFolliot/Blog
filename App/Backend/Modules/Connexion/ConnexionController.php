<?php
namespace App\Backend\Modules\Connexion;

use \Fram\BackController;
use \Fram\HTTPRequest;


class ConnexionController extends BackController
{
  public function executeIndex(HTTPRequest $request)
  {
    $this->page->addVar('title', 'Connexion');
    
    if ($request->postExists('login'))
    {
      $login = $request->postData('login');
      $password = $request->postData('password');
      
      if ($login == $this->app->config()->get('login') && $password == $this->app->config()->get('pass'))
      {
        $this->app->user()->setAuthenticated(true);
        $this->app->httpResponse()->redirect('.');
      }
      else
      {
        $this->app->user()->setFlash('<p class="text-warning" style="text-align: center"><strong><i class="fas fa-exclamation fa-spin"></i><span style="margin-left: 15px"></span>Le login ou le mot de passe est incorrect.</strong></p>');
      }
    }
 
    $manager = $this->managers->getManagerOf('Chapters');
    $chapters = $this->managers->getManagerOf('Chapters')->getUnique($request->getData('id'));
    $this->page->addVar('chapters', $chapters);
    $this->page->addVar('listeChapters', $manager->getList()); 
      
  }
}