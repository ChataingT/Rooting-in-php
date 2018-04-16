
<?php


require_once('bd.php');

function rechercheBySymp(){

	$resultat = null;
	$maBD = new BD();


	$mot = utf8_encode ($_POST['mot']);

	$resultat = $maBD->requete("SELECT `desc` FROM symptome WHERE `desc` LIKE ?;", array('%'.$mot.'%')); // requete
	
	return $resultat;

}


function rechercheIdSymp (){

	$resultat = null; //Retourne la liste des Id des pathologies recherchées
	
	$maBD = new BD();

	$mot = utf8_encode ($_POST['mot']);

	$resultat = $maBD->requete("SELECT distinct p.desc FROM patho p JOIN symptPatho sp ON p.idp = sp.idp JOIN symptome s ON sp.ids = s.ids WHERE s.desc LIKE ?;", array('%'.$mot.'%')); 

	return $resultat;

}
?>
