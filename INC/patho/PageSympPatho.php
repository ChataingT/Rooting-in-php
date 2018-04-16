<?php

require_once('/var/www/html/TLI/INC/common/page.php') ;
require_once('/var/www/html/TLI/INC/user/connexion.php') ;
require_once('Patho.php') ;
require_once('Symp.php') ;

class PageSympPatho extends Page
{
	function __construct($name, $idPage, /*$exe,*/ $secure )
		{
			parent::__construct($name, $idPage, /*$exe,*/ $secure); 
		}

	 public function run($id_methode){
		
			switch($id_methode){
				case 1:
					if(isset($_SESSION['login'])){
						$resultat=rechercheBySymp();
						$this->setVarName('resultSymp'); // à vérifier la différence entre double et simple guillement. Je crois que ça ne change rien
						$this->setVarValue($resultat);
						$this->setTemplate('templates/pathologie.tpl');

						$resultat=rechercheIdSymp();
						$this->setVarName('resultIdSymp');
						$this->setVarValue($resultat);
						$this->setTemplate('templates/pathologie.tpl');

						break;
				}
				case 2:
					
					$resultat=rechercheByPatho();
					$this->setVarName('resultPatho');
					$this->setVarValue($resultat);
					$this->setTemplate('templates/pathologie.tpl');

					$resultat=rechercheIdPatho();
					$this->setVarName('resultIdPatho');
					$this->setVarValue($resultat);
					$this->setTemplate('templates/pathologie.tpl');
		
					break;
				
					//else {
						//echo ('Veuillez vous connecter');			
					//}	
	
				default: // Cas pour la sécurité
					$this->setTemplate('templates/pathologie.tpl');

			}
		}

}
?>
