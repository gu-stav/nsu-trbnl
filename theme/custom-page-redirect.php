<?php
  /*
    Template Name: Redirect
  */

  $children = get_pages('child_of={$post->ID}&sort_column=menu_order');

  if ($children) {
    $firstchild = $children[0];

    wp_redirect(get_permalink($firstchild->ID));
  }
?>
