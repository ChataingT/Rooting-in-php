<?php
/* Smarty version 3.1.30, created on 2018-04-12 16:00:13
  from "/var/www/html/TLI/templates/formdesinscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf666d9fc936_46675097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53ce419c6f6374f09896166829a47363e8d2eb91' => 
    array (
      0 => '/var/www/html/TLI/templates/formdesinscription.tpl',
      1 => 1523540199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5acf666d9fc936_46675097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4200695845acf666d9f1c29_15941902';
?>
<!DOCTYPE html>
<html>

	<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<body>
	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		
		<form action="index.php?id_route=1&id_methode=4"  method="post">
			Login : <input type="text" name="login"><br />
			Mot de passe : <input type="password" name="pass"><br />
			<input type="submit" name="Se desinscrire value="Se desinscrire">
		</form>

	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>
</html>
<?php }
}
