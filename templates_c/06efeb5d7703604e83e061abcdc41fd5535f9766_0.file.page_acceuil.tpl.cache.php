<?php
/* Smarty version 3.1.30, created on 2018-03-16 16:31:44
  from "/var/www/html/tli/templates/page_accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aabe3608ceee5_00702690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06efeb5d7703604e83e061abcdc41fd5535f9766' => 
    array (
      0 => '/var/www/html/tli/templates/page_accueil.tpl',
      1 => 1521214278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5aabe3608ceee5_00702690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19150941305aabe3608b3f07_88208713';
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

	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


		
</HTML>
<?php }
}
