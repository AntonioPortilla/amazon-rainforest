<?php
	require_once 'libs/lang/es.php';
	require_once 'libs/lang/en.php';
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
	//define('URL_PRIVATE', ROOT_PATH.'/dante/amazon-rainforest');	
	//define('APP_DOMAIN', 'http://localhost/dante/amazon-rainforest');
	
	define('URL_PRIVATE', ROOT_PATH.'/portfolio/amazon-rainforest');	
	define('APP_DOMAIN', 'http://agenciamayor.com/portfolio/amazon-rainforest');
	define('TPL_PATH', URL_PRIVATE.'/public/tpl');
	define('CSS_PATH', APP_DOMAIN.'/public/css');
	define('IMAGE_PATH', APP_DOMAIN.'/public/images');
	define('JS_PATH', APP_DOMAIN.'/public/js');	
?>