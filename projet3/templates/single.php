<?php
$this->title = "Billet";
?>
<h1>Mon blog</h1>
<div>
    <h2><?= htmlspecialchars($billet->getTitle());?></h2>
    <p><?= htmlspecialchars($billet->getContent());?></p>
    <p>Créé le : <?= htmlspecialchars($billet->getDateAdded());?></p>
</div>
<br>
<a href="../public/index.php">Retour à la liste des billets</a>
<div id="comments" class="text-left" style="margin-left: 50px">
    <h3>Commentaires</h3>
    <div>
    <form method="post" action="../public/index.php?route=billet&id=<?php echo $_GET['id'] ?>">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"></textarea><br>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
    </div>
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
