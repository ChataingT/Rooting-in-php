<?php
/* Smarty version 3.1.30, created on 2018-04-12 16:20:37
  from "/var/www/html/TLI/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf6b355ad372_31368043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2917c07ea99bc99d3316755e4fe1b70d3948d0a8' => 
    array (
      0 => '/var/www/html/TLI/templates/header.tpl',
      1 => 1523542833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu_accueil.tpl' => 1,
  ),
),false)) {
function content_5acf6b355ad372_31368043 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3377931975acf6b355a29c4_46984653';
?>
<header>
	<link rel="stylesheet" type="text/css" href="templates/header_footer.css" />
	


	<div id= background>
		<div id=title>
			<h1> Acuponcture </h1>
		</div>
		<div id=line2>
			<div id=menu_acceuil>
				<?php $_smarty_tpl->_subTemplateRender("file:menu_accueil.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			</div>

			<div id=div_connect>
				 <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplConnect']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 
			</div>
		</div>
	</div>
</header>
<?php }
}
