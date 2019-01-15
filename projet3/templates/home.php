<?php
session_start();
$this->title = "Accueil";
?>
<header class="page-header">
	<h1>Mon blog</h1>
</header>
<?php
if(isset($_SESSION['add_billet'])) {
    echo '<p>'.$_SESSION['add_billet'].'</p>';
    unset($_SESSION['add_billet']);
}
?>
<section class="articles">
	<?php
	foreach ($billets as $billet)
	{
	?>
	    <div>
	        <h2><a href="../public/index.php?route=billet&id=<?= htmlspecialchars($billet->getId());?>"><?= htmlspecialchars($billet->getTitle());?></a></h2>
	        <blockquote><?= substr($billet->getContent(), 0, 250);?></blockquote>
	        <p>Créé le : <?= htmlspecialchars($billet->getDateAdded());?></p>
	    </div>
	    <br>
	<?php
	}
	?>
	<?php
var_dump($_COOKIE['password']);
?>
</section>

</div>
<footer>
	<a href="../public/index.php?route=admin">Accéder à l'espace d'administration</a>
</footer>
<div>