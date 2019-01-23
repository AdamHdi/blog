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
                <h2><a href="../public/index.php?route=billet&id=<?= htmlspecialchars($slide->getId());?>"><?= htmlspecialchars($slide->getTitle());?></a></h2><br>
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