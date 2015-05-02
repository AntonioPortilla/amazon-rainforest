<?php 
include 'arp-defines.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Amazon Rainforest Produtcs, Abuta, Chancapiedra, Chuchuhuasi, Plantas medicinales">
  <meta name="author" content="JALP">
  <link rel="icon" href="favicon.ico">
  <title>Amazon Rainforest Products</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/styles.min.css">
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
              <img src="public/images/arp.png" alt="arp" class="banner">
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 column-2">
              <span class="blog"><a href="#" target="_blank"><img src="public/images/blog.png" alt="blog"></a></span>
              <span class="facebook"><a href="#" target="_blank"><img src="public/images/facebook.png" alt="facebook"></a></span>
              <span class="twitter"><a href="#" target="_blank"><img src="public/images/twitter.png" alt="twitter"></a></span>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-1 column-3">
              <a href="#" lang="es" class="lang"><img src="public/images/es.png" alt="es"></a>
              <a href="#" lang="en" class="lang"><img src="public/images/en.png" alt="en"></a>
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
                    <a href="/">
                      <figure>
                        <img src="public/images/logo.png" alt="Amazon Rainforest Products" />
                      </figure>
                    </a>
                  </span>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="home"><?php echo _('Inicio') ?></a></li>
                    <li><span class="linea"></span><a href="#Productos"><?php echo _('Productos') ?></a></li>
                    <li><span class="linea"></span><a href="#Nosotros"><?php echo _('Nosotros') ?></a></li>
                    <li><span class="linea"></span><a href="#Empresa"><?php echo _('Empresa') ?></a></li>
                    <li><span class="linea"></span><a href="#Cotización"><?php echo _('Cotizacion') ?></a></li>
                    <li><span class="linea"></span><a href="#Contáctenos"><?php echo _('Contactenos') ?></a></li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </header>      
    </div>
  </div>
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
            <img class="first-slide" src="public/images/chuchuhuasi.png" alt="chuchuhuasi">
            <div class="container">
              <div class="carousel-caption">
                <h1>Chuchuhuasi</h1>
                <p><code>(Maytenus Macrocarpa)</code></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="public/images/chancapiedra.png" alt="chancapiedra">
            <div class="container">
              <div class="carousel-caption">
                <h1>Chancapiedra</h1>
                <p><code>(Phyllanthus Niruri)</code></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="public/images/productos.png" alt="productos">
            <div class="container">
              <div class="carousel-caption">
                <p><code>(Productos)</code></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="four-slide" src="public/images/abuta.png" alt="abuta">
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
  <div class="container marketing produtcs">
    <div class="row">
      <div class="col-lg-4">
        <div class="elemento">
          <a href="#productos" class="prod">
            <img src="public/images/CatsClawPowder-green.jpg" class="contenthover" alt="cat" width="95%" />
            <img src="public/images/CatsClawPowder.jpg" alt="cat" width="95%" />
          </a>
        </div>
        <h2>Cat'sClawPowder</h2>
      </div>
      <div class="col-lg-4">
        <div class="elemento">
          <a href="#productos" class="prod">
            <img src="public/images/Palo-Santo-Sticks-green.jpg" class="contenthover" alt="products" width="95%" />
            <img src="public/images/Palo-Santo-Sticks.jpg" alt="products" width="95%" />
          </a>
        </div>
        <h2>Produtcs.Pau'darco</h2>
      </div>
      <div class="col-lg-4">
        <div class="elemento">
          <a href="#productos" class="prod">
            <img src="public/images/Products.Paudarco-green.jpg" class="contenthover" alt="palo santo" width="95%" />
            <img src="public/images/Products.Paudarco.jpg" alt="palo santo" width="95%" />
          </a>
        </div>
        <h2>Palo Santo Stikcs</h2>
      </div>
    </div>    
  </div>  
  <div class="container bg-arp">
    <div class="row">
      <footer>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-1">
          <img src="public/images/logo-bottom.png" alt="arp">
        </div>
        <div class="col-xs-12 col-sm-5 col-md-6 col-lg-4">
          <p>
            Amazon Rainforest Products oficina principal: <br>
            Teléfono: (511) 9939-10360 <br>
            Fax         : (511) 658-6326 <br>
            Correo: sales@amazonrainforestproducts.com <br>
            Jr. Moore 151 dpto. 504 / Magdalena del Mar / Lima 17 Perú
          </p>
          <span class="contact"><?php echo _('Contactenos') ?></span>
        </div>
        <div class="col-xs-12 col-sm-1 col-md-1 col-lg-4">      
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
          <p><?php echo _('Siguenos en') ?>:</p>
          <ul class="social">
            <li>
              <a href="#" class="social-facebook">
                <img src="public/images/fb.png" alt="facebook">
              </a>
            </li>
            <li>
              <a href="#" class="social-twitter">
                <img src="public/images/tw.png" alt="Twitter">
              </a>
            </li>
            <li>
              <a href="#" class="social-youtube">
                <img src="public/images/yt.png" alt="youtube">
              </a>
            </li>
            <li>
              <a href="#" class="social-pinterest">
                <img src="public/images/pr.png" alt="Pinterest">
              </a>
            </li>
            <li>
              <a href="#" class="social-googleplus">
                <img src="public/images/gp.png" alt="google plus">
              </a>
            </li>
          </ul>
          <p>&copy; <?php echo date('Y'); ?> Amazon Rainforest Products <br>
            <?php echo _('Todos los derechos reservados') ?>.
          </p>
        </div>
      </footer>
    </div>
  </div>

  
  </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="public/js/scripts.min.js"></script>
<script>

var Global = {
    intervalID: 0,
    dataDialog: '',
    nowTemp: '',
    now: '',
    run: function() {
        Global.nowTemp = new Date();
        Global.now = new Date(Global.nowTemp.getFullYear(), Global.nowTemp.getMonth(), Global.nowTemp.getDate() - 1, 0, 0, 0, 0);
    },
    setCookie: function(cname, cvalue, exdays) {
        var d = new Date(), expires;
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    },
    getCookie: function(cname) {
        var name = cname + "=",
                ca = document.cookie.split(';'),
                c;

        for (var i = 0; i < ca.length; i++) {
            c = ca[i].trim();
            if (c.indexOf(name) == 0)
                return c.substring(name.length, c.length);
        }
        return '';
    }   
};
  Global.run();

  $('a.lang').on('click', function(e){
    e.preventDefault();
    var $this = $(this);
    Global.setCookie('locale', $this.attr('lang'), 180);
    
    location.reload();;
  });
</script>
</body>
</html>