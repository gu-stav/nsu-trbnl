<?php

  add_image_size('full-width', 2048, 0);
  add_image_size('half-width', 1024, 0);
  add_image_size('tablet', 800, 0);
  add_image_size('mobileLarge', 600, 0);
  add_image_size('mobileSmall', 400, 0);

  function images_enhance_sizes($attr, $attachment, $size) {
    if ($size === 'half-width') {
      $attr['sizes'] = '(max-width: 900px) 100vw, (min-width: 900px) 512px';
    }

    return $attr;
  }

  add_filter( 'wp_get_attachment_image_attributes', 'images_enhance_sizes', 25, 3 );

?>
