<?php
  if (get_row_layout() == 'text'):
?>

    <div class="richtext richtext--size-small">
      <?php the_sub_field('text'); ?>
    </div>

<?php
  endif;
?>
