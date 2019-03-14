<?php get_header(); ?>

<?php get_template_part('template-parts/header/header'); ?>

<?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      get_template_part('template-parts/content/content');
    }
  } else {
    get_template_part('template-parts/content/content', 'none');
  }
?>

<?php get_footer(); ?>
