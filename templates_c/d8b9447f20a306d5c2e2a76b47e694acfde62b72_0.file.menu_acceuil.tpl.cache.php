<?php
/* Smarty version 3.1.30, created on 2018-03-16 16:34:55
  from "/var/www/html/tli/templates/menu_acceuil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aabe41f4f9a13_33145502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8b9447f20a306d5c2e2a76b47e694acfde62b72' => 
    array (
      0 => '/var/www/html/tli/templates/menu_acceuil.tpl',
      1 => 1521214492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aabe41f4f9a13_33145502 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '952887785aabe41f4e85c1_01053113';
?>

<LINK rel="stylesheet" media="screen" type="text/css" title="index" href="templates/test.css" />
<ul id="navigation">
	<li class="bouton_gauche"><a href="index.php">Accueil</a></li>
	<li class="bouton_gauche"><a href="/tli/page1.html">Recherche</a>
		<ul id="menu_vertical">
			<li class="bouton_vertical"><a href="/tli/page2.php"> ... par symptôme</li>
			<li class="bouton_vertical"><a href="#"> ... par pathologie</li>
		</ul>

		</li>
	<li class="bouton_gauche"><a href="#">Livre d'or</a></li>
	<li class="bouton_droite"><a href="page_">Se connecter</a></li>
	<li class="bouton_droite"><a href="#">About us</a></li>
</ul>

<?php }
}
