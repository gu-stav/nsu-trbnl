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

  add_action( 'init', 'menu_register' );
  add_action( 'widgets_init', 'menu_footer_widgets' );

  add_filter( 'wp_nav_menu_objects', 'menu_social_media_icons', 10, 2 );
?>
