<?php
$this->title = "Modifier un billet";
?>
<div>
    <form method="post" action="../public/index.php?route=admin&modifier=<?php echo $_GET['modifier'] ?>">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?php
            if(isset($billet)){
                echo $billet->getTitle();}
        ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"> <?php if(isset($billet)){ echo $billet->getContent(); } ?> </textarea><br>
        <input type="submit" value="Envoyer" id="modifier" name="modifier">
    </form>
    <a href="../public/index.php?route=admin">Retour</a>
</div>