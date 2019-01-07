<?php
$this->title = "Modération";
?>
<h1>Liste des commentaires signalés</h1>
<div>
	<?php
	foreach ($comment_reported as $comment)
	{
	?>
		<p><strong><?= htmlspecialchars($comment->getPseudo());?></strong></p>
	    <p><?= htmlspecialchars($comment->getContent());?></p>
	    <p>Posté le <?= htmlspecialchars($comment->getDateAdded());?></p>
	    <p><?= htmlspecialchars($comment->getBilletId());?></p>
	    <a href="../public/index.php?route=admin&action=report&supprimer=<?=htmlspecialchars($comment->getId());?>">Supprimer</a>
	    <a href="../public/index.php?route=admin&action=report&ignore=<?=htmlspecialchars($comment->getId());?>">Ignorer</a>
	<?php
	}
	?>
</div>
<a href="../public/index.php?route=admin">Retour</a>