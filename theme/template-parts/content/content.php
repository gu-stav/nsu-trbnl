<?php

  $has_parent = get_current_page_depth() >= 2;

?>

<main class="content">
  <?php if ($has_parent) : ?>
    <h1 class="content__title">
      <?php the_title(); ?>
    </div>
  <?php endif; ?>

  <?php the_content(); ?>
</main>
