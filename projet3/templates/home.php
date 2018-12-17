<?php
$this->title = "Accueil";
?>
<h1>Mon blog</h1>
<p>En construction</p>
<?php
foreach ($billets as $billet)
{
?>
    <div>
        <h2><a href="../public/index.php?route=billet&id=<?= htmlspecialchars($billet->getId());?>"><?= htmlspecialchars($billet->getTitle());?></a></h2>
        <p><?= htmlspecialchars($billet->getContent());?></p>
        <p>Créé le : <?= htmlspecialchars($billet->getDateAdded());?></p>
    </div>
    <br>
<?php
}
?>
    