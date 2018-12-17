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
    </div>
</body>
</html>