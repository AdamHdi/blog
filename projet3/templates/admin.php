<?php
$this->title = "Administration";
?>
<div class="row justify-content-between">
	<a href="../public/index.php" id="retour" class="col-4">Retour à la page d'accueil</a>
	<a href="../public/index.php?deconnexion=1" id="deconnexion" class="col-4">Déconnexion</a>
</div>

<header class="page-header">
	<h1>Ceci est la page d'administration</h1>
</header>

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="../public/index.php?route=admin&action=liste">Liste de tous les épisodes</a>
  <a class="navbar-brand" href="../public/index.php?route=admin&action=ajout">Ajouter un billet</a>
  <a class="navbar-brand" href="../public/index.php?route=admin&action=report">Modération des commentaires</a>
</nav>
<br>

<h2>Liste des 5 derniers épisodes</h2>

<table class="table">
    <tr><th>Titre</th><th>Date d'ajout</th><th>Action</th></tr>
	<?php
	foreach ($billets as $billet)
	{
	  echo '<tr><td>', htmlspecialchars($billet->getTitle()),'</td><td>', htmlspecialchars($billet->getDateAdded()), '</td><td><a href="?route=admin&modifier=', htmlspecialchars($billet->getId()), '">Modifier</a> | <a href="?route=admin&supprimer=', htmlspecialchars($billet->getId()), '">Supprimer</a></td></tr>', "\n";
	}
	?>
</table>