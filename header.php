<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-1591740-10', 'auto');
      ga('send', 'pageview');
    </script>

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
    </title>

    <?php wp_head(); ?>
  </head>

  <body>

    <section class="logo">
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-md-offset-4 hidden-sm hidden-xs">
            <a href="<?php bloginfo('url'); ?>"><img class="center-block" src="<?php bloginfo('template_directory');?>/images/logo_connectite.png" alt="Connectite"></a>
          </div>

          <div class="col-md-4 hidden-sm hidden-xs">
            <div class="small-logo-wrap">
                <div class="left-logo">
                  <img src="<?php bloginfo('template_directory');?>/images/logo_usa.png" alt="">
                </div>
                <div class="right-logo">
                  <img src="<?php bloginfo('template_directory');?>/images/logo_nse.png" alt="">
                </div>
            </div>
          </div>

          <div class="col-sm-2 hidden-xs hidden-md hidden-lg">
            <div class="small-logo-wrap">
              <div class="left-logo">
                  <img src="<?php bloginfo('template_directory');?>/images/logo_nse.png" alt="">
              </div>
            </div>
          </div>

          <div class="col-sm-8 col-xs-12 hidden-md hidden-lg">
            <a href="<?php bloginfo('url'); ?>"><img class="center-block" src="<?php bloginfo('template_directory');?>/images/logo_connectite.png" alt="Connectite"></a>
          </div>

          <div class="col-sm-2 hidden-xs hidden-md hidden-lg">
            <div class="small-logo-wrap">
              <div class="right-logo">
                <img src="<?php bloginfo('template_directory');?>/images/logo_usa.png" alt="">
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- logo section close --> 

    <nav class="navbar navbar-default">
      <div class="container connectite-nav">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="sr-only">Toggle navigation</span>
          </button>
          <div class="hidden-lg hidden-md m-label">
            <p>Menu</p>
          </div>
        </div>

          <div id="navbar" class="navbar-collapse collapse">
          <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'menu_class'        => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
          ?>
          </div><!--/.nav-collapse -->
               
        </div>
      </nav> <!-- Bootstrap Nav Close -->

