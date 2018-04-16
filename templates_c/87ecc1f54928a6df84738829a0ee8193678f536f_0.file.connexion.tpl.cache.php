<?php
/* Smarty version 3.1.30, created on 2018-03-16 17:36:01
  from "/var/www/html/tli/templates/connexion.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aabf271265af9_04856869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87ecc1f54928a6df84738829a0ee8193678f536f' => 
    array (
      0 => '/var/www/html/tli/templates/connexion.tpl',
      1 => 1521216266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aabf271265af9_04856869 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15023315055aabf271263f69_50755148';
?>
<div id=fomulaire_connexion>
Souhaitez-vous vous connecter?</br>

	<form action="connexion.php" method="post">
		Pseudo : <input type="text" name="login"><br />
		Mot de passe : <input type="password" name="pass"><br />
		<input type="submit" name="connexion" value="Connexion">
	</form>

Pas encore inscrit?</br>
	<form action="inscription.php" method="post">
		<input type="submit" name="inscription" value="Inscription">
	</form>
	
</div>
<?php }
}
