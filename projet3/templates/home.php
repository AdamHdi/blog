<?php
session_start();
$this->title = "Accueil";
?>
</div>

<div class="bg">
	<h1 class="text-center titre text-white">Mon blog</h1>
</div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class=""></li>
          <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <?php foreach ($slides as $index=>$slide) : ?>
          <div class="carousel-item <?php if($index == 1) { echo "active"; } ?>">
            <div class="slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h2><a href="../public/index.php?route=billet&id=<?= htmlspecialchars($slide->getId());?>"  class="text-white"><?= htmlspecialchars($slide->getTitle());?></a></h2><br>
                <p><?= substr($slide->getContent(), 0, 500);?></p>
                <p>Créé le : <?= htmlspecialchars($slide->getDateAdded());?></p>
                <p><a class="btn btn-lg btn-primary" href="../public/index.php?route=billet&id=<?= htmlspecialchars($slide->getId());?>" role="button">Commencer la lecture</a></p>
              </div>
            </div>
            </div>
          </div>
          <?php endforeach; ?>
      	</div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</div>

<div class="container">

<?php
if(isset($_SESSION['message'])) {
	echo '<div class="alert alert-primary" role="alert"><p>'.$_SESSION['message'].'</p></div>';
	unset($_SESSION['message']);
}
?>
<section class="articles">
	<?php
	foreach ($billets as $billet)
	{
	?>
	    <div class="card shadow p-4 mb-3 bg-white rounded">
	        <h2><a href="../public/index.php?route=billet&id=<?= htmlspecialchars($billet->getId());?>"><?= htmlspecialchars($billet->getTitle());?></a></h2><br>
	        <blockquote><?= substr($billet->getContent(), 0, 500);?></blockquote>
	        <p>Créé le : <?= htmlspecialchars($billet->getDateAdded());?></p>
	        <a href="../public/index.php?route=billet&id=<?= htmlspecialchars($billet->getId());?>" class="btn btn-light shadow bg-white rounded lire">Lire la suite</a>
	    </div>
	    <br>
	<?php
	}
	?>
	<?php
var_dump($_COOKIE['password']);
?>
</section>

</div>
<footer>
	<a href="../public/index.php?route=admin" class="text-dark">Accéder à l'espace d'administration</a>
</footer>

<div>

<!-- <?php /**
		foreach ($slides as $slide)
		{
		?>
        <div class="carousel-inner">
          <div class="carousel-item">
            <div class="slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h2><a href="../public/index.php?route=billet&id=<?= htmlspecialchars($slide->getId());?>"><?= htmlspecialchars($slide->getTitle());?></a></h2><br>
                <p><?= substr($slide->getContent(), 0, 500);?></p>
                <p>Créé le : <?= htmlspecialchars($slide->getDateAdded());?></p>
                <p><a class="btn btn-lg btn-primary" href="../public/index.php?route=billet&id=<?= htmlspecialchars($slide->getId());?>" role="button">Commencer la lecture</a></p>
              </div>
            </div>
            </div>
          </div>
      	</div> 
<?php
} **/
?>
