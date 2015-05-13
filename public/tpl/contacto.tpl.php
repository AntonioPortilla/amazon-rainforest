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
          <img class="first-slide" src="<?php echo IMAGE_PATH; ?>/chuchuhuasi.png" alt="chuchuhuasi">
          <div class="container">
            <div class="carousel-caption">
              <h1>Chuchuhuasi</h1>
              <p><code>(Maytenus Macrocarpa)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo IMAGE_PATH; ?>/chancapiedra.png" alt="chancapiedra">
          <div class="container">
            <div class="carousel-caption">
              <h1>Chancapiedra</h1>
              <p><code>(Phyllanthus Niruri)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo IMAGE_PATH; ?>/productos.png" alt="productos">
          <div class="container">
            <div class="carousel-caption">
              <p><code>(Productos)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/abuta.png" alt="abuta">
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
      <fieldset>
        <legend> <span><?php echo $lang['contacto']; ?></span> </legend>
      </fieldset>      
    </div>
  </div>
  <div class="row contacto">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">            
      <form class="form-horizontal" id="formContact">
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="nombres"><?php echo $lang['nombres']; ?> (*)</label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="nombres" name="nombres" required>
          </div>
        </div>
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="empresa"><?php echo $lang['empresa']; ?></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="empresa" name="empresa">
          </div>
        </div>
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="cargo"><?php echo $lang['cargo']; ?></label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="cargo" name="cargo">
          </div>
        </div>
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="correo"><?php echo $lang['correo']; ?> (*)</label>
          <div class="col-sm-9">
            <div class="input-group">
              <span class="input-group-addon">@</span>
              <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
          </div>
        </div>    
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="telf"><?php echo $lang['telf']; ?></label>
          <div class="col-sm-9">
            <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>              
              <input type="tel" class="form-control" id="telf" name="telefono">
            </div>
          </div>
        </div>
        <div class="form-group form-group-sm">
          <label class="col-sm-3 control-label" for="comentario"><?php echo $lang['comentario']; ?> (*)</label>
          <div class="col-sm-9">
            <textarea class="form-control" rows="3" id="comentario" name="comentario" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-default btn-green" aria-label="Left Align">
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> <?php echo $lang['enviar']; ?>
            </button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 contact_b2">
      <img src="<?php echo IMAGE_PATH; ?>/contacto.png" alt="contacto">
      <p class="p1">
        <?php echo $lang['contact_p1']; ?>
      </p>
      <p style="margin-top:5px;">
        <?php echo $lang['contact_p2']; ?>        
      </p>
    </div>
  </div>    
</div>


