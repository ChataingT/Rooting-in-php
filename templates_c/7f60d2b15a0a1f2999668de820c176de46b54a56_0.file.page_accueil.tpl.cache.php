<?php
/* Smarty version 3.1.30, created on 2018-04-12 16:51:00
  from "/var/www/html/TLI/templates/page_accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf7254226ba3_13617258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f60d2b15a0a1f2999668de820c176de46b54a56' => 
    array (
      0 => '/var/www/html/TLI/templates/page_accueil.tpl',
      1 => 1523544577,
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
function content_5acf7254226ba3_13617258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11976922715acf725421da98_92258537';
?>
<!DOCTYPE html>
<HTML>
	<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<body>
	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<h1> Bienvenu sur le site Pro-Acupontceur </h1>

	<h2> Actualité </h2>
		<p>News du moment éventuellement à charger en php <br></p>

	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>



		
</HTML>
<?php }
}
