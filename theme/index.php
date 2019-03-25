<?php

  $has_parent = get_current_page_depth() >= 2;

  if ($has_parent) {
    $modifier = 'has-parent';
  } else {
    $modifier = 'has-no-parent';
  }

?>

<?php get_header(); ?>

<div class="site site--<?php echo $modifier; ?>">
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
</div>

<?php wp_footer(); ?>

</body>
</html>
