<?php
  $has_parent = boolval($post->post_parent);

  if ($has_parent) {
    $modifier = 'has-parent';
  } else {
    $modifier = 'has-no-parent';
  }
?>

<main class="content content--<?php echo $modifier; ?>">
  <?php if ($has_parent) : ?>
    <h1 class="content__title">
      <?php the_title(); ?>
    </div>
  <?php endif; ?>

  <?php the_content(); ?>
</main>
