<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta name="author" content="Glenn Hodgkinson">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen">
  <title><?php wp_title(); ?> | Glenn Hodgkinson</title>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header id="page-header" class="cf">
    <div class="inner-wrap pad20">
      <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo-long.png" class="logo float-left"></a>

      <div class="mobile-only align-right">
        <span class="menu-trigger"></span>
      </div>



      <nav id="top-nav" class="mob-menu">
          <ul id="menu-main-nav" class="menu">
            <li><a href="about">About</a>
            </li>
          </ul>
      </nav>
    </div> <!-- /.inner-wrap -->
  </header> <!-- /#page-header -->

  <div class="content-wrapper">

    <div class="inner-wrap whitebg shadow pad20">


        <article class="article-wrap cf">
          <?php

            if (have_posts()) :
               while (have_posts()) :
                  the_post();
                    the_title('<h3>', '</h3>');
                    the_content();
               endwhile;
            endif;

            query_posts('post_type=post & posts_per_page=1 & orderby=rand');

            if (have_posts()) :
               while (have_posts()) :
                  the_post();
                    the_title('<h3>', '</h3>');
                    the_content();
               endwhile;
            endif;
            wp_reset_query();

          ?>
        </article> <!-- /.article-wrap -->


    </div> <!-- /.inner-wrap -->

  </div> <!-- /.content-wrapper -->

  <div id="page-footer" class="inner-wrap">
        <p class="align-center">&copy;2014 Glenn Hodgkinson</p>
  </div>

  <script>
      jQuery(".menu-trigger").click(function () {
        jQuery(".mob-menu").slideToggle("fast");
      });
  </script>
<?php wp_footer(); ?>
</body>

</html>
