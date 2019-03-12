<?php
  $BLOCKS = [
    [
      'name' => 'hero-image',
      'title' => __('Hero Image'),
      'render_callback'	=> 'acf_block_render_callback',
      'description' => __('A large image title and an optional subtitle.'),
      'category' 	=> 'layout',
      'icon' => 'format-image',
      'keywords' 	=> array('hero', 'image', 'intro'),
    ],

    [
      'name' => 'video-grid',
      'title' => __('Video Grid'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'layout',
      'icon' => 'playlist-video',
      'keywords' 	=> array('video', 'grid'),
    ]
  ];

  function acf_block_render_callback( $block ) {
    $slug = str_replace('acf/', '', $block['name']);

    if(file_exists(get_theme_file_path("blocks/{$slug}.php"))) {
      include(get_theme_file_path("blocks/{$slug}.php"));
    }
  }

  function acf_init_blocks() {
    global $BLOCKS;

    if( function_exists('acf_register_block') ) {
      foreach($BLOCKS as $block) {
        acf_register_block($block);
      }
    }
  }

  function add_blocks_to_api() {
    if (!function_exists('use_block_editor_for_post_type')) {
      require ABSPATH . 'wp-admin/includes/post.php';
    }

    $post_types = get_post_types_by_support(['editor']);

    foreach ($post_types as $post_type) {
      if (use_block_editor_for_post_type($post_type)) {
        register_rest_field(
          $post_type,
          'blocks',
          [
            'get_callback' => function(array $post) {
              return parse_blocks($post['content']['raw']);
            },
          ]
        );
      }
    }
  }

  function allowed_block_types($allowed_blocks) {
    global $BLOCKS;

    $acf_blocks = array_map(function($block) {
      return "acf/{$block['name']}";
    }, $BLOCKS);

    $core_blocks = array(
      'core/paragraph',
      'core/heading'
    );

    return array_merge($acf_blocks, $core_blocks);
  }

  function video_update_id($value, $post_id, $field) {
    return array(
      'value' => $value
    );
  }

  function video_prepare_id($field) {
    if ($field['value'] && is_array($field['value'])) {
      $field['value'] = $field['value']['value'];
    }

    return $field;
  }

  add_action('rest_api_init', 'add_blocks_to_api');
  add_action('acf/init', 'acf_init_blocks');
  add_filter('allowed_block_types', 'allowed_block_types');
  add_filter('acf/update_value/key=field_5c87c3029552d', 'video_update_id', 10, 3);
  add_filter('acf/prepare_field/key=field_5c87c3029552d', 'video_prepare_id', 10, 3);
?>
