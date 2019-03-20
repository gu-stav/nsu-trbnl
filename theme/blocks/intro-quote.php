<?php

  $image = get_field('image');
  $quote = get_field('quote');
  $author = get_field('quote_author');
  $author_info = get_field('quote_author');

?>

<div class="intro">
  <?php echo wp_get_attachment_image($image, 'full-width', false, [
    'class' => 'image intro__image'
  ]); ?>

  <div class="intro__content-container constraint">
    <?php
      get_component('/template-parts/quote/quote', [
        'text' => $quote,
        'author' => $author,
        'author_info' => $author_info
      ]);
    ?>
  </div>
</div>
