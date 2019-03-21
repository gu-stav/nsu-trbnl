<?php

  $title = get_field('title');
  $text = get_field('text');

?>

<div class="constraint">
  <?php
    get_component('/template-parts/info/info', [
      'title' => $title,
      'text' => $text
    ]);
  ?>
</div>
