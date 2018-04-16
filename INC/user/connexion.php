<?php
//$id_session;
//$login_session;
function connexion ()

{


	try
	{

		$bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'root', 'tp');


	}

	catch(Exception $e)
	{
		// En cas d'erreur, on affiche un message et on arrête tout
		    die('Erreur : '.$e->getMessage());
	}

	/* Récupération des variables issues du formulaire par la méthode post*/
	 $login = $_POST['login'];
	 $pass = $_POST['pass'];

	// Récupération dans la bdd de l'utilisateur et de son pass haché
	
	
	$req = $bdd -> prepare("SELECT `id`,`login`,`pass` FROM `utilisateurs` WHERE `login` = '$login'");
	$req ->execute();	
	$resultat = $req->fetch();
	
	
	// Comparaison du pass envoyé via le formulaire avec la base
		
	if (!$resultat)
	{
		$message='Mauvais identifiant !';

	}
	else
	{
		if ($pass==$resultat['pass']) {
		

		    $_SESSION['id'] = $resultat['id'];
		    $_SESSION['login'] = $login;
		    $message= 'Vous êtes connecté !';
			$id_session=$_SESSION['id'];
			$login_session= $_SESSION['login'];

		
		}
		
		else {
		    $message= 'Mauvais Mot de passe !';

		}
	}
	return $message;
}
?>
