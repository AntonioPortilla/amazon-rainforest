<div class="container bg-arp">
  <div class="row">
    <div id="carouselProd" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselProd" data-slide-to="0" class="active"></li>
        <li data-target="#carouselProd" data-slide-to="1"></li>
        <li data-target="#carouselProd" data-slide-to="2"></li>
        <li data-target="#carouselProd" data-slide-to="3"></li>
        <li data-target="#carouselProd" data-slide-to="4"></li>
        <li data-target="#carouselProd" data-slide-to="5"></li>
        <li data-target="#carouselProd" data-slide-to="6"></li>
        <li data-target="#carouselProd" data-slide-to="7"></li>
        <li data-target="#carouselProd" data-slide-to="8"></li>
        <li data-target="#carouselProd" data-slide-to="9"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo IMAGE_PATH; ?>/products/products.abutaBanner.jpg" alt="Abuta">
          <div class="container">
            <div class="carousel-caption">
              <h1>Abuta</h1>
              <p><code>(Abuta Grandifolia)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo IMAGE_PATH; ?>/products/products.catsClawBanner.jpg" alt="cats">
          <div class="container">
            <div class="carousel-caption">              
              <p><code>(Cats Claw)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo IMAGE_PATH; ?>/products/products.chancapiedraBanner.jpg" alt="Chancapiedra">
          <div class="container">
            <div class="carousel-caption">
              <p><code>(Chancapiedra)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/products/products.ChuchuhuasiBanner.jpg" alt="Chuchuhuasi">
          <div class="container">
            <div class="carousel-caption">
              <h1>Chuchuhuasi</h1>
              <p><code>(Maytenus macrocarpa)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/products/products.clavoHuascaBanner.jpg" alt="Clavo">
          <div class="container">
            <div class="carousel-caption">
              <h1>Clavo</h1>
              <p><code>(Clavo Huasca)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/products/products.Graviola-banner.jpg" alt="Graviola">
          <div class="container">
            <div class="carousel-caption">
              <h1>Graviola</h1>
              <p><code>(Annona muricata L)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/products/products.Jergon-SachaBanner.jpg" alt="Sacha">
          <div class="container">
            <div class="carousel-caption">
              <h1>Jergon</h1>
              <p><code>(Jergon Sacha)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/products/products.PaloSantoBanner.jpg" alt="Palo Santo">
          <div class="container">
            <div class="carousel-caption">
              <h1>Palo</h1>
              <p><code>(Palo Santo)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/products/products.Pau-D-ArcoBanner.jpg" alt="Pau">
          <div class="container">
            <div class="carousel-caption">
              <h1>Pau</h1>
              <p><code>(Pau D'Arco)</code></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="four-slide" src="<?php echo IMAGE_PATH; ?>/products/products.Unia-de-gatoBanner.jpg" alt="Uña de gata">
          <div class="container">
            <div class="carousel-caption">
              <h1>Uña</h1>
              <p><code>Uña de gato</code></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carouselProd" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Atrás</span>
      </a>
      <a class="right carousel-control" href="#carouselProd" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>      
  </div>
</div>
<div class="container cotizacion">
  <div class="row title">
    <div class="col-lg-12">
      <ul class="breadcrumb">
        <li>
          <a href="/"><?php echo $lang['inicio']; ?></a> <span class="divider"></span>
        </li>
        <li class="active"><?php echo $lang['productos']; ?></li>
      </ul>
      <fieldset>
        <legend> <span><?php echo $lang['productos']; ?></span> </legend>
      </fieldset>      
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <?php echo $lang['desc_pro']; ?>
      <br>
    </div>
  </div>
  <div class="row productos">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <ul class="nav nav-pills nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#unia" role="tab" data-toggle="tab"><?php echo $lang['nomUnia']; ?></a></li>
        <li role="presentation"><a href="#chuchuhuasi" role="tab" data-toggle="tab">CHUCHUHUASI</a></li>
        <li role="presentation"><a href="#tahuari" role="tab" data-toggle="tab">PAU D’ ARCO – TAHUARI</a></li>
        <li role="presentation"><a href="#graviola" role="tab" data-toggle="tab">GRAVIOLA</a></li>
        <li role="presentation"><a href="#chancapiedra" role="tab" data-toggle="tab">CHANCAPIEDRA</a></li>
        <li role="presentation"><a href="#clavo" role="tab" data-toggle="tab">CLAVO HUASCA</a></li>
        <li role="presentation"><a href="#jergon" role="tab" data-toggle="tab">JERGON SASHA</a></li>
        <li role="presentation"><a href="#ubos" role="tab" data-toggle="tab">ABUTA</a></li>
        <li role="presentation"><a href="#palo" role="tab" data-toggle="tab">PALO SANTO</a></li>
      </ul>   
    </div>
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
      <div class="tab-content">
        <div class="tab-pane active" id="unia">
          <div class="row row-1-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['unia'] ?>.jpg" alt="uña de gato">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['unia_pulverizado'] ?>.jpg" alt="uña de gato">
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong><?php echo $lang['info_basic']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['part_util']; ?>:</strong> Corteza, hojas 
                </p>
                <p>
                  <strong><?php echo $lang['presentacion']; ?>:</strong> Trozado, Triturado, Pulverizado (harina), Extracto Seco atomizado. 
                </p>
                <p>
                  <strong><?php echo $lang['nom_com']; ?>:</strong> <?php echo $lang['nomUnia']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['nom_comum']; ?>:</strong> “Zavenna rossa“, “quitabultos“, uncucha, garabato, garabato colorado, garra gavilán, jipotatsa, kug kukjaqui, michomentis, paotati-mosha, samento, toron, tsachik, unganangi
                </p>
                <p>
                  <strong><?php echo $lang['nom_cien']; ?>:</strong> <?php echo $lang['nom_cien_unia']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['general_desc']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_unia']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['prop_usos']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p2_unia']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['car_tec']; ?> <?php echo $lang['unia_insumos']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['prin_act']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['prin_act_unia']; ?>
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <strong><?php echo $lang['carac_unia']; ?></strong><br>
                    <p>
                      <?php echo $lang['desc_carac_unia']; ?>
                    </p> 
                  </div>
                  <div class="col-lg-6">
                    <strong><?php echo $lang['met_pesados']; ?></strong><br>
                    <p>
                      <?php echo $lang['desc_met_pesados']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>                   
        </div>
        <div class="tab-pane" id="chuchuhuasi">
          <div class="row row-1-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['chuchu'] ?>.jpg" alt="uña de gato">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['chuchu_pul'] ?>.jpg" alt="uña de gato">
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong><?php echo $lang['info_basic']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['part_util']; ?>:</strong> <?php echo $lang['part_util_chuchu']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['presentacion']; ?>:</strong> <?php echo $lang['presentacion_chuchu']; ?> 
                </p>
                <p>
                  <strong><?php echo $lang['nom_com']; ?>:</strong> Chuchuhuasi
                </p>
                <p>
                  <strong><?php echo $lang['nom_comum']; ?>:</strong> 
                  Cuchuasi, chuchuasca (shipibo-conibo), chuchuhuasi, chuchuhuasha, chuchasha, chucchuahuashu. 
                </p>
                <p>
                  <strong><?php echo $lang['nom_cien']; ?>:</strong>
                  Maytenus Macrocarpa
                </p>
                <p>
                  <strong><?php echo $lang['general_desc']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_chuchu']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['prop_usos']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p2_chuchu']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['car_tec']; ?></strong>
                </p>
                <p>
                  <strong><?php echo $lang['prin_act']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['prin_act_chuchu']; ?>
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <strong><?php echo $lang['carac_unia']; ?></strong><br>
                    <p>
                      <?php echo $lang['desc_carac_chuchu']; ?>
                    </p> 
                  </div>
                  <div class="col-lg-6">
                    <strong><?php echo $lang['met_pesados']; ?></strong><br>
                    <p>
                      <?php echo $lang['desc_met_chuchu']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="tab-pane" id="tahuari">          
          <div class="row row-1-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['tahuari_polvo'] ?>.jpg" alt="tahuari polvo">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['tahuari'] ?>.jpg" alt="tahuari">
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong><?php echo $lang['info_basic']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['part_util']; ?>:</strong> <?php echo $lang['part_util_chuchu']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['presentacion']; ?>:</strong> <?php echo $lang['presentacion_chuchu']; ?> 
                </p>
                <p>
                  <strong><?php echo $lang['nom_com']; ?>:</strong> Pau D’ Arco
                </p>
                <p>
                  <strong><?php echo $lang['nom_comum']; ?>:</strong> 
                  Tahuari o Pau D' Arco.
                </p>
                <p>
                  <strong><?php echo $lang['nom_cien']; ?>:</strong>
                  Tabebuia Serratifolia, Tabebuia Impetiginosa.
                </p>
                <p>
                  <strong><?php echo $lang['general_desc']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_tahuari']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['prop_usos']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p2_tahuari']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['car_tec']; ?></strong>
                </p>
                <p>
                  <strong><?php echo $lang['comp_quimica']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_composicion']; ?>.
                </p>
                <p>
                  <?php echo $lang['p2_composicion']; ?>.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="graviola">
          <div class="row row-1-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['graviola'] ?>.jpg" alt="uña de gato">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['graviola_polvo'] ?>.jpg" alt="uña de gato">
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong><?php echo $lang['info_basic']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['part_util']; ?>:</strong> <?php echo $lang['part_util_grav']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['presentacion']; ?>:</strong> <?php echo $lang['pre_grav']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['nom_com']; ?>:</strong> Graviola
                </p>
                <p>
                  <strong><?php echo $lang['nom_comum']; ?>:</strong> 
                  Guanábano, guanábana, corosol, corrosal, anón, cachimán, guanábana, masasamba. 
                </p>
                <p>
                  <strong><?php echo $lang['nom_cien']; ?>:</strong>
                  Annona Muricata L
                </p>
                <p>
                  <strong><?php echo $lang['general_desc']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_grav']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['prop_usos']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p2_grav']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['car_tec']; ?></strong>
                </p>
                <p>
                  <strong><?php echo $lang['prin_act']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['prin_act_grav']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['car_tec']; ?> <?php echo $lang['unia_insumos']; ?></strong>
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <strong><?php echo $lang['carac_unia']; ?></strong><br>
                    <p>
                      <?php echo $lang['desc_carac_grav']; ?>
                    </p> 
                  </div>
                  <div class="col-lg-6">
                    <strong><?php echo $lang['met_pesados']; ?></strong><br>
                    <p>
                      <?php echo $lang['desc_met_grav']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="tab-pane" id="chancapiedra">
          <div class="row row-1-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['chancapiedra'] ?>.jpg" alt="chancapiedra">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['chancapiedra_polvo'] ?>.jpg" alt="chancapiedra polvo">
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong><?php echo $lang['info_basic']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['part_util']; ?>:</strong> <?php echo $lang['part_util_chanca']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['presentacion']; ?>:</strong> <?php echo $lang['pre_chan']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['nom_com']; ?>:</strong> ChancaPiedra
                </p>
                <p>
                  <strong><?php echo $lang['nom_comum']; ?>:</strong>
                  <?php echo $lang['ncomun_chan']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['nom_cien']; ?>:</strong>
                  Phyllanthus niruri L.
                </p>
                <p>
                  <strong><?php echo $lang['general_desc']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_chan']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['prop_usos']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p2_chan']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['car_tec']; ?></strong>
                </p>
                <p>
                  <strong><?php echo $lang['prin_act']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['prin_act_chan']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['car_tec']; ?> <?php echo $lang['unia_insumos']; ?></strong>
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <strong><?php echo $lang['carac_unia']; ?></strong><br>
                    <p>
                      <?php echo $lang['desc_carac_chan']; ?>
                    </p> 
                  </div>
                  <div class="col-lg-6">
                    <strong><?php echo $lang['met_pesados']; ?></strong><br>
                    <p>
                      <?php echo $lang['desc_met_chan']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="clavo">
          <div class="row row-1-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['clavo'] ?>.jpg" alt="clavo">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['clavo_polvo'] ?>.jpg" alt="clavo polvo">
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong><?php echo $lang['info_basic']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['part_util']; ?>:</strong> <?php echo $lang['part_util_clavo']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['presentacion']; ?>:</strong> <?php echo $lang['pre_clavo']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['nom_com']; ?>:</strong> Clavo Huasca
                </p>
                <p>
                  <strong><?php echo $lang['nom_comum']; ?>:</strong>
                  <?php echo $lang['ncomun_clavo']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['nom_cien']; ?>:</strong>
                  Tynnanthus Panurensis
                </p>
                <p>
                  <strong><?php echo $lang['general_desc']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_clavo']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['prop_usos']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p2_clavo']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['car_tec']; ?></strong>
                </p>
                <p>
                  <strong><?php echo $lang['composicion']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['desc_composicion']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['current_cla']; ?></strong>
                </p>
                <p>
                  <?php echo $lang['desc_current_cla']; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="jergon">
          <div class="row row-1-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['jergon'] ?>.jpg" alt="jergon">
            </div>            
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong><?php echo $lang['info_basic']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['part_util']; ?>:</strong> <?php echo $lang['part_util_jergon']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['presentacion']; ?>:</strong> <?php echo $lang['pre_jergon']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['nom_com']; ?>:</strong> Jergon Sacha
                </p>
                <p>
                  <strong><?php echo $lang['nom_comum']; ?>:</strong>
                  <?php echo $lang['ncomun_jergon']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['nom_cien']; ?>:</strong>
                  Dracontium loretense Krause.
                </p>
                <p>
                  <strong><?php echo $lang['general_desc']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_jergon']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['prop_usos_jergon']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p2_jergon']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['composicion']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['desc_com_jergon']; ?>.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="ubos">
          <div class="row row-1-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['abuta'] ?>.jpg" alt="abuta">
            </div>            
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
             <div class="prod_desc">
                <p>
                  <strong><?php echo $lang['info_basic']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['part_util']; ?>:</strong> <?php echo $lang['part_util_abuta']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['presentacion']; ?>:</strong> <?php echo $lang['pre_abuta']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['nom_com']; ?>:</strong> Abuta 
                </p>
                <p>
                  <strong><?php echo $lang['nom_comum']; ?>:</strong>
                  Abuta, chancabexus, caimitillo, motelo sanango
                </p>
                <p>
                  <strong><?php echo $lang['nom_cien']; ?>:</strong>
                  Abuta grandifolia (Mart.) Sandw.
                </p>
                <p>
                  <strong><?php echo $lang['general_desc']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_abuta']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['prop_usos']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p2_abuta']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['composicion']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['desc_com_abuta']; ?>.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="palo">
          <div class="row row-1-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/<?php echo $lang['palo'] ?>.jpg" alt="palo santo">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/productos/conos.jpg" alt="palo santo">
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong><?php echo $lang['info_basic']; ?>:</strong>
                </p>
                <p>
                  <strong><?php echo $lang['part_util']; ?>:</strong> <?php echo $lang['part_util_palo']; ?>
                </p>
                <p>
                  <strong><?php echo $lang['presentacion']; ?>:</strong> <?php echo $lang['pre_palo']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['nom_com']; ?>:</strong> Palo Santo 
                </p>
                <p>
                  <strong><?php echo $lang['nom_comum']; ?>:</strong>
                  Palo santo, madera sagrada, quebracho
                </p>
                <p>
                  <strong><?php echo $lang['nom_cien']; ?>:</strong>
                  Bursera Graveolens.
                </p>
                <p>
                  <strong><?php echo $lang['general_desc']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['p_palo']; ?>.
                </p>
                <p>
                  <strong><?php echo $lang['prop_usos']; ?>:</strong>
                </p>
                <?php echo $lang['p2_palo']; ?>
                <p>
                  <strong><?php echo $lang['car_tec']; ?>:</strong>
                </p>
                <p>
                  <?php echo $lang['desc_car_palo']; ?>.
                </p>
              </div>
            </div>
          </div>
        </div>       
        <a href="<?php echo APP_DOMAIN; ?>/cotizacion/" class="btn btn-danger btn-cotizar">Cotizar Producto</a>
      </div>
    </div>
  </div>
</div>


