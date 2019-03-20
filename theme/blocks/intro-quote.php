<?php
  $quotes = get_field('quotes');
  $select = rand(0, sizeof($quotes) - 1);
  $count = 0;
?>

<div class="intro intro--orientation-landscape">
  <?php
    while (have_rows('quotes')) :
      the_row();

      $image = get_sub_field('image');
      $quote = get_sub_field('text');
      $author = get_sub_field('author');
      $author_info = get_sub_field('author_info');

      if ($count == $select) :
  ?>
    <div class="intro__image-container">
      <?php
        echo wp_get_attachment_image($image, 'full-width', false, [
          'class' => 'image intro__image'
        ]);
      ?>
    </div>

    <div class="intro__content-container constraint">
      <?php
        get_component('/template-parts/quote/quote', [
          'text' => $quote,
          'author' => $author,
          'author_info' => $author_info
        ]);
        ?>
    </div>

  <?php
      endif;
      $count = $count + 1;
    endwhile;
  ?>
</div>
