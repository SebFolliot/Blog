<?php
namespace App\Frontend;

use \Fram\Application;

class FrontendApplication extends Application
{
  public function __construct()
  {
    parent::__construct();

    $this->name = 'Frontend';
  }

  public function run()
  {
      // Obtention du contrôleur
    $controller = $this->getController();
      // Exécution du contrôleur
    $controller->execute();
      // La page créée par le contrôleur est assignée à la réponse
    $this->httpResponse->setPage($controller->page());
      // Envoi de la réponse
    $this->httpResponse->send();
  }
}