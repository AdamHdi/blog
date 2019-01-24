<?php
session_start();
$this->title = "Connexion";
if (isset($_SESSION['message'])) {
    echo '<div class="alert alert-danger" role="alert"><p>'.$_SESSION['message'].'</p></div>';
    unset($_SESSION['message']);
}
?>

<div class="formbody text-center">
    <div class="form-signin col-lg-4">
        <form method="post" action="../public/index.php?route=admin&action=connexion">
            <div class="form-group connect">
                <h1 class="h3 mb-3 font-weight-normal">Connexion à la partie administration</h1>
            </div>
            <div class="form-group">
                <label for="email" class="sr-only">Adresse email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Adresse email" required="" autofocus="">
                <label for="password" class="sr-only">Mot de passe</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe" required="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Se connecter" id="submit" name="submit">
            </div>
        </form>
        <br>
        <a href="../public/index.php" id="retour" class="text-dark btn btn-light shadow bg-white rounded text-center">Retour à la liste des billets</a>
    </div>
</div>
