<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">       

        <!-- S T Y L E S - G E N E R A L -->
        <meta name="theme-color" content="#712a81" />
        <?php wp_head(); ?>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script>
            var siteURL = '<?php echo esc_url(site_url('')); ?>';
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-192996493-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-192996493-1');
        </script>

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '125220919467946');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=125220919467946&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-T44D9WX');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body <?php body_class('is-preload'); ?> style="display: none;">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T44D9WX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
        <!-- <div class="langContent">
          <?php if (function_exists('pll_register_string')) :
            $translationsTwo = pll_the_languages( array( 'raw' => 1, 'show_flags' => 1, 'hide_if_empty'=>'0' ) );
            $arra = array('ES', 'EN', 'PT');
            $ii = 0;
          ?>
          <ul class="listLang">
          <?php foreach($translationsTwo as $keys => $values):
            $transle = $values['no_translation'];
            $current = $values['current_lang'];
          ?>
          <?php if($transle != true) : ?>
            <li class="listLang__item listLang__item<?php if($current == 1) { echo '--activo'; } ?>"><a href="<?php echo $values['url']; ?>"><?php echo $arra[$ii]; ?></a></li>
          <?php endif; ?>
          <?php $ii++; endforeach; ?>
          </ul>
          <?php
            endif;
          ?>
        </div> -->
        <a href="#menu" data-menu-expand="#menu"><?php _e('Menú', 'equality-child'); ?></a>
      </nav>
    </header><!-- end.header -->

    <!-- Menu -->
    <nav id="menu">
      <div class="inner">
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
