<?php

namespace FormBuilder;

use \Fram\FormBuilder;
use \Fram\StringField;
use \Fram\TextField;
use \Fram\MaxLengthValidator;
use \Fram\NotNullValidator;

class ChaptersFormBuilder extends FormBuilder
{
  public function build()
  {
    $this->form->add(new StringField([
        'label' => 'Auteur',
        'name' => 'auteur',
        'value' => 'Jean Forteroche',
        'maxLength' => 30,
        'validators' => [
          new MaxLengthValidator('L\'auteur indiqué est trop long (30 caractères maximum)', 30),
          new NotNullValidator('Merci d\'indiquer l\'auteur du chapitre'),
        ], 
       ]))
       ->add(new StringField([
        'label' => 'Titre',
        'name' => 'titre',
        'maxLength' => 100,
        'validators' => [
          new MaxLengthValidator('Le titre est trop long (100 caractères maximum)', 100),
          new NotNullValidator('Merci de donner un titre au chapitre'),
        ],
       ]))
       ->add(new TextField([
        'label' => 'Contenu',
        'name' => 'contenu',
        'id' => 'jftextarea',
        'rows' => 8,
        'cols' => 60,
        'validators' => [
          new NotNullValidator('Merci d\'apporter un contenu au chapitre'),
        ],
       ]));
  }
}
