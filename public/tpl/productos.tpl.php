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
    </div>
  </div>
  <div class="row productos">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">    
      <ul class="nav nav-pills nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#unia" role="tab" data-toggle="tab">UÑA DE GATO</a></li>
        <li role="presentation"><a href="#chuchuhuasi" role="tab" data-toggle="tab">CHUCHUHUASI</a></li>
        <li role="presentation"><a href="#tahuari" role="tab" data-toggle="tab">TAHUARI</a></li>
        <li role="presentation"><a href="#graviola" role="tab" data-toggle="tab">GRAVIOLA</a></li>
        <li role="presentation"><a href="#chancapiedra" role="tab" data-toggle="tab">CHANCA PIEDRA</a></li>
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
              <img src="<?php echo IMAGE_PATH ?>/corteza-unia.jpg" alt="uña de gato">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/arina-unia.jpg" alt="uña de gato">
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong>INFORMACIÓN BÁSICA:</strong>
                  Insumo: Corteza trozada/ triturada / pulverizada.
                <p>
                  <strong>Nombre comercial:</strong> Uña de Gato
                </p>
                <p>
                  <strong>Nombre común:</strong> “Zavenna rossa“, “quitabultos“, uncucha, garabato, garabato colorado, garra gavilán, jipotatsa, kug kukjaqui, michomentis, paotati-mosha, samento, toron, tsachik, unganangi
                </p>
                <p>
                  <strong>Nombre científico:</strong> Uncaria tomentosa (Willd) D.C.
                </p>
                <p>
                  <strong>DESCRIPCIÓN:</strong>
                </p>
                <p>
                  Es una planta trepadora y espinosa de uso medicinal. Es originaria de la selva peruana. Su nombre se debe a la presencia en la planta de espinas curvas, con forma de gancho.
                </p>
                <p>
                  <strong>PROPIEDADES Y USOS:</strong>
                </p>
                <p>
                  La uña de gato fortalece el sistema inmunológico humano, previniendo enfermedades y el deterioro orgánico. Favorece la actividad antiinflamatoria en el organismo y puede prevenir el cáncer gracias a sus propiedades antioxidantes y antimutagénicas.
                </p>
                <p>
                  <strong>Características Técnicas Uña de Gato:</strong>
                </p>
                <p>
                  <strong>PRINCIPIO ACTIVO:</strong>
                </p>
                <p>
                  Alcaloides, Isoteropodina/ Uncarina E, Pteropodina/ Uncarina C, Isomitrafilina/ Ajmalicina - Oxindol A, Mitrafilina, Isorinchofilina, Rinchofilina, Uncarina F, Especiofilina/ Uncarina D. Acido Quinovico, Glicosidos, Flavonoides, Taninos, Vitaminas y Minerales (Calcio, fósforo, magnesio, potasio, sodio, manganeso).
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <strong>Características Físico / Químicas:</strong><br>
                    Humedad            -- No más del 8 % <br>
                    Preservativos       -- Ausente <br>
                    Pesticidas            -- Según Normas FDA <br>
                    Antioxidantes      -- Ausente
                  </div>
                  <div class="col-lg-6">
                    <strong>Metales pesados</strong><br>
                    Plomo (Como Pb)    No más de 10 ppm. <br>
                    Arsénico (Como As)  No más de 3 ppm.
                  </div>
                </div>
              </div>
            </div>
          </div>                   
        </div>
        <div class="tab-pane" id="chuchuhuasi">
          <div class="row">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong>INFORMACIÓN BÁSICA:</strong>
                  Insumo: Corteza trozada/ triturada/ pulverizada.
                <p>
                  <strong>Nombre comercial:</strong> Chuchuhuasi
                </p>
                <p>
                  <strong>Nombre común:</strong> Cuchuasi, chuchuasca (shipibo-conibo), chuchuhuasi, chuchuhuasha, chuchasha, 
                  chucchuahuashu.
                </p>
                <p>
                  <strong>Nombre científico:</strong> Maytenus macrocarpa.
                </p>
                <p>
                  <strong>DESCRIPCIÓN:</strong>
                </p>
                <p>
                  Árbol grande de hasta 35m de altura, de tronco grueso, erecto, con ramas verticiladas, bastante ramificado; 
                  de follaje verde claro. Hojas persistentes, alternas, enteras, de 10-20cm de largo. 
                </p>
                <p>
                  <strong>PROPIEDADES Y USOS:</strong>
                </p>
                <p>
                  La corteza se usa como anti disentérico, analgésico, como regulador menstrual y estomacal, antiinflamatorio, 
                  antitumoral, antihemorroidal, anti arrítmico, afrodisíaco, antirreumático, en el tratamiento de artritis 
                  reumatoide, leishmaniosis y bronquitis.
                </p>
                <p>
                  <strong>Características Técnicas Chuchuhuasi:</strong>
                </p>
                <p>
                  <strong>PRINCIPIO ACTIVO:</strong>
                </p>
                <p>
                  Alcaloides, Isoteropodina/ Uncarina E, Pteropodina/ Uncarina C, Isomitrafilina/ Ajmalicina - Oxindol A, Mitrafilina, 
                  Isorinchofilina, Rinchofilina, Uncarina F, Especiofilina/ Uncarina D. Acido Quinovico, Glicosidos, Flavonoides, 
                  Taninos, Vitaminas y Minerales (Calcio, fósforo, magnesio, potasio, sodio, manganeso). 
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <strong>CARACTERÍSTICAS TÉCNICAS:</strong><br>
                    Apariencia: Producto en polvo fino <br>
                    Color     : Característico (Marrón claro). <br>
                    Olor      : Característico. <br>
                    Sabor     : Característico (Amargo).
                  </div>
                  <div class="col-lg-6">
                    <strong>METALES PESADOS</strong><br>
                    Plomo (Como Pb)     : No más de 10 ppm <br>
                    Arsénico (Como As)  : No más de 3 ppm. <br>
                    Mercurio            : No más de 1 ppm. <br>
                    Cadmio              : No más de 1 ppm.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/arina-chuchuhuasi.jpg" alt="uña de gato">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/corteza-chuchuhuasi.jpg" alt="uña de gato">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tahuari">
          <div class="row">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong>INFORMACIÓN BÁSICA:</strong>
                  Insumo: Corteza trozada/ triturada/ pulverizada.
                <p>
                  <strong>Nombre comercial:</strong> Tahuari
                </p>
                <p>
                  <strong>Nombre común:</strong> Tahuari o Pau d' Arco
                </p>
                <p>
                  <strong>Nombre científico:</strong> Tabebuia Impetiginosa.
                </p>
                <p>
                  <strong>DESCRIPCIÓN:</strong>
                </p>
                <p>
                  Es un árbol de 8-10 m de altura. Las hojas de 10-15 cm de largo, compuestas y trifoliadas con foliolos 
                  elípticos. Las flores, grandes y amarillas de 8 cm de diámetro. El fruto que alcanza los 25 cm de largo 
                  tiene semillas aladas de color blanco. 
                </p>
                <p>
                  <strong>PROPIEDADES Y USOS:</strong>
                </p>
                <p>
                  Esta planta es usada para el fortalece el sistema inmunológico, antitumoral inmunológico, anti cancerígeno.
                </p>
                <p>
                  <strong>Características Técnicas Tahuari:</strong>
                </p>
                <p>
                  <strong>COMPOSICIÓN QUÍMICA:</strong>
                </p>
                <p>
                  Además del   Lapachol que es  común   a varias especies del género, se han encontrado  Cycloolivil, 
                  Lupenona, B-sitosterol, naphtaquinonas, antraquinonas y glucósidos iridoides entre otros un producto 
                  elaborado a partir de la corteza de la planta, ha sido patentado por un prestigioso  Laboratorio. <br>
                  Las investigaciones realizadas en la corteza de la planta, por eminentes profesionales investigadores; 
                  llevaron al descubrimiento de un sustancia  conocida hoy como Lapachol ( naphtoquinona) que posee 
                  excelentes propiedades farmacológicas y curativas entre las cuales está la capacidad de inhibir el 
                  crecimientos de tumores malignos y al mismo tiempo los reduce .
                </p>
                <p>
                  Otras especies medicinales: Tabebuia. Serratifolia   vahl (Tahuarí) y Tabebuia chrysantha (tahuarí negro). 
                  Ambas son también utilizadas por sus propiedades medicinales.
                </p>               
              </div>
            </div>
          </div>
          <div class="row row-2-unia">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/flor-tahuari.jpg" alt="uña de gato">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <img src="<?php echo IMAGE_PATH ?>/corteza-tahuari.jpg" alt="uña de gato">
            </div>
          </div>
        </div>
        <div class="tab-pane" id="graviola">
          <div class="row">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong>INFORMACIÓN BÁSICA:</strong>
                  Insumo: hojas/Atomizadas, pulverizadas.
                <p>
                  <strong>Nombre comercial:</strong> Graviola
                </p>
                <p>
                  <strong>Nombre común:</strong> guanábano, guanábana, corosol, corrosal, anón, cachimán, guanábana, masasamba.
                </p>
                <p>
                  <strong>Nombre científico:</strong> Annona muricata L.
                </p>
                <p>
                  <strong>DESCRIPCIÓN:</strong>
                </p>
                <p>
                  Árbol pequeño de 4 a 9 m de altura. Hojas simples, alternas, dísticas, pinnatinervias, de 6 a 20 cm 
                  de largo por 2.5 a 6 cm de ancho. Flores: solitarias, amarillo verdosas. Fruto: ovoide-elipsoide, de 
                  15 a 20 cm de largo x 10 a 15 cm de ancho, carnoso. 
                </p>
                <p>
                  <strong>PROPIEDADES Y USOS:</strong>
                </p>
                <p>
                  Las hojas de la Graviola por sus propiedades es usada como quimioterapia natural además de ser la mejor 
                  alternativa natural para combatir el cáncer, es antibacterial, antiparásitos, anti fungicida, desintoxica 
                  completamente el cuerpo y es hipotensiva.
                </p>
                <p>
                  <strong>Características Técnicas Graviola:</strong>
                </p>
                <p>
                  <strong>PRINCIPIO ACTIVO:</strong>
                </p>
                <p>
                  Alcaloides, ( Annonaceous Acetogenins ), Muricoreacin, Munhexocin C, Mono-tetrahydrofuran acetogenins, 
                  Annomuricin E, Miricapentocin. 
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <strong>CARACTERÍSTICAS TÉCNICAS:</strong><br>
                    Apariencia: Producto en polvo fino <br>
                    Color     : Característico. <br>
                    Olor      : Característico. <br>
                    Sabor     : Característico.
                  </div>
                  <div class="col-lg-6">
                    <strong>METALES PESADOS</strong><br>
                    Plomo (Como Pb)     : No más de 10 ppm <br>
                    Arsénico (Como As)  : No más de 3 ppm. <br>
                    Mercurio            : No más de 1 ppm. <br>
                    Cadmio              : No más de 1 ppm.
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="tab-pane" id="chancapiedra">
          <div class="row">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong>INFORMACIÓN BÁSICA:</strong>
                  Insumo: atomizado/pulverizada.
                <p>
                  <strong>Nombre comercial:</strong> ChancaPiedra
                </p>
                <p>
                  <strong>Nombre común:</strong> Chanca piedra, chancapiedra blanca, niruri, piedra con piedra, sacha foster, rosillo.
                </p>
                <p>
                  <strong>Nombre científico:</strong> Phyllanthus niruri L.
                </p>
                <p>
                  <strong>DESCRIPCIÓN:</strong>
                </p>
                <p>
                  Planta herbácea, silvestre, anual, de unos 30 a 60 cm de altura, tallo erguido; hojas de 7-12cm de 
                  largo, alternas, sésiles oblongas; flores pequeñas de color blanquecino-verdoso, apétalas monóicas; 
                  frutos de 2-3mm de diámetro. 
                </p>
                <p>
                  <strong>PROPIEDADES Y USOS:</strong>
                </p>
                <p>
                  Las hojas tienen propiedades Antiinflamatorias, cicatrizantes, diuréticos, digestivas, emenagogos, 
                  antihelmínticas, galactagogas en cálculos biliares.
                </p>
                <p>
                  <strong>Características Técnicas Chancapiedra:</strong>
                </p>
                <p>
                  <strong>PRINCIPIO ACTIVO:</strong>
                </p>
                <p>
                  Alcaloides, Esteroides, Flavonoides, Triterpenos, Terpenos, Lignanos, Salicilato de metilo, 
                  Taninos, Vitamina C, Lípidos ( Acido linoleico, ácido linolenico, etc. ), Acido carboxilico, 
                  Astralgina, Nirantina, Nirurina, etc. 
                </p>
                <div class="row">
                  <div class="col-lg-6">
                    <strong>CARACTERÍSTICAS TÉCNICAS:</strong><br>
                    Apariencia: Producto en polvo fino <br>
                    Color     : Característico. <br>
                    Olor      : Característico. <br>
                    Sabor     : Característico.
                  </div>
                  <div class="col-lg-6">
                    <strong>METALES PESADOS</strong><br>
                    Plomo (Como Pb)     : No más de 10 ppm <br>
                    Arsénico (Como As)  : No más de 3 ppm. <br>
                    Mercurio            : No más de 1 ppm. <br>
                    Cadmio              : No más de 1 ppm.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="clavo">
          <div class="row">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong>INFORMACIÓN BÁSICA:</strong>
                  Insumo: Corteza pulverizada.
                <p>
                  <strong>Nombre comercial:</strong> Clavo Huasca
                </p>
                <p>
                  <strong>Nombre común:</strong> Canela, inejkeu, rabo nishi (shipibo-conibo).
                </p>
                <p>
                  <strong>Nombre científico:</strong> Tynnanthus panurensis.
                </p>
                <p>
                  <strong>DESCRIPCIÓN:</strong>
                </p>
                <p>
                  La planta es un bejuco rastrero. Presenta lenticelas oscuras. Hojas con 2 a 3 foliolos y un zarcillo, 
                  de forma elíptica u oblongo elíptica, de ápice acuminado o agudo y base redondeada truncada. 
                  Inflorescencias axilares en panículas, brácteas con tricomas diminutos y escamas. 
                </p>
                <p>
                  <strong>PROPIEDADES Y USOS:</strong>
                </p>
                <p>
                  Es usado como digestivo, para fiebres, para reumatismo y artritis y como tónico y calmante muscular 
                  (tonifica, equilibra y fortalece las funciones corporales en general). Junto con otras cortezas, 
                  sirve para elaborar los licores amazónicos.
                </p>
                <p>
                  <strong>Características Técnicas Clavo Huasca:</strong>
                </p>
                <p>
                  <strong>COMPOSICIÓN:</strong>
                </p>
                <p>
                  Ácidos fijos fuertes, auronas, bases cuaternarias, chalconas, esteroides, fenoles simples, 
                  flavanonas, heterópsidos cianogénicos, leucoantocianidinas, taninos pirogálicos, eugenol y 
                  resinas. 
                </p>                
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="jergon">
          <div class="row">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong>INFORMACIÓN BÁSICA:</strong>
                  Partes utilizadas: planta <br>
                  Insumo: pulverizado.
                <p>
                  <strong>Nombre comercial:</strong> Jergon Sacha
                </p>
                <p>
                  <strong>Nombre común:</strong> Hierba de jergón; Sacha jergón; Hurignpe (amarakaeri), Mágoro (machiguenga).
                </p>
                <p>
                  <strong>Nombre científico:</strong> Dracontium loretense Krause.
                </p>
                <p>
                  <strong>DESCRIPCIÓN:</strong>
                </p>
                <p>
                  Arbusto de 40 centímetros de largo que emergen de un tallo coloreado como el de los dibujos del 
                  cuerpo de la serpiente Jergón, le debe la mitad de su nombre a este ofidio. Ya que el vocablo 
                  Jergón unido a la palabra Sacha, significa en quechua “casi igual a una serpiente Jergón”. 
                </p>
                <p>
                  <strong>PROPIEDADES Y USOS:</strong>
                </p>
                <p>
                  Permite revertir las infecciones bacterianas asociadas al VIH, sirviendo como un gran estimulante 
                  inmunológico y antiviral. Constituye también un potente anticanceroso, antitumoral y antiinflamatorio.
                </p>
                <p>
                  <strong>Características Técnicas Jergon Sacha:</strong>
                </p>
                <p>
                  <strong>Composición Química del Jergón Sacha</strong>
                </p>
                <p>
                  Dentro de los compuestos químicos del cormo desecado destacan los alcaloides, saponinas, 
                  cumarinas,  azúcares reductores, saponinas, mucílagos, flavonoides y glucósidos, asimismo, 
                  en el extracto liofilizado se han encontrado: alcaloides, azúcares reductores, saponinas, 
                  flavonoides y glucósidos.
                </p>
               
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="ubos">
          <div class="row">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong>INFORMACIÓN BÁSICA:</strong>
                  Parte utilizada: tallos,raiz,corteza. <br>
                  Insumo: trozado. Micro pulverizado
                <p>
                  <strong>Nombre comercial:</strong> Abuta
                </p>
                <p>
                  <strong>Nombre común:</strong> Abuta, chancabexus, caimitillo, motelo sanango.
                </p>
                <p>
                  <strong>Nombre científico:</strong> Abuta grandifolia (Mart.) Sandw.
                </p>
                <p>
                  <strong>DESCRIPCIÓN:</strong>
                </p>
                <p>
                  Liana alta, dioica, tiene un tallo más o menos aplastado, que crece en espiral. 
                  Sus hojas son simples, alternas, de un verde pálido. Las nervaduras son palmadas. 
                  Las inflorescencias son en panículas de 2 a 8 cm de longitud. 
                </p>
                <p>
                  <strong>PROPIEDADES Y USOS:</strong>
                </p>
                <p>
                  La raíz se indica como anti anémico, antihemorrágico menstrual y antirreumático, el 
                  tallo para cólicos menstruales y como hipocolesterolémiante, antiinflamatorio y afrodisíaco, 
                  la corteza se usa sobre todo como anti malario. Es reguladora del sistema digestivo.
                </p>
                <p>
                  <strong>Características Técnicas Abuta:</strong>
                </p>
                <p>
                  <strong>Composición</strong>
                </p>
                <p>
                  Alcaloides bencil isoquinolínicos, palmitina2 y otros derivados como gradirubrine, 
                  imerubrine e isomerubrine) (Torres y Rico, 1994).
                </p>
                <p>
                  Alcaloides bisbenzylisoquinolina: Krukovine, limacine 22 <br>
                  Flavonoides: Flavonas, 4,7-dihidroxiflavanonanol13. <br>
                  Saponinas. <br>
                  Terpenos. <br>
                  Taninos.

                </p>
               
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="palo">
          <div class="row">
            <div class="col-lg-12">
              <div class="prod_desc">
                <p>
                  <strong>INFORMACIÓN BÁSICA:</strong>
                  Insumo: madera trozada o cortada.
                <p>
                  <strong>Nombre comercial:</strong> Palo Santo
                </p>
                <p>
                  <strong>Nombre común:</strong> Palo santo, madera sagrada, quebracho.
                </p>
                <p>
                  <strong>Nombre científico:</strong> Bursera graveolens
                </p>
                <p>
                  <strong>DESCRIPCIÓN:</strong>
                </p>
                <p>
                  De unos 18 metros de altura, es un árbol mediano con 
                  copa de hojas pequeñas, gran cantidad de ramas y frutos en forma de capsula color verde oscuro.   
                </p>
                <p>
                  <strong>PROPIEDADES Y USOS:</strong>
                </p>
                <p>
                  Al combustionar, desprende un humo que  tiene una serie de propiedades espirituales, 
                  que lo hacen ideal para la meditación, relajación, armonía en los encuentros íntimos 
                  de pareja, relajar situaciones de tensión dentro de una familia, etc. También su humo 
                  mágico se puede utilizar para limpiar de energías negativas de nuestra vivienda, 
                  habitaciones, oficina, etc.
                </p>
                <p>
                  <strong>Características Técnicas Palo Santo:</strong>
                </p>
                <p>
                  Acertadamente el árbol fue bautizado  como Bursera Graveloens, nombre científico que significa “bolsa llena de aceite’’.
                </p>
                <p>
                  Los estudios realizados han demostrado que en  su composición química se encuentran elementos antigripales (Alfa-Pinene), 
                  antisépticos (Terminen-4-OL), sedantes (Carvone, que también es insecticida) y antivirales (Sesquiterpeno), 
                  entre otros. Por ello, y con justa razón muchos afirman que ésta es una verdadera fuente de medicina natural.
                </p>
                <p>
                  Pero eso no es todo, además de los componentes ya nombrados, existe uno que destaca del resto. Estamos 
                  hablando  del Limonene, cuyo 62,88% de presencia en el palo santo podría ayudar a prevenir tumores de 
                  estómago, hígado, mama y piel, todo esto como parte de sus propiedades de limpieza, tanto física como 
                  espiritual.
                </p>               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


