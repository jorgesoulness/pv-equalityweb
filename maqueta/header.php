<?php
//Eliminar cuando se integre en FrameWork o CMS
require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Equality Company | <?php echo TituloSecciones(); ?></title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="<?php get_template_directory_uri(''); ?>humnas.txt">
        <meta name="robots" content="index, follow">
	      <link rel="alternate" hreflang="es-mx" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(''); ?>favicon.ico.png">
		    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(''); ?>favicon.ico.png">
		    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(''); ?>favicon.ico.png">

        <!-- S T Y L E S - G E N E R A L -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/style.min.css?ver=<?php echo rand(); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/vendor/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/vendor/hover-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/nprogress.css">
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>var siteURL = '<?php echo get_site_url(); ?>';</script>

    </head>
    <body class="<?php echo classPage(); ?> is-preload" style="display: none;">

      <div class="overProgress fadeX"></div>
      
      <div id="blockhh" class="head-block"></div>
    
      <!-- Header -->
				<header id="headerGeneral" class="g-header" data-blur-content>
					<a href="<?php echo site_url(''); ?>" class="brand">
            <img src="<?php echo get_template_directory_uri(''); ?>assets/img/logos/queality_logo.svg" alt="Equality Company">
            <h1 class="site-title">Equality Company</h1>
          </a>
					<nav class="btnNav">
            <div class="langContent">
              <ul class="listLang">
                <li class="listLang__item listLang__item--activo"><a href="">ES</a></li>
                <li class="listLang__item"><a href="">EN</a></li>
                <li class="listLang__item"><a href="">PR</a></li>
              </ul>
            </div>
						<a href="#menu" data-menu-expand="#menu">Menu</a>
					</nav>
				</header><!-- end.header -->  

			<!-- Menu -->
				<nav id="menu">
					<div class="inner">
            <ul class="links">
              <li class="item-menu"><a href="#">Inicio</a></li>
              <li class="item-menu"><a href="#">Equality</a></li>
              <li class="item-menu item-menu-dropdown">
                <a href="#">Soluciones</a>
                <div class="dropdownMenu">
                  <ul class="dropList">
                    <li class="dropList__item"><a href="">Servicio uno</a></li>
                    <li class="dropList__item"><a href="">Servicio uno</a></li>
                    <li class="dropList__item"><a href="">Servicio uno</a></li>
                  </ul>
                </div>
              </li>
            </ul>
            <ul class="actions stacked">
              <a class="btnFx btnFx__generic btnFx__generic--orange" href="#"><span>Contacto</span></a>
            </ul>
          </div>
          <a class="close" href="#menu">Close</a>
				</nav>

      <!-- Main -->
        <main class="PageContainer" data-blur-content>
          <div id="primary" class="content-area">
        