<!DOCTYPE html>
<html>
	{include file = "head.tpl"}
	
	<body>

	{include file = "header.tpl"}
	<div>

		Inscription à l'espace membre :<br />
		<form action="index.php?id_route=1&id_methode=1" method="post">
			Login : <input type="text" name="login"><br />
			Mot de passe : <input type="password" name="pass"><br />
			Confirmation du mot de passe : <input type="password" name="pass_confirm" ><br />
			Adresse e-mail: <input type="text" name="email"/><br/>
			<input type="submit" name="inscription" value="Inscription">
		</form>
	</div>
	{include file = "footer.tpl"}
	</body>

</html>
