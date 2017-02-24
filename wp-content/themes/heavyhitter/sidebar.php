<div id="right-sidebar">
  <h3>Recent Posts</h3>
  <?php
    query_posts('post_type=post&post_status=publish&posts_per_page=5');

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-excerpt cf">
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt('read more'); ?>
      </article> <!-- /.article-excerpt -->
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php
    endif;
    wp_reset_query();
  ?>
  <p class="align-right"><a href="/blog">view all posts</a></p>
</div>
