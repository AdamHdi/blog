<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
  	tinymce.init({
    	selector: '#mytextarea'
  	});
  </script>
</head>
<body>
    <div id="content">
        <?= $content ?>
    </div>
</body>
</html>