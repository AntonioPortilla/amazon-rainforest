<div class="container bg-arp">
  <div class="row">
    <div id="contCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo IMAGE_PATH; ?>/<?php echo $lang['cont'] ?>.jpg" alt="contactenos">
          <div class="container">
            <div class="carousel-caption">
              <h1>Chuchuhuasi</h1>
              <p><code>(Maytenus Macrocarpa)</code></p>
            </div>
          </div>
        </div>       
       </div>
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
        <li class="active"><?php echo $lang['contacto']; ?></li>
      </ul>
      <fieldset>
        <legend> <span><?php echo $lang['contactenos']; ?></span> </legend>
      </fieldset>
      <p>
        <?php echo $lang['solicita']; ?> : <span class="bg-info">ventas@amazonianherbs.com </span>.
      </p>
      <p>
        <span class="text-danger"> <?php echo $lang['requerido']; ?>  </span>
      </p>
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
          <label class="col-sm-3 control-label" for="empresa"><?php echo $lang['empresa']; ?> </label>
          <div class="col-sm-9">
            <input class="form-control" type="text" id="empresa" name="empresa">
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
              <input type="tel" class="form-control" id="telf" name="telefono" minlength="7" maxlength="9">
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
      <p>
       <?php echo $lang['post_venta']; ?>: <span class="bg-success">cliente@amazonianherbs.com </span>
      </p>
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


