<?php
require_once('/var/www/html/TLI/INC/common/page.php') ;

/**
* Page d'acceuil
*/
class PageAccueil extends Page
{
	
	function __construct($name, $idPage, $secure )
	{
		parent::__construct($name, $idPage, $secure);
	}


	public function run($id_methode){

		$this->setTemplate('templates/page_accueil.tpl');
		$this->setVarName('title');
		$this->setVarValue('Good job !');
	}
}


?>
