<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">       

        <!-- S T Y L E S - G E N E R A L -->
        <?php wp_head(); ?>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script>
            var siteURL = '<?php echo esc_url(site_url('')); ?>';
        </script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=XX"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
      
        gtag('config', 'XXX');
      </script> -->
    </head>
    <body <?php body_class('is-preload'); ?> style="display: none;">

    <div class="overProgress fadeX"></div>

    <div id="blockhh" class="head-block"></div>

    <!-- Header -->
    <header id="headerGeneral" class="g-header" data-blur-content>
      <!-- <a href="index.html" class="brand">
        <img src="assets/img/logos/queality_logo.svg" alt="Equality Company">
        <h1 class="site-title">Equality Company</h1>
      </a> -->
      <div class="brand">
<?php
      the_custom_logo();
  if (is_page(39)) :
?>
      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<?php else : ?>
      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
<?php
  endif;
?>
      </div>
      <nav class="btnNav">
        <div class="langContent">
          <ul class="listLang">
            <li class="listLang__item listLang__item--activo"><a href="">ES</a></li>
            <li class="listLang__item"><a href="">EN</a></li>
            <li class="listLang__item"><a href="">PR</a></li>
          </ul>
        </div>
        <a href="#menu" data-menu-expand="#menu"><?php _e('Menú', 'equality-child'); ?></a>
      </nav>
    </header><!-- end.header -->

    <!-- Menu -->
    <nav id="menu">
      <div class="inner">
        <!-- <ul class="links">
          <li class="item-menu"><a href="index.html">Inicio</a></li>
          <li class="item-menu"><a href="quienes-somos.html">Equality</a></li>
          <li class="item-menu item-menu-dropdown">
            <a href="#">Soluciones</a>
            <div class="dropdownMenu">
              <ul class="dropList">
                <li class="dropList__item"><a href="quienes-somos.html">Servicio uno</a></li>
                <li class="dropList__item"><a href="quienes-somos.html">Servicio uno</a></li>
                <li class="dropList__item"><a href="quienes-somos.html">Servicio uno</a></li>
              </ul>
            </div>
          </li>
        </ul> -->
<?php
      wp_nav_menu( array(
        'items_wrap'     => '<ul class="links">%3$s</ul>',
        'theme_location' => 'menu-main',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'before'          => '',
        'after'           => '',
      ) );
?>
        <ul class="actions stacked">
          <a class="btnFx btnFx__generic btnFx__generic--orange" href="<?php echo esc_url(site_url('')); ?>/contacto"><span><?php _e('Contacto', 'equality-child'); ?></span></a>
        </ul>
      </div>
      <a class="close" href="#menu"><?php _e('Cerrar', 'equality-child'); ?></a>
    </nav>
    
    <!-- Main -->
    <main class="PageContainer" data-blur-content>
      <div id="primary" class="content-area">
