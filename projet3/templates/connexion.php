<?php
session_start();
$this->title = "Connexion";
if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-danger" role="alert"><p>'.$_SESSION['message'].'</p></div>';
    unset($_SESSION['message']);
}
?>

<div class="form-signin col-lg-4 text-center">
    <form method="post" action="../public/index.php?route=admin&action=connexion">
        <h1 class="h3 mb-3 font-weight-normal">Connexion à la partie administration</h1>
        <label for="email" class="sr-only">Adresse email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Adresse email" required="" autofocus="">
        <label for="password" class="sr-only">Mot de passe</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required="">
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Se connecter" id="submit" name="submit">
    </form>
</div>
<br>
<a href="../public/index.php" id="retour" class="text-dark btn btn-light shadow bg-white rounded text-center">Retour à la liste des billets</a>