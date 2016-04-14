<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
    </title>

    <?php wp_head(); ?>
  </head>

  <body>

      <section class="logo">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <a href="<?php bloginfo('url'); ?>"><img class="center-block" src="<?php bloginfo('template_directory');?>/images/logo_connectite.png" alt=""></a>
        </div>

        </div>
        </div>


        <div class="small-logo-wrap">
          <div class="left-logo">
            <img src="<?php bloginfo('template_directory');?>/images/logo_usa.png" alt="">
            </div>
          <div class="right-logo">
            <img src="<?php bloginfo('template_directory');?>/images/logo_nse.png" alt="">
          </div>
        </div>
    </section>

    <nav class="navbar navbar-default">
      <div class="container connectite-nav">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="sr-only">Toggle navigation</span>
          </button>
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

