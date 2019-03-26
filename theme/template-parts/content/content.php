<?php

  $has_parent = get_current_page_depth() >= 2;

?>

<main class="content">
  <?php if ($has_parent) : ?>
    <div class="constraint">
      <h1 class="content__title">
        <?php the_title(); ?>
      </h1>
    </div>
  <?php endif; ?>

  <?php the_content(); ?>
</main>
