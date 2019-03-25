<?php

  include 'lib/admin.php';
  include 'lib/blocks.php';
  include 'lib/footer.php';
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

  function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
      return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
      return array();
    }
  }

  function disable_wp_emoji() {
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  }

  add_action( 'init', 'disable_wp_emoji' );

?>
