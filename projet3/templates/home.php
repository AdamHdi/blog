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
        while($data = $billets->fetch())
        {
        ?>
        	<div>
        		<h2><a href="../public/index.php?route=billet&id=<?= htmlspecialchars($data['id']);?>"><?= htmlspecialchars($data['title']);?></a></h2>
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
