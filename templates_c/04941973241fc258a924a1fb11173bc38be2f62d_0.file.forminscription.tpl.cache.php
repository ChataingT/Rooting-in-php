<?php
/* Smarty version 3.1.30, created on 2018-04-12 15:29:05
  from "/var/www/html/TLI/templates/forminscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf5f21705397_22554371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04941973241fc258a924a1fb11173bc38be2f62d' => 
    array (
      0 => '/var/www/html/TLI/templates/forminscription.tpl',
      1 => 1523539739,
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
function content_5acf5f21705397_22554371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7724183265acf5f216fa123_39463283';
?>
<!DOCTYPE html>
<html>
	<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<body>

	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div>

		Inscription à l'espace membre :<br />
		<form action="index.php?id_route=1&id_methode=1" method="post">
			Login : <input type="text" name="login"><br />
			Mot de passe : <input type="password" name="pass"><br />
			Confirmation du mot de passe : <input type="password" name="pass_confirm" ><br />
			Adresse e-mail: <input type="text" name="email"/><br/>
			<input type="submit" name="inscription" value="Inscription">
		</form>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>

</html>
<?php }
}
