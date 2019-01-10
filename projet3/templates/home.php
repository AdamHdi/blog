<?php
session_start();
$this->title = "Accueil";
?>
<a href="../public/index.php?route=admin">Accéder à l'espace d'administration</a>
<h1>Mon blog</h1>
<?php
if(isset($_SESSION['add_billet'])) {
    echo '<p>'.$_SESSION['add_billet'].'</p>';
    unset($_SESSION['add_billet']);
}
foreach ($billets as $billet)
{
?>
    <div>
        <h2><a href="../public/index.php?route=billet&id=<?= htmlspecialchars($billet->getId());?>"><?= htmlspecialchars($billet->getTitle());?></a></h2>
        <p><?= $billet->getContent();?></p>
        <p>Créé le : <?= htmlspecialchars($billet->getDateAdded());?></p>
    </div>
    <br>
<?php
}
?>

<?php
var_dump($_COOKIE['password']);
?>