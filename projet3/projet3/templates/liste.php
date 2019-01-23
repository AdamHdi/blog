<h1 class="page">Liste de tous les épisodes</h1>
<br>
<table class="table">
    <tr><th>Titre</th><th>Date d'ajout</th><th class="text-center">Action</th></tr>
	<?php
	foreach ($billets as $billet)
	{
	echo 	'<tr>
	  			<td>', htmlspecialchars($billet->getTitle()),'</td>
	  			<td>', htmlspecialchars($billet->getDateAdded()), '</td>
	  			<td class="text-center">
	  				<a href="?route=admin&modifier=', htmlspecialchars($billet->getId()), '" class="text-primary btn btn-light shadow bg-white rounded">Modifier</a> 
	  				<a href="?route=admin&supprimer=', htmlspecialchars($billet->getId()), '" class="text-primary btn btn-light shadow bg-white rounded">Supprimer</a>
	  			</td>
	  		</tr>', "\n";
	}
	?>
</table>
<br>
<a href="../public/index.php?route=admin" class="text-dark text-center btn btn-light shadow-sm bg-white rounded">Retour</a>