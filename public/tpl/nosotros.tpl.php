<div class="container bg-arp">
  <div class="row">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo IMAGE_PATH; ?>/chuchuhuasi.jpg" alt="chuchuhuasi">
          <div class="container">
            <div class="carousel-caption">
              <h1>Chuchuhuasi</h1>
              <p><code>(Maytenus Macrocarpa)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo IMAGE_PATH; ?>/chancapiedra.jpg" alt="chancapiedra">
          <div class="container">
            <div class="carousel-caption">
              <h1>Chancapiedra</h1>
              <p><code>(Phyllanthus Niruri)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo IMAGE_PATH; ?>/productos.jpg" alt="productos">
          <div class="container">
            <div class="carousel-caption">
              <p><code>(Productos)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/abuta.jpg" alt="abuta">
          <div class="container">
            <div class="carousel-caption">
              <h1>Abuta</h1>
              <p><code>(Abuta Grandifolia)</code></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Atrás</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>      
  </div>
</div>
<div class="container nosotros">
  <div class="row title">
    <div class="col-lg-12">
      <ul class="breadcrumb">
        <li>
          <a href="/"><?php echo $lang['inicio']; ?></a> <span class="divider"></span>
        </li>
        <li class="active"><?php echo $lang['nosotros']; ?></li>
      </ul>
      <fieldset>
        <legend> <span><?php echo $lang['nosotros']; ?></span> </legend>
      </fieldset>      
    </div>
  </div>
  <div class="row historia">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <h3><?php echo $lang['historia']; ?></h3>      
      <p>
        <?php echo $lang['historia_desc']; ?>
      </p>

        <h3><?php echo $lang['mision']; ?></h3>

      <p>  
        <?php echo $lang['mision_desc']; ?>.
      </p>      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <img src="<?php echo IMAGE_PATH; ?>/nosotros.jpg" alt="nosotros">
    </div>   
  </div> 
  <div class="row comunidades">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <h3><?php echo $lang['plantas']; ?></h3>
      <p>
        <?php echo $lang['plantas_desc']; ?>.
      <p><br><br>
      <img src="<?php echo IMAGE_PATH; ?>/plantas.jpg" alt="Plantas">
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <h3><?php echo $lang['comunidades']; ?></h3>
      <p>
        <?php echo $lang['comunidades_desc']; ?>.
      </p><br>
      <img src="<?php echo IMAGE_PATH; ?>/comunidades-nativas.jpg" alt="Comunidades Nativas">
    </div>
  </div>   
</div>

