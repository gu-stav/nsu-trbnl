<?php

  $videos = get_field('videos');

?>

<ul class="grid grid--items-<?php echo sizeof($videos); ?>">
  <?php while (have_rows('videos') ) : the_row(); ?>
    <li class="grid__item">
      <?php get_template_part('template-parts/videos/video'); ?>
    </li>
  <?php endwhile; ?>
</ul>
