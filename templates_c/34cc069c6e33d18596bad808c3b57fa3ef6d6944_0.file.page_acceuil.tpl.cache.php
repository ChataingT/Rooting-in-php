<?php
/* Smarty version 3.1.30, created on 2018-03-16 14:55:25
  from "/var/www/html/tli/templates/page_acceuil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aabcccd7e2ab9_99235043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34cc069c6e33d18596bad808c3b57fa3ef6d6944' => 
    array (
      0 => '/var/www/html/tli/templates/page_acceuil.tpl',
      1 => 1521208073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5aabcccd7e2ab9_99235043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6781722455aabcccd66f8d7_43418582';
?>
<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta charset="utf-8">
		<TITLE>Accueil</TITLE>
		<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</HEAD>
	<BODY>

	<H1> Bienvenu sur le site Pro-Acupontceur </H1>

	<H2> Actualité </H2>
		<P1>News du moment éventuellement à charger en php <br></P1>

	</BODY>
	<FOOTER>
		<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</FOOTER>
		
</HTML>
<?php }
}
