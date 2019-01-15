<?php
$this->title = "Modération";
?>
<h1 class="page">Liste des commentaires signalés</h1>
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
	    <!-- <p><?= htmlspecialchars($comment->getBilletId());?></p> -->
	    <div class="row action">
		    <a href="../public/index.php?route=admin&action=report&supprimer=<?=htmlspecialchars($comment->getId());?>">Supprimer</a>
		    <a href="../public/index.php?route=admin&action=report&ignore=<?=htmlspecialchars($comment->getId());?>">Ignorer</a>
		</div>
	</div>
	<?php
	}
	?>
</div>
<a href="../public/index.php?route=admin">Retour</a>