<?php
  $image = get_sub_field('image');
  $caption = wp_get_attachment_caption($image);
?>

<figure class="figure">
  <?php echo wp_get_attachment_image($image, 'half-width', false, [
    'class' => 'image'
  ]); ?>

  <?php if($caption): ?>
    <figcaption class="figure__caption">
      <?php echo $caption; ?>
    </figcaption>
  <?php endif; ?>
</figure>
