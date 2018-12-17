<?php
$this->title = "Billet";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<div>
    <h2><?= htmlspecialchars($billet->getTitle());?></h2>
    <p><?= htmlspecialchars($billet->getContent());?></p>
    <p>Créé le : <?= htmlspecialchars($billet->getDateAdded());?></p>
</div>
<br>
<a href="../public/index.php">Retour à la liste des billets</a>
<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Commentaires</h3>
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
        <p><?= htmlspecialchars($comment->getContent());?></p>
        <p>Posté le <?= htmlspecialchars($comment->getDateAdded());?></p>
        <?php
    }
    ?>
</div>
