<?php
  $video_id = get_sub_field('youtube_video_id');
  $image = get_sub_field('preview_image');
  $caption = get_sub_field('caption');
?>

<figure class="figure figure--is-video">
  <a href="https://www.youtube.com/watch?v=<?php echo $video_id; ?>">
    <?php echo wp_get_attachment_image($image, 'half-width', false, [
      'class' => 'image'
    ]); ?>
  </a>

  <?php if($caption): ?>
    <figcaption class="figure__caption">
      <div class="figure__caption-container">
        <?php echo $caption; ?>
      </div>

      <strong>PLAY</strong>
    </figcaption>
  <?php endif; ?>
</figure>
