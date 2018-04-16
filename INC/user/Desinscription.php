<?php
function desinscription ()
{	

	/* Récupération des variables issues du formulaire par la méthode post*/
	$login = $_POST['login'];
	$pass = $_POST['pass'];

	if(!empty($login and $pass))
	{
		try
		{
			$connexion=new PDO('mysql:host=localhost;dbname=user', 'root', 'tp');
			$message= 'Connexion reussie';

		}
		catch (PDOException $event)
		{
			die ('Attention erreur : ' .$event->getMessage());
		}

		
		$enlever="DELETE FROM `utilisateurs` WHERE `login` = '$login'";
		$enlever=$connexion->exec($enlever);
		

		if ($enlever)
		{
			$message=  'Desinscription effectuee';
		}
		else{
			$message=  'Desinscription echouee, login ou mot de passe incorrect';
		}
			
						
	}

	else
	{
		$message=  'Les champs Pseudo et Mot de passe doivent être remplis.';
	}
	return $message;
}
?>
