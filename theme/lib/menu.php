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

  function menu_social_media_icons( $items ) {
    foreach( $items as &$item ) {
      $icon = get_field( 'icon', $item );

      if( $icon ) {
        $item->title = '<span class="menu-item__icon">' . $icon . '</span>' .
                       '<span class="menu-item__hidden-label">' . $item->title . '</span>';
      }
    }

    return $items;
  }

  class Navigation_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='sub-menu-container'><div class='constraint constraint--wide'><ul class='sub-menu'>\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div></div>\n";
    }
  }

  add_action( 'init', 'menu_register' );
  add_action( 'widgets_init', 'menu_footer_widgets' );

  add_filter( 'wp_nav_menu_objects', 'menu_social_media_icons', 10, 2 );
?>
