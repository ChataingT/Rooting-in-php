<?php
/* Smarty version 3.1.30, created on 2018-04-12 15:49:58
  from "/var/www/html/TLI/templates/deconnexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf6406397273_63386277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6caef9005c098d574abafa9b8b3411e6689101c5' => 
    array (
      0 => '/var/www/html/TLI/templates/deconnexion.tpl',
      1 => 1523540992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acf6406397273_63386277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3130428295acf640638e131_52389156';
?>
<!DOCTYPE HTML>

<div id=fromulaire_deconnexion>
	Bonjour <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 <br />
	Souhaitez-vous vous deconnecter?
	<form action="index.php?id_route=1&id_methode=3" method="post">
		 <input type="submit" name="deconnexion" value="Deconnexion">
	</form>
	Souhaitez-vous vous désinscrire?
	<form action="index.php?id_route=1&id_methode=6" method="post">
		 <input type="submit" name="desinscription" value="Desinscription">
	</form>
</div>


<?php }
}
