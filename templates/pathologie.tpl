<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   {include file = "head.tpl"}

    <body role= "document" onload ="getTotal(document.getElementById(formulaire)); getPrix(document.getElementById(formulaire))">
   {include file = "header.tpl"}

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
				{section name=patho
				    loop=$resultPatho}
					<ul>{$smarty.section.patho.rownum} . {$resultPatho[patho]["desc"]} </ul><!--parcours ligne-->
					<h5> Résultats symptomes liés à ces pathologies</h5>

					{section name=Idpatho
					loop=$resultIdPatho}
						<li>{$smarty.section.Idpatho.rownum} . {$resultIdPatho[Idpatho]["desc"]} </li><!--parcours ligne-->
					{sectionelse}
						PAS DE RESULTATS
					{/section}

				{sectionelse}
					PAS DE RESULTATS
				{/section}
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
			
					{section name=symptome
					    loop=$resultSymp}
						<ul>{$smarty.section.symptome.rownum} . {$resultSymp[symptome]["desc"]} </ul>
						<h5> Résultats des pathologies liés à ces symptomes</h5>
						{section name=Idsymp
						    loop=$resultIdSymp}
							
							<li>{$smarty.section.Idsymp.rownum} . {$resultIdSymp[Idsymp]["desc"]} </li><!--parcours ligne-->
						{sectionelse}
							PAS DE RESULTATS
			                 	{/section}

					{sectionelse}
						PAS DE RESULTAT / VEUILLEZ VOUS CONNECTER POUR ACCEDER A CETTE FONCTIONNALITE
					{/section}
			
			</div>



    </content>
	{include file = "footer.tpl"}
    </body>



</html>
