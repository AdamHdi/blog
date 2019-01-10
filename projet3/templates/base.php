<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
  	tinymce.init({
    	selector: '#mytextarea'
  	});
  </script>
</head>
<body>
    <div id="content" class="container">
        <?= $content ?>
    </div>
</body>
</html>