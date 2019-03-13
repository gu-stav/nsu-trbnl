<?php

  $title = get_field('title');
  $text = get_field('text');
  $target = get_field('target');
  $button_label = get_field('button_label');

?>

<div class="teaser">
  <div class="teaser__title-container">
    <h2 class="headline headline--as-h2">
      <a href="<?php echo $target; ?>">
        <?php echo $title; ?>
      </a>
    </h2>
  </div>

  <div class="constraint">
    <?php if($text): ?>
      <div class="richtext"><?php echo $text; ?></div>
    <?php endif; ?>

    <div class="teaser__cta">
      <a href="<?php echo $target; ?>" class="btn">
        <?php echo $button_label; ?>
      </a>
    </div>
  </div>
</div>
