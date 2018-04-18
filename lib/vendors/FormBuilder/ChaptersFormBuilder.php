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
        'maxLength' => 30,
        'validators' => [
          new MaxLengthValidator('L\'auteur spécifié est trop long (30 caractères maximum)', 30),
          new NotNullValidator('Merci de spécifier l\'auteur du chapitre'),
        ],
       ]))
       ->add(new StringField([
        'label' => 'Titre',
        'name' => 'titre',
        'maxLength' => 100,
        'validators' => [
          new MaxLengthValidator('Le titre spécifié est trop long (100 caractères maximum)', 100),
          new NotNullValidator('Merci de spécifier le titre du chapitre'),
        ],
       ]))
       ->add(new TextField([
        'label' => 'Contenu',
        'name' => 'contenu',
        'rows' => 8,
        'cols' => 60,
        'validators' => [
          new NotNullValidator('Merci de spécifier le contenu du chapitre'),
        ],
       ]));
  }
}
