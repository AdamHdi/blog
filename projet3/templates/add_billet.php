<?php
$this->title = "Ajouter un billet";
?>
<div>
    <form method="post" action="../public/index.php?route=admin&action=ajout">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?php
            if(isset($post['title'])){
                echo $post['title'];}
        ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="content" name="content"><?php if(isset($post['content'])){ echo $post['content']; } ?></textarea><br>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
    <a href="../public/index.php?route=admin">Retour</a>
</div>
