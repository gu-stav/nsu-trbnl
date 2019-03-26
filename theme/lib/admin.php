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
  function admin_login_redirect( $redirect_to, $request, $user ){
    if(is_array( $user->roles)) {
        return '/wp-admin/edit.php?post_type=page';
    }
  }

  function admin_toolbar_cleanup($toolbars) {
    $toolbars['Richtext'] = array();
    $toolbars['Richtext'][1] = array('formatselect', 'bold', 'italic', 'link', 'undo', 'redo', 'bfn', 'bfn_note');

    return $toolbars;
  }

  function admin_tinymce_formatselect($settings) {
    $settings['block_formats'] = 'Absatz=p;Überschrift(1)=h2;Überschrift(2)=h3;Überschrift(3)=h4';

    return $settings;
  }

  add_filter('login_redirect', 'admin_login_redirect', 10, 3);
  add_action('admin_menu', 'admin_cleanup_menu');
  add_filter('acf/fields/wysiwyg/toolbars' , 'admin_toolbar_cleanup');
  add_filter('tiny_mce_before_init', 'admin_tinymce_formatselect');

  add_editor_style(get_template_directory_uri() . '/style-editor.css');
  add_editor_style(get_template_directory_uri() . '/.build/index.css');

  add_theme_support( 'editor-styles' );
?>
