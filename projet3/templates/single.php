<?php
$this->title = "Billet";
?>
<header class="page-header">
    <h1>Mon blog</h1>
</header>
<div>
    <br>
    <h2 class="text-center"><?= htmlspecialchars($billet->getTitle());?></h2>
    <br>
    <p><?= $billet->getContent();?></p>
    <p>Créé le : <?= htmlspecialchars($billet->getDateAdded());?></p>
</div>
<br>
<a href="../public/index.php" class="text-dark btn btn-light shadow bg-white rounded">Retour à la liste des billets</a>
<div id="comments">
    <h3>Commentaires</h3>
    <div>
        <div class="form row justify-content-start">
        <form method="post" action="../public/index.php?route=billet&id=<?php echo $_GET['id'] ?>" class="col-lg-4 col-md-6">
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
            <a href="../public/index.php?route=billet&id=<?= htmlspecialchars($_GET['id']);?>&action=report&comment=<?= htmlspecialchars($comment->getId());?>" class="text-primary btn btn-light shadow-sm bg-white rounded">Signaler</a>
        </div>
        <?php
    }
    ?>
    </div>
</div>
