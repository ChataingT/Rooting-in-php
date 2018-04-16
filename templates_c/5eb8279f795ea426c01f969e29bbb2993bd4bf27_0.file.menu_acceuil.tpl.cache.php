<?php
/* Smarty version 3.1.30, created on 2018-04-05 15:04:00
  from "/var/www/html/TLI/templates/menu_acceuil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac61ec0a66582_13310578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5eb8279f795ea426c01f969e29bbb2993bd4bf27' => 
    array (
      0 => '/var/www/html/TLI/templates/menu_acceuil.tpl',
      1 => 1522933436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac61ec0a66582_13310578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15584382275ac61ec0a61f23_07105472';
?>

<LINK rel="stylesheet" media="screen" type="text/css" title="index" href="templates/test.css" />
<ul id="navigation">
	<li class="bouton_gauche"><a href="index.php?id_route=0">Accueil</a></li>

		<ul id="menu_vertical">
			<li class="bouton_vertical"><a href="index.php?id_route=2"> Recherche</li>
			<li class="bouton_vertical"><a href="index.php?id_route=0"> About us</li>
		</ul>

		</li>
</ul>

<?php }
}
