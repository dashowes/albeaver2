 <?php /*
Template Name: Right Sidebar
*/ ?>

<?php define('WP_USE_THEMES', true); get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="content-wrapper">

      <div class="inner-wrap lightbg shadow cf">

        <div class="pad20">
          <h1><?php the_title(); ?></h1>
        </div>

      </div>

      <div class="inner-wrap darkbg shadow pad20 cf">

        <div class="col8 last">

        <article class="article-wrap cf">

            <?php the_content();?>

        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

        </article> <!-- /.article-wrap -->


      </div> <!-- /.col8.last -->

      <div class="col4">
          <?php get_sidebar(); ?>
        </div> <!-- /.col4 -->

    </div> <!-- /.inner-wrap -->



  </div> <!-- /.content-wrapper -->

  <?php get_footer(); ?>
