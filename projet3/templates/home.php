<?php
require '../src/manager/Manager.php';
require '../src/manager/BilletManager.php';
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
        $billet = new \App\src\manager\Billet();
        $billets = $billet->getBillets();
        while($data = $billets->fetch())
        {
        ?>
        	<div>
        		<h2><a href="single.php?id=<?= htmlspecialchars($data['id']);?>"><?= htmlspecialchars($data['title']);?></a></h2>
        		<p><?=htmlspecialchars($data['content']);?></p>
        		<p>Créé le : <?= htmlspecialchars($data['date_added']);?></p>
        	</div>
        <?php
        }
        $billets->closeCursor();
        ?>
    </div>
</body>
</html>
