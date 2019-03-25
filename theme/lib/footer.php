<?php

  function footer_load_scripts() {
    wp_enqueue_script('site', get_template_directory_uri() . '/dist/index.js', false, false, true);
  }

  function footer_deregister_scripts() {
    wp_deregister_script('wp-embed');
  }

  add_action( 'wp_enqueue_scripts', 'footer_load_scripts' );
  add_action( 'wp_footer', 'footer_deregister_scripts' );

?>
