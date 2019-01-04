<?php
$this->title = "Modération";
?>
<div>
	<?php
	foreach ($comment_reported as $comment)
	{
	?>
		<p><?= htmlspecialchars($comment->getPseudo());?></p>
	    <p><?= htmlspecialchars($comment->getContent());?></p>
	    <p>Posté le <?= htmlspecialchars($comment->getDateAdded());?></p>
	    <p><?= htmlspecialchars($comment->getBilletId());?></p>
	<?php
	}
	?>
</div>
<a href="../public/index.php?route=admin">Retour</a>