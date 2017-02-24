<?php define('WP_USE_THEMES', true); get_header(); ?>

  <div class="content-wrapper">

    <div class="inner-wrap lightbg shadow cf">

      <div class="col8 pad20">
        <h2 class="big">A real heavy hitter.</h2>
        <h2 class="notasbig">Music.</h2>
        <h2 class="notasbig">Politics.</h2>
        <h2 class="notasbig">Fitness.</h2>
        <h2 class="notasbig">Leisure.</h2>
      </div>
 
      <div class="col4 last">
        <img src="<?php bloginfo('template_directory'); ?>/images/marinacity.jpg" alt="Marina City" class="force-block">
      </div>

    </div>

    <div class="inner-wrap darkbg shadow pad20">

      <?php
      query_posts('post_type=post&post_status=publish&posts_per_page=1&orderby=rand&paged='.get_query_var('pages'));
      if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="article-wrap cf">
          <?php the_content(); ?>
        </article> <!-- /.article-wrap -->

      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
      <?php endif; ?>

    </div> <!-- /.inner-wrap -->

  </div> <!-- /.content-wrapper -->

  <?php get_footer(); ?>
