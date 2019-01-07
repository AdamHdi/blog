<?php
session_start();
$this->title = "Connexion";
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<div>
    <form method="post" action="../public/index.php?route=admin&action=connexion">
        <label for="email">Email</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="password">Mot de passe</label><br>
        <input type="password" id="password" name="password" /><br>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
</div>
<br>
<a href="../public/index.php">Retour à la liste des billets</a>