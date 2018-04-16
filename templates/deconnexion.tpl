<!DOCTYPE HTML>

<div id=fromulaire_deconnexion>
	Bonjour {$login} <br />
	Souhaitez-vous vous deconnecter?
	<form action="index.php?id_route=1&id_methode=3" method="post">
		 <input type="submit" name="deconnexion" value="Deconnexion">
	</form>
	Souhaitez-vous vous désinscrire?
	<form action="index.php?id_route=1&id_methode=6" method="post">
		 <input type="submit" name="desinscription" value="Desinscription">
	</form>
</div>


