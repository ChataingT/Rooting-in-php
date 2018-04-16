<?php

function inscription ()
{
	/* Récupération des variables issues du formulaire par la méthode post*/
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$pass_confirm = $_POST['pass_confirm'];
	$email = $_POST['email'];
	$inscriptionok = false;

	if(!empty($login and $pass and $pass_confirm and $email))
	{
		try
		{
			$connexion=new PDO('mysql:host=localhost;dbname=user', 'root', 'tp');
		}
		catch (PDOException $event)
		{
			die ('Attention erreur : ' .$event->getMessage());
		}

		if (filter_var($email, FILTER_VALIDATE_EMAIL) ) 
		{
			
			if ($pass == $pass_confirm)
			{
				
				$inserer="INSERT INTO utilisateurs (login, pass, email) VALUES ('$login','$pass','$email')";
				$inserer=$connexion->exec($inserer);
				if ($inserer)
				{
					$inscriptionok=true;
				}
				else 
				{
					$message= "Pseudo deja utilise";
				}	
			}
			else
			{
				$message=  "Mots de passe differents";
			}	
		}
		else 
		{
			$message= "Cette adresse email est consideree comme non valide.";
		}	
					
	}

	else
	{
		$message= "Tous les champs doivent être remplis.";
	}
	if ($inscriptionok){
		$message="Vous etes inscrit!";
	}
	return $message;
}
?>
