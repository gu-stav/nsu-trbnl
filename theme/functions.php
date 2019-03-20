<?php

include 'lib/admin.php';
include 'lib/blocks.php';
include 'lib/images.php';
include 'lib/menu.php';

function get_component($path, array $params = array(), $output = true) {
  extract($params, EXTR_SKIP);
  require(get_template_directory() . $path . '.php');
}

function get_current_page_depth() {
  global $wp_query;

  $object = $wp_query->get_queried_object();
  $parent_id  = $object->post_parent;
  $depth = 0;

  while($parent_id > 0){
    $page = get_page($parent_id);
    $parent_id = $page->post_parent;
    $depth++;
  }

  return $depth;
}



?>
