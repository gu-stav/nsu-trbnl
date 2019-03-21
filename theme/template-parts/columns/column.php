<?php
  if (get_row_layout() == 'text'):
?>

    <div class="richtext">
      <?php the_sub_field('text'); ?>
    </div>

<?php
  endif;
?>

<?php
  if (get_row_layout() == 'quote') {
    $text = get_sub_field('text');
    $author = get_sub_field('author');
    $author_info = get_sub_field('author_info');

    get_component('/template-parts/quote/quote', [
      'text' => $text,
      'author' => $author,
      'author_info' => $author_info
    ]);
  }
?>

<?php
  if (get_row_layout() == 'info') {
    $title = get_sub_field('title');
    $text = get_sub_field('text');

    get_component('/template-parts/info/info', [
      'title' => $title,
      'text' => $text
    ]);
  }
?>
