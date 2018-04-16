<?php
/* Smarty version 3.1.30, created on 2018-04-05 14:34:48
  from "/var/www/html/TLI/templates/page_acceuil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac617e83dddd4_06649476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6088c545af9311b4d4533941d0ea198506042a6f' => 
    array (
      0 => '/var/www/html/TLI/templates/page_acceuil.tpl',
      1 => 1522931685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ac617e83dddd4_06649476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10543387475ac617e83d6d81_21168194';
?>
<!DOCTYPE html>
<HTML>

	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<BODY>

	<H1> Bienvenu sur le site Pro-Acupontceur </H1>

	<H2> Actualité </H2>
		<P1>News du moment éventuellement à charger en php <br></P1>

	<H1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</H1>

	</BODY>

	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		
</HTML>
<?php }
}
