<?php

require '../smarty/libs/Smarty.class.php';

require 'INC/accueil/accueil.php' ;
require 'INC/patho/PageSympPatho.php' ;
require 'INC/user/gestionuser.php' ;



// Détéction de la connection d'un utilisateur  et assignement de la template associé

/*Test si l'utilisateur est connecté et charge le bon template associé
*
*/
function isConnect($smarty) {
	//print_r($id_session);
	if (isset($_SESSION['id']) AND isset($_SESSION['login'])) 
	{
		//$tplConnect = 'connexion';

		$smarty->assign('tplConnect', 'deconnexion.tpl');
		$smarty->assign('login',$_SESSION['login']);
	}
	else 
	{
		//$tplConnect = 'deconnexion';

		$smarty->assign('tplConnect', 'connexion.tpl');

	}
}

/* Récupère l'id_route à travers a méthode GET pour le routage
*Return : Integer
*/
function route(){
	$idNbr = 0;
	if (isset($_GET['id_route'])){
		$id_test = $_GET['id_route'];
		try {
			$idNbr = intval($id_test);
		}
		catch(Exception $e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
		}
	}
	return $idNbr;

}

/* Recupère l'id_methode à travers la méthode GET pour le routage
*Return : Integer
*/
function methode(){
	$idNbr = 0;
	if (isset($_GET['id_methode'])){
		$id_test = $_GET['id_methode'];
		
		try {
			$idNbr = intval($id_test);
		}
		catch(Exception $e){
			echo 'Exception reçue : ',  $e->getMessage(), "\n";
		}
	}
	return $idNbr;

}

function main(){

	$smarty = new Smarty();

	//$smarty->force_compile = true;
	$smarty->debugging = true; // true -> fenêtre avec la liste des variable assginées par smarty
	$smarty->caching = true; // utilisation du cache
	$smarty->cache_lifetime = 10; // vie du cache


	// déclaration des différentes pages
	$page_accueil = new PageAccueil("page_accueil", 0, false);
	$page_patho = new PageSympPatho("page_patho", 2,  false);
	$page_user = new GestionUser("page_user", 1,  false);
	// déclaration de la liste de pages
	$list_pages = array();
	array_push($list_pages,$page_accueil, $page_patho, $page_user);

	session_start();
	$smarty->assign('message','');
//	isConnect($smarty); // teste de connexion
	$id_route = route(); // récupération de l'id pour la route
	$id_methode = methode(); //récupère l'id de la méthode appelée
	$currentPage = Page::matchPage($list_pages, $id_route); // récupération de la page rechercher
	if ($currentPage != false){
		$currentPage->run($id_methode); // fonction main de la page

		if (count($currentPage->getVarName()) != 0){ // si des variables smarty sont a assigner
			for ($i=0; $i < count($currentPage->getVarName()); $i++) {
				$smarty->assign($currentPage->getVarName()[$i],$currentPage->getVarValue()[$i]); // assignation des variables smarty
			}
		}
	isConnect($smarty); // teste de connexion
		$smarty->display($currentPage->getTemplate()); // génération du template

	}
	else{
		print_r("Erreur 404 (id non trouver" + $idDemander + ")");

	}


}

main();

?>
