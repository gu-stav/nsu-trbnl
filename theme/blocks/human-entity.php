<?php

  $title = get_field('title');
  $text = get_field('text');

?>

<div class="human-entity">
  <strong class="human-entity__title">
    <div class="constraint">
      <span class="human-entity__title-text">
        <?php echo $title; ?>
      </span>
    </div>
  </strong>

  <div class="constraint">
    <div class="richtext">
      <?php echo $text; ?>
    </div>
  </div>
</div>
