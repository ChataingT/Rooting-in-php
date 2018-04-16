<!DOCTYPE html>
<html>

	{include file = "head.tpl"}
	<body>
	{include file = "header.tpl"}
		
		<form action="index.php?id_route=1&id_methode=4"  method="post">
			Login : <input type="text" name="login"><br />
			Mot de passe : <input type="password" name="pass"><br />
			<input type="submit" name="Se desinscrire value="Se desinscrire">
		</form>

	{include file = "footer.tpl"}
	</body>
</html>
