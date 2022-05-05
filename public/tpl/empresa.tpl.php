<div class="container bg-arp">
  <div class="row">
    <div id="empresaCarousel" class="carousel slide" data-ride="carousel">      
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo IMAGE_PATH; ?>/<?php echo $lang['empresa'] ?>.jpg" alt="empresa">          
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
          <a href="index.php"><?php echo $lang['inicio']; ?></a> <span class="divider"></span>
        </li>
        <li class="active"><?php echo $lang['nuestra_empresa']; ?></li>
      </ul>
      <fieldset>
        <legend> <span><?php echo $lang['nuestra_empresa']; ?></span> </legend>
      </fieldset>      
    </div>
  </div>
  <div class="row empresa">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">            
      <p>
        <?php echo $lang['empresa_p1']; ?>
      </p>
      <p>  
        <?php echo $lang['empresa_p2']; ?>
      </p>      
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <img src="<?php echo IMAGE_PATH; ?>/nuestra-empresa.jpg" alt="Nuestra Empresa">
    </div> 

  </div> 
  <div class="row comunidades">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <h3><?php echo $lang['certificaciones']; ?></h3>
      <p></p>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <h3><?php echo $lang['procesos']; ?></h3>
      <p></p>
    </div>
  </div>   
</div>

