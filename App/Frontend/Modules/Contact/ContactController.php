<?php
namespace App\Frontend\Modules\Contact;

use \Fram\BackController;
use \Fram\HTTPRequest;
    
class ContactController extends BackController
{
    
    public function executeIndex(HTTPRequest $request)
  {
    
    $recipient = 'sebastienfolliot@yahoo.fr';

   // on teste si le formulaire a été soumis
   if (!isset($_POST['send']))
   {
	// formulaire non envoyé
	echo '<p>Vous devez envoyer le formulaire</p>'."\n";
   }
   else
   {
	
   $name = $request->postData('name');
   $message = $request->postData('message');
   $object = $request->postData('subject');
   $sender = $request->postData('email');
    
   if (($name != '') && ($sender != '') && ($object != '') && ($message != '') && preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $sender))
	{
   		// les 4 variables sont remplies, on génère puis envoie le mail
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'From:'.htmlspecialchars($sender) . "\r\n" .
				'Reply-To:'. $recipient. "\r\n" .
				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
				'Content-Disposition: inline'. "\r\n" .
				'Content-Transfer-Encoding: 7bit'." \r\n" .
				'X-Mailer:PHP/'.phpversion();
   		
		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('<br>','',$message);
		$message = str_replace('<br />','',$message);
		$message = str_replace("&lt;","<",$message);
		$message = str_replace("&gt;",">",$message);
		$message = str_replace("&amp;","&",$message);
        
        mail($recipient, $object, $message, $headers);
        $this->app->user()->setFlash('<p id="email_ok" style="text-align:center"></p>');
        
	}  
   	else
	{
		// une des variables est vide
		$this->app->user()->setFlash('<p id="email_ko" style="text-align:center"></p>'."\n");
	};
}; 
              
    $this->page->addVar('title', 'Contact');
        
    $chapters = $this->managers->getManagerOf('Chapters')->getUnique($request->getData('id'));  
    $nombreChapters = $this->app->config()->get('nombre_chapters');
    $manager = $this->managers->getManagerOf('Chapters');
    $listeChapters = $manager->getList(0, $nombreChapters);  
    $this->page->addVar('listeChapters', $listeChapters);
    $this->page->addVar('chapters', $chapters);
    
  }
}
