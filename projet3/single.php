<?php
require 'Database.php';
require 'Billet.php';
require 'Comment.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
</head>

<body>
    <div>
        <h1>Mon blog</h1>
        <p>En construction</p>
        <?php

		$billet = new Billet();
		$billet = $billet->getBillet($_GET['id']);
		$data = $billet->fetch()
		?>
		    <div>
		        <h2><?= htmlspecialchars($data['title']);?></h2>
		        <p><?= htmlspecialchars($data['content']);?></p>
		        <p>Créé le : <?= htmlspecialchars($data['date_added']);?></p>
		    </div>
		    <br>
		<?php
		$billet->closeCursor();
		?>
		<a href="index.php">Retour à la liste des billets</a>
		<div id="comments" class="text-left" style="margin-left: 50px">
	        <h3>Commentaires</h3>
	        <?php
	        $comment = new Comment();
	        $comments = $comment->getCommentsFromBillet($_GET['id']);
	        while($datas = $comments->fetch())
	        {
	            ?>
	            <h4><?= htmlspecialchars($datas['pseudo']);?></h4>
	            <p><?= htmlspecialchars($datas['content']);?></p>
	            <p>Posté le <?= htmlspecialchars($datas['date_added']);?></p>
	            <?php
	        }
	        $comments->closeCursor();
	        ?>
    	</div>
    </div>
</body>
</html>