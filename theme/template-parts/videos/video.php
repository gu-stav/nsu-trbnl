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

    <figcaption class="figure__caption">
      <div class="figure__caption-container">
        <?php echo $caption; ?>
      </div>

      <svg aria-hidden="true" focusable="false" class="figure__play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z"></path>
      </svg>
    </figcaption>
  </a>

  <div class="dialog js-dialog">
    <div class="dialog__overlay" tabindex="-1" data-a11y-dialog-hide></div>

    <dialog class="dialog__content">
      <button type="button" class="dialog__close" data-a11y-dialog-hide aria-label="Dialog schließen">
        &times;
      </button>

      <div class="responsive-video">
        <iframe
          src="https://www.youtube-nocookie.com/embed/<?php echo $video_id; ?>?rel=0&autoplay=1&modestbranding=1&showinfo=0"
          frameborder="0"
          allowfullscreen></iframe>
      </div>
    </dialog>
  </div>
</figure>
