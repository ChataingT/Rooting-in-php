<?php
/* Smarty version 3.1.30, created on 2018-04-10 18:20:03
  from "/var/www/html/TLI/templates/page_acceuil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acce43310d539_33670745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6088c545af9311b4d4533941d0ea198506042a6f' => 
    array (
      0 => '/var/www/html/TLI/templates/page_acceuil.tpl',
      1 => 1522931685,
      2 => 'file',
    ),
    '2917c07ea99bc99d3316755e4fe1b70d3948d0a8' => 
    array (
      0 => '/var/www/html/TLI/templates/header.tpl',
      1 => 1523358210,
      2 => 'file',
    ),
    '5eb8279f795ea426c01f969e29bbb2993bd4bf27' => 
    array (
      0 => '/var/www/html/TLI/templates/menu_acceuil.tpl',
      1 => 1522933436,
      2 => 'file',
    ),
    '699a39925674cd522f9a6d5e3a519782c8e4b11c' => 
    array (
      0 => '/var/www/html/TLI/templates/connexion.tpl',
      1 => 1523358189,
      2 => 'file',
    ),
    '7a34f994d54637c454b877dea1a31f0a2b91fbe7' => 
    array (
      0 => '/var/www/html/TLI/templates/footer.tpl',
      1 => 1522928294,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 10,
),true)) {
function content_5acce43310d539_33670745 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<HTML>

	<!DOCTYPE html>
<HEAD>
	<link rel="stylesheet" type="text/css" href="templates/header_footer.css" />
	
	<meta charset="utf-8">
	<TITLE>Acuponcture</TITLE>

	<div id= background>
		<div id=title>
			<h1> Acuponcture </h1>
		</div>

		<div id=menu_acceuil>
			
<LINK rel="stylesheet" media="screen" type="text/css" title="index" href="templates/test.css" />
<ul id="navigation">
	<li class="bouton_gauche"><a href="index.php?id_route=0">Accueil</a></li>

		<ul id="menu_vertical">
			<li class="bouton_vertical"><a href="index.php?id_route=2"> Recherche</li>
			<li class="bouton_vertical"><a href="index.php?id_route=0"> About us</li>
		</ul>

		</li>
</ul>


		</div>

		<div id=div_connect>
			 <!DOCTYPE html>

	Connexion a l'espace membre :
<div id=fomulaire_connexion>
	Souhaitez-vous vous connecter?</br>

	<form action="index.php?id_route=1&id_methode=2" method="post">
		Pseudo : <input type="text" name="login"><br />
		Mot de passe : <input type="password" name="pass"><br />
		<input type="submit" name="connexion" value="Connexion">
	</form>

	Pas encore inscrit?
	<form action="index.php?id_route=1&id_methode=5" method="post">
		<input type="submit" name="inscription" value="Inscription">

	</form>
</div>
		


 
		</div>
	</div>
</HEAD>

	<BODY>

	<H1> Bienvenu sur le site Pro-Acupontceur </H1>

	<H2> Actualité </H2>
		<P1>News du moment éventuellement à charger en php <br></P1>

	<H1>Good job !</H1>

	</BODY>

	

		
</HTML>
<?php }
}
