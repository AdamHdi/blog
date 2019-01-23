<?php
$this->title = "Modifier un billet";
?>
<h1 class="page">Modification du billet</h1>
<div class="form ajout">
    <form method="post" action="../public/index.php?route=admin&modifier=<?php echo $_GET['modifier'] ?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?php
            if(isset($billet)){
                echo $billet->getTitle();}
        ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="mytextarea" name="content"> <?php if(isset($billet)){ echo $billet->getContent(); } ?> </textarea><br>
        <input type="submit" value="Envoyer" id="modifier" name="modifier">
    </form>
</div>
<a href="../public/index.php?route=admin" class="text-dark text-center btn btn-light shadow-sm bg-white rounded">Retour</a>