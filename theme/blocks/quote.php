<?php
  $text = get_field('text');
  $author = get_field('author');
  $author_info = get_field('author_info');

  get_component('/template-parts/quote/quote', [
    'text' => $text,
    'author' => $author,
    'author_info' => $author_info
  ]);
?>
