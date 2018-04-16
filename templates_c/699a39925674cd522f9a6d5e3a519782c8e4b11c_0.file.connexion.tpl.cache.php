<?php
/* Smarty version 3.1.30, created on 2018-04-12 16:51:32
  from "/var/www/html/TLI/templates/connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf727411c853_02683234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699a39925674cd522f9a6d5e3a519782c8e4b11c' => 
    array (
      0 => '/var/www/html/TLI/templates/connexion.tpl',
      1 => 1523544267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acf727411c853_02683234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4230140015acf72740f1084_20715614';
?>
<!DOCTYPE html>
<div id=fomulaire_connexion>
	Souhaitez-vous vous connecter?</br>

	<form action="index.php?id_route=1&id_methode=2" method="post">
		Pseudo : <input type="text" name="login"><br />
		Mot de passe : <input type="password" name="pass"><br />
		<input type="submit" name="connexion" value="Connexion">
		<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
	</form>
	
</div>
		

<div id=bouton_inscription>
	Pas encore inscrit?<br />
	<form action="index.php?id_route=1&id_methode=5" method="post">
		<input type="submit" name="inscription" value="Inscription">

	</form>
</div>
<?php }
}
