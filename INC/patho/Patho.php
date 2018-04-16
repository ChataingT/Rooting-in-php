<?php

require_once('bd.php');

function rechercheByPatho (){

	$resultat = null;
	$maBD = new BD();

	$mot = utf8_encode ($_POST['mot']);

	$resultat = $maBD->requete("SELECT `desc` FROM patho WHERE `desc` LIKE ?;", array('%'.$mot.'%')); // requete
	
	return $resultat;

}

function rechercheIdPatho (){

	$resultat = null; //Retourne la liste des Id des pathologies recherchées
	
	$maBD = new BD();

	$mot = utf8_encode ($_POST['mot']);

	$resultat = $maBD->requete("SELECT distinct s.desc FROM symptome s JOIN symptPatho sp ON s.ids = sp.ids JOIN patho p ON sp.idp = p.idp WHERE p.desc LIKE ?;", array('%'.$mot.'%')); 

	return $resultat;

}


?>


