<?php
  function admin_cleanup_menu() {
    $REMOVE = [
      'index.php',
      'edit.php',
      'edit-comments.php'
    ];

    foreach($REMOVE as $item) {
      remove_menu_page($item);
    }
  }

  // redirect to pages tab after login
  function loginRedirect( $redirect_to, $request, $user ){
    if(is_array( $user->roles)) {
        return '/wp-admin/edit.php?post_type=page';
    }
  }

  add_filter('login_redirect', 'loginRedirect', 10, 3);
  add_action('admin_menu', 'admin_cleanup_menu');

  add_editor_style(get_template_directory_uri() . '/style-editor.css');
  add_editor_style(get_template_directory_uri() . '/.build/index.css');

  add_theme_support( 'editor-styles' );
?>
