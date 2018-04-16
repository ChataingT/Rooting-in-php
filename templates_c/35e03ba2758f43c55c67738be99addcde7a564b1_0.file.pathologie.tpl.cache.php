<?php
/* Smarty version 3.1.30, created on 2018-04-12 16:00:03
  from "/var/www/html/TLI/templates/pathologie.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf6663218795_48869505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35e03ba2758f43c55c67738be99addcde7a564b1' => 
    array (
      0 => '/var/www/html/TLI/templates/pathologie.tpl',
      1 => 1523541597,
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
function content_5acf6663218795_48869505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4077146705acf66631e16c4_27209238';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <body role= "document" onload ="getTotal(document.getElementById(formulaire)); getPrix(document.getElementById(formulaire))">
   <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <h1 role="banner">Les différentes pathologies </h1>
	
    	<content>
		<ul>
			<li><h2> Qu'est ce qu'une pathologie: </h2></li>
		</ul>

			<p> Le terme « pathologie » a été étendu et est devenu un synonyme de maladie et permet aussi de réaliser un inventaire de celles-ci. On parle ainsi de pathologies pulmonaires ou pathologies cardiaques qui regroupent toutes les maladies atteignant ces organes comme les pathologies cardio-vasculaires ou rhumatologiques, mais également de pathologies infectieuses, ou auto-immunes pour caractériser des familles de maladie partageant un même mécanisme.
			</p>

			
	
		 <h2> Recherche de pathologies: </h2>
			<div id ="Formulaire1">
	
				<form action="index.php?id_route=2&id_methode=2" method="post">

					Recherche : <input type="text" name= "mot" placeholder="Pathologie recherchés ?" required /> <br />

				<input type = "submit" name ="recherche" value ="Valider">
				</form>

			</div>

		<h3> Résultats</h3>

			<div>
				<?php
$__section_patho_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_patho']) ? $_smarty_tpl->tpl_vars['__smarty_section_patho'] : false;
$__section_patho_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resultPatho']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_patho_0_total = $__section_patho_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_patho'] = new Smarty_Variable(array());
if ($__section_patho_0_total != 0) {
for ($__section_patho_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_patho']->value['index'] = 0; $__section_patho_0_iteration <= $__section_patho_0_total; $__section_patho_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_patho']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_patho']->value['rownum'] = $__section_patho_0_iteration;
?>
					<ul><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_patho']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_patho']->value['rownum'] : null);?>
 . <?php echo $_smarty_tpl->tpl_vars['resultPatho']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_patho']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_patho']->value['index'] : null)]["desc"];?>
 </ul><!--parcours ligne-->
					<h5> Résultats symptomes liés à ces pathologies</h5>

					<?php
$__section_Idpatho_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_Idpatho']) ? $_smarty_tpl->tpl_vars['__smarty_section_Idpatho'] : false;
$__section_Idpatho_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resultIdPatho']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_Idpatho_1_total = $__section_Idpatho_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_Idpatho'] = new Smarty_Variable(array());
if ($__section_Idpatho_1_total != 0) {
for ($__section_Idpatho_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_Idpatho']->value['index'] = 0; $__section_Idpatho_1_iteration <= $__section_Idpatho_1_total; $__section_Idpatho_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_Idpatho']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_Idpatho']->value['rownum'] = $__section_Idpatho_1_iteration;
?>
						<li><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_Idpatho']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_Idpatho']->value['rownum'] : null);?>
 . <?php echo $_smarty_tpl->tpl_vars['resultIdPatho']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Idpatho']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Idpatho']->value['index'] : null)]["desc"];?>
 </li><!--parcours ligne-->
					<?php }} else {
 ?>
						PAS DE RESULTATS
					<?php
}
if ($__section_Idpatho_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_Idpatho'] = $__section_Idpatho_1_saved;
}
?>

				<?php }} else {
 ?>
					PAS DE RESULTATS
				<?php
}
if ($__section_patho_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_patho'] = $__section_patho_0_saved;
}
?>
			</div>

		<ul>
			<li><h2> Qu'est ce qu'un symptôme: </h2></li>
		</ul>

			<p> Le symptôme est un signe présent au niveau de l'organisme en réponse à une maladie. Une maladie est en général responsable de plusieurs symptômes, qui peuvent être identiques d'une pathologie à l'autre, d'où l'intérêt de recouper tous les symptômes et d'utiliser des examens dits complémentaires pour permettre une étude plus précise de ceux-ci et de leurs causes suspectées.

			</p>

		<h2> Recherche de symptômes: </h2>
			<div id ="Formulaire2">
				<form action="index.php?id_route=2&id_methode=1" method="post">

					Recherche : <input type="text" name= "mot" placeholder="Symptômes recherchés ?" required /> <br />

				<input type = "submit" name ="recherche" value ="Valider">
				</form>

			</div>

		<h3> Résultats</h3>

			<div>
			
					<?php
$__section_symptome_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_symptome']) ? $_smarty_tpl->tpl_vars['__smarty_section_symptome'] : false;
$__section_symptome_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resultSymp']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_symptome_2_total = $__section_symptome_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_symptome'] = new Smarty_Variable(array());
if ($__section_symptome_2_total != 0) {
for ($__section_symptome_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_symptome']->value['index'] = 0; $__section_symptome_2_iteration <= $__section_symptome_2_total; $__section_symptome_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_symptome']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_symptome']->value['rownum'] = $__section_symptome_2_iteration;
?>
						<ul><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_symptome']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_symptome']->value['rownum'] : null);?>
 . <?php echo $_smarty_tpl->tpl_vars['resultSymp']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_symptome']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_symptome']->value['index'] : null)]["desc"];?>
 </ul>
						<h5> Résultats des pathologies liés à ces symptomes</h5>
						<?php
$__section_Idsymp_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_Idsymp']) ? $_smarty_tpl->tpl_vars['__smarty_section_Idsymp'] : false;
$__section_Idsymp_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['resultIdSymp']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_Idsymp_3_total = $__section_Idsymp_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_Idsymp'] = new Smarty_Variable(array());
if ($__section_Idsymp_3_total != 0) {
for ($__section_Idsymp_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_Idsymp']->value['index'] = 0; $__section_Idsymp_3_iteration <= $__section_Idsymp_3_total; $__section_Idsymp_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_Idsymp']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_Idsymp']->value['rownum'] = $__section_Idsymp_3_iteration;
?>
							
							<li><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_Idsymp']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_Idsymp']->value['rownum'] : null);?>
 . <?php echo $_smarty_tpl->tpl_vars['resultIdSymp']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_Idsymp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_Idsymp']->value['index'] : null)]["desc"];?>
 </li><!--parcours ligne-->
						<?php }} else {
 ?>
							PAS DE RESULTATS
			                 	<?php
}
if ($__section_Idsymp_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_Idsymp'] = $__section_Idsymp_3_saved;
}
?>

					<?php }} else {
 ?>
						PAS DE RESULTAT / VEUILLEZ VOUS CONNECTER POUR ACCEDER A CETTE FONCTIONNALITE
					<?php
}
if ($__section_symptome_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_symptome'] = $__section_symptome_2_saved;
}
?>
			
			</div>



    </content>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>



</html>
<?php }
}
