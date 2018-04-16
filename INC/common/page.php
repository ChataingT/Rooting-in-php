<?php

abstract class Page {

	protected $name; // chaine de caractère : nom de la page
	protected $idPage; // identifiant de la page
	protected $secure; // boolean pour identifier les pages destiné aux utilisateurs connectés
	protected $template; // template à charger 
	protected $var_name; // nom des variable à remplacer
	protected $var_value; // valeurs des variable pour le remplacement 
	

	public function __construct($name, $idPage, $secure ){
		$this->name = $name;
		$this->idPage = $idPage;
		$this->secure = $secure;
		$this->var_name = array("test");
		$this->var_value = array("test");
	}

	public abstract function run($id_methode);
	// fonction à executer afin de faire les traitement et d'afficher la page


	public function isSecure(){
	/* renvoie un boolean :
		true-> page disponible aux utilisateurs connectés
		false -> page disponible à tout les utilisateurs
	*/ 
		return $this->secure;
	}

	public function getName(){
		return $this->name;
	}

	public function getIdPage(){
		return $this->idPage;
	}


	public function getTemplate(){
		return $this->template;
	}

	protected function setTemplate($template){
		$this->template = $template;
	}

	public function getVarName(){
		return $this->var_name;
	}

	protected function setVarName($name){
		array_push($this->var_name, $name);;
	}

	public function getVarValue(){
		return $this->var_value;
	}

	protected function setVarValue($value){
		array_push($this->var_value, $value);
	}
	/* Fonction pour trouver la page correspondant à l'id demander */
	public static function matchPage($array_page, $id_demander){
		for ($i = 0; $i < count($array_page); $i++){
			if ($array_page[$i]->getIdPage() == $id_demander){
				return $array_page[$i];
			}
		}
		return false;
	}




}

?>
