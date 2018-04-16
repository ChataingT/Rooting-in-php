<?php
/* Smarty version 3.1.30, created on 2018-04-12 17:17:53
  from "/var/www/html/TLI/templates/page_accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf78a19f1f78_54095563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f60d2b15a0a1f2999668de820c176de46b54a56' => 
    array (
      0 => '/var/www/html/TLI/templates/page_accueil.tpl',
      1 => 1523544577,
      2 => 'file',
    ),
    '3738d9ad62cfd1ff07e4c62b0651f9e6da8579ee' => 
    array (
      0 => '/var/www/html/TLI/templates/head.tpl',
      1 => 1523539450,
      2 => 'file',
    ),
    '2917c07ea99bc99d3316755e4fe1b70d3948d0a8' => 
    array (
      0 => '/var/www/html/TLI/templates/header.tpl',
      1 => 1523542833,
      2 => 'file',
    ),
    '2361a3742c647d22914e74f0d61b2dc557000ee3' => 
    array (
      0 => '/var/www/html/TLI/templates/menu_accueil.tpl',
      1 => 1523542367,
      2 => 'file',
    ),
    '6caef9005c098d574abafa9b8b3411e6689101c5' => 
    array (
      0 => '/var/www/html/TLI/templates/deconnexion.tpl',
      1 => 1523540992,
      2 => 'file',
    ),
    '7a34f994d54637c454b877dea1a31f0a2b91fbe7' => 
    array (
      0 => '/var/www/html/TLI/templates/footer.tpl',
      1 => 1523539597,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 10,
),true)) {
function content_5acf78a19f1f78_54095563 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<HTML>
	<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Acuponcture</title>

</head>

	
	<body>
	<header>
	<link rel="stylesheet" type="text/css" href="templates/header_footer.css" />
	


	<div id= background>
		<div id=title>
			<h1> Acuponcture </h1>
		</div>
		<div id=line2>
			<div id=menu_acceuil>
				<!DOCTYPE html>
<LINK rel="stylesheet" media="screen" type="text/css" title="index" href="templates/test.css" />
<ul id="navigation">
	<li class="bouton_gauche"><a href="index.php?id_route=0">Accueil</a></li>
	<li class="bouton_vertical"><a href="index.php?id_route=2"> Recherche</a></li>
	<li class="bouton_vertical"><a href="index.php?id_route=0"> About us</a></li>

</ul>


			</div>

			<div id=div_connect>
				 <!DOCTYPE HTML>

<div id=fromulaire_deconnexion>
	Bonjour papa <br />
	Souhaitez-vous vous deconnecter?
	<form action="index.php?id_route=1&id_methode=3" method="post">
		 <input type="submit" name="deconnexion" value="Deconnexion">
	</form>
	Souhaitez-vous vous désinscrire?
	<form action="index.php?id_route=1&id_methode=6" method="post">
		 <input type="submit" name="desinscription" value="Desinscription">
	</form>
</div>


 
			</div>
		</div>
	</div>
</header>


	<h1> Bienvenu sur le site Pro-Acupontceur </h1>

	<h2> Actualité </h2>
		<p>News du moment éventuellement à charger en php <br></p>

	<!DOCTYPE html>
<link rel="stylesheet" href="header_footer.css" />
<footer>
	<div id=background>
	<p>Posted by: Team Herisson</p>
	<p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
	</div>
</footer>



	</body>



		
</HTML>
<?php }
}
