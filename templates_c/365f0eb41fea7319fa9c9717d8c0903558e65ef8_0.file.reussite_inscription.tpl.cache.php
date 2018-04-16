<?php
/* Smarty version 3.1.30, created on 2018-04-12 16:52:36
  from "/var/www/html/TLI/templates/reussite_inscription.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf72b414e081_84828724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '365f0eb41fea7319fa9c9717d8c0903558e65ef8' => 
    array (
      0 => '/var/www/html/TLI/templates/reussite_inscription.tpl',
      1 => 1523544628,
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
function content_5acf72b414e081_84828724 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11953167115acf72b4141340_08379633';
?>
<!DOCTYPE html>
<HTML>
	<?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	
	<body>
	<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<h1> Bienvenu sur le site Pro-Acupontceur </h1>

	<h2> <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 </h2>


	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>



		
</HTML>
<?php }
}
