<?php

  $image = get_field('image');
  $title = get_field('title');
  $subtitle = get_field('subtitle');

?>

<div class="intro">
  <?php echo wp_get_attachment_image($image, false, false, [
    'class' => 'image intro__image'
  ]); ?>

  <div class="intro__content-container constraint">
    <h1 class="headline headline--as-h1">
      <?php echo $title ?>

      <?php if($subtitle): ?>
        <small class="headline headline--as-h2">
          <?php echo $subtitle; ?>
        </small>
      <?php endif; ?>
    </h1>
  </div>
</div>
