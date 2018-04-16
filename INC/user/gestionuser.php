<?php
require_once('/var/www/html/TLI/INC/common/page.php') ;
require_once('authentification.php') ;
require_once ('connexion.php') ;
require_once('deconnexion.php') ;
require_once('Desinscription.php') ;

class Gestionuser extends Page
{
	function __construct($name, $idPage, $secure )
		{
			parent::__construct($name, $idPage, $secure);
		}

	 public function run($id_methode){
		switch($id_methode)
		{
			case 1:
				$message=inscription(); 
				$this->setTemplate('templates/reussite_inscription.tpl');  
				$this->setVarValue($message);
				$this->setVarName('message');
				break;
			case 2:
				
				$message=connexion();
				$this->setVarValue($message);
				$this->setVarName('message');
				$this->setTemplate('templates/page_accueil.tpl');
				
				break;
			case 3:
				$resussite = deconnexion();
				$this->setTemplate('templates/page_accueil.tpl');  
				break;
			case 4:
				$message=desinscription();
				$this->setVarName('message');
				$this->setTemplate('templates/reussite_inscription.tpl');  
				$this->setVarValue($message);
				break;
			case 5:
				$this->setTemplate('templates/forminscription.tpl');
				break;
				
			case 6:
				$this->setTemplate('templates/formdesinscription.tpl');
				break;
			
			default:
				break;
		}
	}

}

