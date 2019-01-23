<?php
$this->title = "Administration";
?>
<div class="row justify-content-between">
	<a href="../public/index.php" id="retour" class="col-lg-3 col-md-3 text-dark btn btn-light shadow-sm bg-white rounded">Retour à la page d'accueil</a>
	<a href="../public/index.php?deconnexion=1" id="deconnexion" class="col-lg-2 col-md-2 text-dark text-center btn btn-light shadow-sm bg-white rounded">Déconnexion</a>
	
</div>

<header class="page-header text-center mt-5">
	<h1>Bienvenue dans la partie administration</h1>
</header>

<nav class="navbar navbar-light bg-light">
  <a class="nav-link text-secondary" href="../public/index.php?route=admin&action=liste">Liste de tous les épisodes</a>
  <a class="nav-link text-secondary" href="../public/index.php?route=admin&action=ajout">Ajouter un billet</a>
  <a class="nav-link text-secondary" href="../public/index.php?route=admin&action=report">Modération des commentaires</a>
</nav>
<br>

<h2>Liste des 5 derniers épisodes</h2>

<table class="table">
    <tr><th>Titre</th><th>Date d'ajout</th><th class="text-center">Action</th></tr>
	<?php
	foreach ($billets as $billet)
	{
	  echo '<tr>
	  			<td>', htmlspecialchars($billet->getTitle()),'</td>
	  			<td>', htmlspecialchars($billet->getDateAdded()), '</td>
	  			<td class="text-center">
	  				<a href="?route=admin&modifier=', htmlspecialchars($billet->getId()), '" class="text-primary btn btn-light shadow bg-white rounded">Modifier</a> 
	  				<a href="?route=admin&supprimer=', htmlspecialchars($billet->getId()), '" class="text-primary btn btn-light shadow bg-white rounded delete">Supprimer</a>
	  			</td>
	  		</tr>', "\n";
	}
	?>
</table>