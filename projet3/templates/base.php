<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
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
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</body>
</html>