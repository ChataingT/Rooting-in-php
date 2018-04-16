<?php
/* Smarty version 3.1.30, created on 2018-04-12 16:41:58
  from "/var/www/html/TLI/templates/pathologie.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf7036a80095_96908515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35e03ba2758f43c55c67738be99addcde7a564b1' => 
    array (
      0 => '/var/www/html/TLI/templates/pathologie.tpl',
      1 => 1523541597,
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
function content_5acf7036a80095_96908515 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   <!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Acuponcture</title>

</head>


    <body role= "document" onload ="getTotal(document.getElementById(formulaire)); getPrix(document.getElementById(formulaire))">
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
	Bonjour titi <br />
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


        <h1 role="banner">Les différentes pathologies </h1>
	
    	<content>
		<ul>
			<li><h2> Qu'est ce qu'une pathologie: </h2></li>
		</ul>

			<p> Le terme « pathologie » a été étendu et est devenu un synonyme de maladie et permet aussi de réaliser un inventaire de celles-ci. On parle ainsi de pathologies pulmonaires ou pathologies cardiaques qui regroupent toutes les maladies atteignant ces organes comme les pathologies cardio-vasculaires ou rhumatologiques, mais également de pathologies infectieuses, ou auto-immunes pour caractériser des familles de maladie partageant un même mécanisme.
			</p>

			
	
		 <h2> Recherche de pathologies: </h2>
			<div id ="Formulaire1">
	
				<form action="index.php?id_route=2&id_methode=2" method="post">

					Recherche : <input type="text" name= "mot" placeholder="Pathologie recherchés ?" required /> <br />

				<input type = "submit" name ="recherche" value ="Valider">
				</form>

			</div>

		<h3> Résultats</h3>

			<div>
									PAS DE RESULTATS
							</div>

		<ul>
			<li><h2> Qu'est ce qu'un symptôme: </h2></li>
		</ul>

			<p> Le symptôme est un signe présent au niveau de l'organisme en réponse à une maladie. Une maladie est en général responsable de plusieurs symptômes, qui peuvent être identiques d'une pathologie à l'autre, d'où l'intérêt de recouper tous les symptômes et d'utiliser des examens dits complémentaires pour permettre une étude plus précise de ceux-ci et de leurs causes suspectées.

			</p>

		<h2> Recherche de symptômes: </h2>
			<div id ="Formulaire2">
				<form action="index.php?id_route=2&id_methode=1" method="post">

					Recherche : <input type="text" name= "mot" placeholder="Symptômes recherchés ?" required /> <br />

				<input type = "submit" name ="recherche" value ="Valider">
				</form>

			</div>

		<h3> Résultats</h3>

			<div>
			
											<ul>1 . Agitation </ul>
						<h5> Résultats des pathologies liés à ces symptomes</h5>
													
							<li>1 . fu gros intestin plein </li><!--parcours ligne-->
													
							<li>2 . Pathologie du Yang Qiao Mai </li><!--parcours ligne-->
													
							<li>3 . Pathologie du Yin Qiao Mai </li><!--parcours ligne-->
						
											<ul>2 . Agitation diurne </ul>
						<h5> Résultats des pathologies liés à ces symptomes</h5>
													
							<li>1 . fu gros intestin plein </li><!--parcours ligne-->
													
							<li>2 . Pathologie du Yang Qiao Mai </li><!--parcours ligne-->
													
							<li>3 . Pathologie du Yin Qiao Mai </li><!--parcours ligne-->
						
											<ul>3 . Agitation nocturne </ul>
						<h5> Résultats des pathologies liés à ces symptomes</h5>
													
							<li>1 . fu gros intestin plein </li><!--parcours ligne-->
													
							<li>2 . Pathologie du Yang Qiao Mai </li><!--parcours ligne-->
													
							<li>3 . Pathologie du Yin Qiao Mai </li><!--parcours ligne-->
						
								
			</div>



    </content>
	<!DOCTYPE html>
<link rel="stylesheet" href="header_footer.css" />
<footer>
	<div id=background>
	<p>Posted by: Team Herisson</p>
	<p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
	</div>
</footer>



    </body>



</html>
<?php }
}
