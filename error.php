<?php 
require_once 'arp-defines.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Amazon Rainforest Produtcs, Abuta, Chancapiedra, Chuchuhuasi, Plantas medicinales, Hierbas, herbs, Amazonia, amazonianherbs">
  <meta name="author" content="JALP">
  <link rel="icon" href="<?php echo APP_DOMAIN ?>/favicon.ico">
  <title>Error!!!</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo CSS_PATH; ?>/styles.min.css">  
</head>
<body class="error">
<div class="container error">
	<div class="jumbotron contenido">		
		<div class="alert alert-danger peligro" role="alert">
			<h1>
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>				
				<span class="sr-only">Error:</span>
				<strong>Error</strong>
			</h1>
			<h2><strong>La dirección URL es inválida!!!</strong></h2>
		</div>	 
		<p><a class="btn btn-primary btn-lg" href="<?php echo APP_DOMAIN ?>" role="button">Volver</a></p>
	</div>
</div>
</body>
</html>