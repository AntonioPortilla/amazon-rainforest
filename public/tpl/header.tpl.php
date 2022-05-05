<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Amazon Rainforest Produtcs, Abuta, Chancapiedra, Chuchuhuasi, Plantas medicinales, Hierbas, herbs, Amazonia, amazonianherbs">
  <meta name="author" content="JALP">
  <link rel="icon" href="<?php echo APP_DOMAIN ?>/favicon.ico">
  <title>Amazon Rainforest Products</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH; ?>/styles.min.css">  
</head>
<body>
  <div class="container">
    <div class="row cuadro">
      <div class="container">
        <div class="row">
          <header>
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9 column-1">
                  <img src="<?php echo IMAGE_PATH; ?>/arp.png" alt="arp" class="banner">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 column-2">
                  <div class="social-media">
                    <ul>
                      <li>
                        <a href="http://lifewithnature1.blogspot.com" target="_blank">
                          <em><span>Blog</span></em>
                          <img src="<?php echo IMAGE_PATH; ?>/blog.png" alt="Blog">
                        </a>
                      </li>
                      <li>
                        <a href="https://www.facebook.com/amazonrainforestproducts" target="_blank">
                          <em><span>Facebook</span></em>
                          <img src="<?php echo IMAGE_PATH; ?>/facebook.png" alt="Facebook">
                        </a>
                      </li>
                      <li>
                        <a href="https://twitter.com/AmazonianProd" target="_blank">
                          <em><span>Twitter</span></em>
                          <img src="<?php echo IMAGE_PATH; ?>/twitter.png" alt="Twitter">
                        </a>
                      </li>    
                    </ul>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-1 column-3">
                  <a href="?lang=es" lang="es" class="lang"><img src="<?php echo IMAGE_PATH; ?>/es.png" alt="es"></a>
                  <a href="?lang=en" lang="en" class="lang"><img src="<?php echo IMAGE_PATH; ?>/en.png" alt="en"></a>
                </div>
              </div>
            </div>
            <div class="navbar-wrapper">
              <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top">
                  <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <span class="logo navbar-brand">
                        <a href="index.php">
                          <figure>
                            <img src="<?php echo IMAGE_PATH; ?>/logo.png" alt="Amazon Rainforest Products" />
                          </figure>
                        </a>
                      </span>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a href="index.php" class="home">                            
                            <div class="menu">
                              <div class="capa1">
                                <p class="p1"><?php echo $lang['inicio']; ?></p>
                              </div>
                              <div class="capa2">
                                <p class="p2"><?php echo $lang['inicio']; ?></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <span class="linea"></span>
                          <a href="<?php echo APP_DOMAIN ?>/productos.php">                            
                            <div class="menu">
                              <div class="capa1">
                                <p class="p1"><?php echo $lang['productos']; ?></p>
                              </div>
                              <div class="capa2">
                                <p class="p2"><?php echo $lang['productos']; ?></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <span class="linea"></span>
                          <a href="<?php echo APP_DOMAIN ?>/nosotros.php">
                            <div class="menu">
                              <div class="capa1">
                                <p class="p1"><?php echo $lang['nosotros']; ?></p>
                              </div>
                              <div class="capa2">
                                <p class="p2"><?php echo $lang['nosotros']; ?></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <span class="linea"></span>
                          <a href="<?php echo APP_DOMAIN ?>/empresa.php">                            
                            <div class="menu">
                              <div class="capa1">
                                <p class="p1"><?php echo $lang['nuestra_empresa']; ?></p>
                              </div>
                              <div class="capa2">
                                <p class="p2"><?php echo $lang['nuestra_empresa']; ?></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <span class="linea"></span>
                          <a href="<?php echo APP_DOMAIN ?>/cotizacion.php">                           
                            <div class="menu">
                              <div class="capa1">
                                <p class="p1"><?php echo $lang['cotizacion']; ?></p>
                              </div>
                              <div class="capa2">
                                <p class="p2"><?php echo $lang['cotizacion']; ?></p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <span class="linea"></span>
                          <a href="<?php echo APP_DOMAIN ?>/contacto.php">                            
                            <div class="menu">
                              <div class="capa1">
                                <p class="p1"><?php echo $lang['contactenos']; ?></p>
                              </div>
                              <div class="capa2">
                                <p class="p2"><?php echo $lang['contactenos']; ?></p>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </header>      
        </div>
      </div>