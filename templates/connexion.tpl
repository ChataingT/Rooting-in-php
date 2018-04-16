<!DOCTYPE html>
<div id=fomulaire_connexion>
	Souhaitez-vous vous connecter?</br>

	<form action="index.php?id_route=1&id_methode=2" method="post">
		Pseudo : <input type="text" name="login"><br />
		Mot de passe : <input type="password" name="pass"><br />
		<input type="submit" name="connexion" value="Connexion">
		<p>{$message}</p>
	</form>
	
</div>
		

<div id=bouton_inscription>
	Pas encore inscrit?<br />
	<form action="index.php?id_route=1&id_methode=5" method="post">
		<input type="submit" name="inscription" value="Inscription">

	</form>
</div>
