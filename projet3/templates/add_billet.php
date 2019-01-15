<?php
$this->title = "Ajouter un billet";
?>
<h1 class="page">Ajout d'un nouveau billet</h1>
<div class="form ajout">
    <form method="post" action="../public/index.php?route=admin&action=ajout">
        <label for="title">Titre</label><br>
        <input type="text" id="title" name="title" value="<?php
            if(isset($post['title'])){
                echo $post['title'];}
        ?>"><br>
        <label for="content">Contenu</label><br>
        <textarea id="mytextarea" name="content"><?php if(isset($post['content'])){ echo $post['content']; } ?></textarea><br>
        <input type="submit" value="Envoyer" id="submit" name="submit">
    </form>
</div>
<a href="../public/index.php?route=admin">Retour</a>
