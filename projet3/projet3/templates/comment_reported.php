<?php
$this->title = "Modération";
?>
<h1 class="page">Liste des commentaires signalés</h1>
<?php
if(isset($_SESSION['message'])) {
	echo '<div class="alert alert-primary" role="alert"><p>'.$_SESSION['message'].'</p></div>';
	unset($_SESSION['message']);
}
?>
<div class="reported">
	<?php
	foreach ($comment_reported as $comment)
	{
	?>
	<div class="card">
		<p>Pseudo : <strong><?= htmlspecialchars($comment->getPseudo());?></strong></p>
		<p>Commentaire : </p>
	    <p><em><?= htmlspecialchars($comment->getContent());?></em></p>
	    <p>Posté le <?= htmlspecialchars($comment->getDateAdded());?></p>
	    <div class="row action">
		    <a href="../public/index.php?route=admin&action=report&supprimer=<?=htmlspecialchars($comment->getId());?>" class="text-primary text-center btn btn-light shadow bg-white rounded">Supprimer</a>
		    <a href="../public/index.php?route=admin&action=report&ignore=<?=htmlspecialchars($comment->getId());?>" class="text-primary text-center btn btn-light shadow bg-white rounded">Ignorer</a>
		</div>
	</div>
	<?php
	}
	?>
</div>
<a href="../public/index.php?route=admin" class="text-dark text-center btn btn-light shadow-sm bg-white rounded">Retour</a>