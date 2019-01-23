<?php
session_start();
$this->title = "Connexion";
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>

<form class="form-signin col-lg-4 text-center">
    <h1 class="h3 mb-3 font-weight-normal">Connexion à la partie administration</h1>
    <label for="inputEmail" class="sr-only">Adresse email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Adresse email" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required="">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
</form>
<br>
<a href="../public/index.php" id="retour" class="text-dark btn btn-light shadow bg-white rounded text-center">Retour à la liste des billets</a> 