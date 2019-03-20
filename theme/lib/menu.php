<?php
  function menu_register() {
    register_nav_menu('navigation', __('Navigation'));
    register_nav_menu('social-media', __('Footer Social Media'));
    register_nav_menu('footer', __('Footer Navigation'));
  }

  function menu_footer_widgets() {
    register_sidebar([
      'name' => 'Footer',
      'id' => 'footer_extended',
      'description'   => 'Footer Text',
      'before_widget' => '',
      'after_widget' => '',
    ]);
  }

  add_action( 'init', 'menu_register' );
  add_action( 'widgets_init', 'menu_footer_widgets' );
?>
