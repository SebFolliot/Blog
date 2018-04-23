<?php

namespace FormBuilder;

use \Fram\FormBuilder;
use \Fram\StringField;
use \Fram\TextField;
use \Fram\MaxLengthValidator;
use \Fram\NotNullValidator;

class CommentFormBuilder extends FormBuilder
{
  public function build()
  {
    $this->form->add(new StringField([
        'label' => 'Votre pseudo :',
        'name' => 'auteur',
        'maxLength' => 30,
        'validators' => [
          new MaxLengthValidator('<p class="text-warning">L\'auteur spécifié est trop long (30 caractères maximum)</p>', 30),
          new NotNullValidator('<p class="text-warning">Merci d\'indiquer votre pseudo</p>'),
        ],
       ]))
       ->add(new TextField([
         'label' => 'Votre message :',
        'name' => 'contenu',
        'rows' => 5,
        'cols' => 50,
        'validators' => [
          new NotNullValidator('<p class="text-warning">Merci de laisser un commentaire avant de valider</p>'),
        ],
       ]));
  }
}
