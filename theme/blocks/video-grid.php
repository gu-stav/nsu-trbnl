<?php
  $videos = get_field('videos');
?>

<div class="constraint">
  <ul class="video-grid">
    <?php foreach($videos as $video) : ?>
      <li class="video">
        <strong><?php echo $video['title']; ?></strong>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
