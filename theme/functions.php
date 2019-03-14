<?php

include 'lib/admin.php';
include 'lib/blocks.php';
include 'lib/menu.php';

function get_component($path, array $params = array(), $output = true) {
  extract($params, EXTR_SKIP);
  require(get_template_directory() . $path . '.php');
}

?>
