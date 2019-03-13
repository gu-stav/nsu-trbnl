<?php
  function menu_register() {
    register_nav_menu('navigation',__('Navigation'));
  }

  add_action( 'init', 'menu_register' );
?>