<?php get_header(); ?>

<main class="site-main">
  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        get_template_part('template-parts/content/content');
      }
    } else {
      get_template_part('template-parts/content/content', 'none');
    }
  ?>
</main>

<?php get_footer(); ?>
