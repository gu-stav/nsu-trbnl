<?php
  $video_id = get_sub_field('youtube_video_id');
  $image = get_sub_field('preview_image');
  $caption = get_sub_field('caption');
?>

<figure class="figure figure--is-video">
  <a href="https://www.youtube.com/watch?v=<?php echo $video_id; ?>"
     data-video-id="<?php echo $video_id; ?>"
     class="figure__inner-link js-video">

    <?php
      echo wp_get_attachment_image($image, 'half-width', false, [
        'class' => 'image'
      ]);
    ?>
  </a>

  <figcaption class="figure__caption">
    <div class="figure__caption-container">
      <?php echo $caption; ?>
    </div>

    <a href="https://www.youtube.com/watch?v=<?php echo $video_id; ?>" class="figure__play" rel="nofollow">
      <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
        <circle cx="32" cy="32" r="31.3" fill="currentColor" stroke="currentColor" stroke-width="1.5" class="figure__play-svg-circle" />
        <path fill="#000" d="M23.3 49.5L46.5 32 23.3 14.5z" class="figure__play-svg-triangle" />
      </svg>
    </a>
  </figcaption>
</figure>
