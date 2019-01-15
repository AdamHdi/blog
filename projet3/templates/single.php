<?php
$this->title = "Billet";
?>
<header class="page-header">
    <h1>Mon blog</h1>
</header>
<div>
    <h2><?= htmlspecialchars($billet->getTitle());?></h2>
    <p><?= $billet->getContent();?></p>
    <p>Créé le : <?= htmlspecialchars($billet->getDateAdded());?></p>
</div>
<br>
<a href="../public/index.php">Retour à la liste des billets</a>
<div id="comments">
    <h3>Commentaires</h3>
    <div>
        <div class="form row justify-content-start">
        <form method="post" action="../public/index.php?route=billet&id=<?php echo $_GET['id'] ?>" class="col-4">
            <label for="pseudo"><strong>Pseudo</strong></label><br>
            <input type="text" id="pseudo" name="pseudo" class="form-control"><br>
            <label for="content"><strong>Contenu</strong></label><br>
            <textarea id="content" name="content" class="form-control"></textarea><br>
            <input type="submit" value="Envoyer" id="submit" name="submit">
        </form>
        </div>
    </div>
    <br>
    <div class="comments">
    <?php
    foreach ($comments as $comment)
    {
        ?>
        <div class="comment">
            <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
            <p><?= htmlspecialchars($comment->getContent());?></p>
            <p>Posté le <?= htmlspecialchars($comment->getDateAdded());?></p>
            <a href="../public/index.php?route=billet&id=<?= htmlspecialchars($_GET['id']);?>&action=report&comment=<?= htmlspecialchars($comment->getId());?>">Signaler ce commentaire</a>
        </div>
        <?php
    }
    ?>
    </div>
</div>
