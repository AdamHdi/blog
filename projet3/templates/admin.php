<?php
$this->title = "Administration";
?>
<a href="../public/index.php">Retour à la page d'accueil</a>
<h1>Ceci est la page d'administration</h1>

<table>
    <tr><th>Titre</th><th>Date d'ajout</th><th>Action</th></tr>
	<?php
	foreach ($billets as $billet)
	{
	  echo '<tr><td>', htmlspecialchars($billet->getTitle()), htmlspecialchars($billet->getDateAdded()), '</td><td><a href="?route=admin&modifier=', htmlspecialchars($billet->getId()), '">Modifier</a> | <a href="?route=admin&supprimer=', htmlspecialchars($billet->getId()), '">Supprimer</a></td></tr>', "\n";
	}
	?>
</table>
<br>
<a href="../public/index.php?route=admin&action=ajout">Ajouter un billet</a>
<br>
<a href="../public/index.php?route=admin&action=report">Modération des commentaires</a>