<h1>Liste de tous les épisodes</h1>
<br>
<table class="table">
    <tr><th>Titre</th><th>Date d'ajout</th><th>Action</th></tr>
	<?php
	foreach ($billets as $billet)
	{
	  echo '<tr><td>', htmlspecialchars($billet->getTitle()),'</td><td>', htmlspecialchars($billet->getDateAdded()), '</td><td><a href="?route=admin&modifier=', htmlspecialchars($billet->getId()), '">Modifier</a> | <a href="?route=admin&supprimer=', htmlspecialchars($billet->getId()), '">Supprimer</a></td></tr>', "\n";
	}
	?>
</table>
<br>
<a href="../public/index.php?route=admin">Retour</a>