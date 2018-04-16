<?php
/* Smarty version 3.1.30, created on 2018-03-16 17:36:01
  from "/var/www/html/tli/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aabf27125fc48_48917052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd5450d9a00d32b9565eea6fbd849d49e7d42796' => 
    array (
      0 => '/var/www/html/tli/templates/header.tpl',
      1 => 1521218088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu_acceuil.tpl' => 1,
  ),
),false)) {
function content_5aabf27125fc48_48917052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14906305435aabf27124e4f7_22726814';
?>

<div id=title>
	<h1> Acuponcture </h1>
</div>

<div id=menu_acceuil>
	<?php $_smarty_tpl->_subTemplateRender("file:menu_acceuil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<div>
	<p1><?php echo $_smarty_tpl->tpl_vars['tplConnect']->value;?>
</p1>
	 <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConnect']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 
</div>


<?php }
}
