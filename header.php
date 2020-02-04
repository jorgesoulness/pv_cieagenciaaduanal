<?php
//Eliminar cuando se integre en FrameWork o CMS
require_once('functions.php');
?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CIE Logistics | <?php echo TituloSecciones(); ?></title>
        <meta name="keywords" content="agencia, aduanal, mexicana, internacional, barcos, transporte, maritimo, transporte, terrestre, importación, exportación, importaciones, exportaciones, logística">
        <meta name="description" content="Sómos una Agencia Aduanal de Logística Internacional en tiempo y forma.">
        <meta name="author" content="<?php get_template_directory_uri(''); ?>humnas.txt">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="<?php echo get_site_url(); ?>" />
        <link rel='shortlink' href='<?php echo get_site_url(); ?>' />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <meta property="og:locale" content="es_ES" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Inicio | CIE Logistica" />
        <meta property="og:url" content="<?php echo get_site_url(); ?>" />
        <meta property="og:site_name" content="CIE Logistica" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Inicio | CIE Logistica" />
        <meta name="twitter:site" content="@cielogisticaMx" />
        <meta name="twitter:creator" content="@cielogisticaMx" />

        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(''); ?>favicon240.png">
		    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(''); ?>favicon.png">
		    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(''); ?>favicon.ico">

        <!-- S T Y L E S - G E N E R A L -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/style.min.css?v=<?php echo rand(); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/vendor/animate.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/vendor/hover-min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(''); ?>assets/css/nprogress.css">
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>var siteURL = '<?php echo get_site_url(); ?>';</script>

    </head>
    <body class="<?php echo classPage(); ?>" style="display: none;">

      <div class="overProgress fadeX"></div>
    
        <header id="headerGeneral" class="g-header">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-6 col-md-6 col-lg-3">
                <div class="brand">
                  <a href="<?php echo site_url(''); ?>">
                    <img src="<?php echo get_template_directory_uri(''); ?>assets/img/logos/LOGO_LOGISTICA_CIE-01.svg" alt="">
                    <h1 class="site-title">CIE Logistics</h1>
                  </a>
                </div>
              </div>
              <div class="col-lg-9 d-none d-lg-block">
                <div class="menuMain">
                  <nav class="menuDesk">
                    <ul id="md">
                      <li><a href="#unicos">Únicos</a></li>
                      <li><a href="#estudio">Estudio</a></li>
                      <li><a href="#contacto">Contacto</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="col-6 col-md-6 d-block d-lg-none">
                <div class="toolsHead">
                  <button type="button" id="openMenuMobile" class="menu-mobile-btn" onClick="menuMobile()" data-menu-expand="false">
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </header><!-- end.Header -->

        <a data-modal-id="#modalInfo" data-open-modal href="#" class="btnLets">Let's Talk</a>

        <!-- MenuMobile -->
        <div id="mm" class="cont-menu-mobile" data-menu-expand="false">
          <div id="contListMenu" class="mnuContMob">

          </div>
        </div>
        <!-- end.MenuMobile -->

        <main>
          <div id="primary" class="content-area">
        