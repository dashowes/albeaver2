<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta name="author" content="Al Beaver">
  <link rel="shortcut icon" type="image/ico" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen">
  <?php wp_head(); ?>
  <title><?php the_title(); ?> | Al Beaver</title>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body <?php body_class(); ?>>

  <header id="page-header" class="cf">
    <div class="inner-wrap pad20">

      <div class="mobile-only align-right">
        <span class="menu-trigger"></span>
      </div>



      <nav id="top-nav" class="mob-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primarynav-menu' ) ); ?>
      </nav>
    </div> <!-- /.inner-wrap -->
  </header> <!-- /#page-header -->
