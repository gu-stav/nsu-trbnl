<?php

  $has_parent = get_current_page_depth() >= 2;

  if ($has_parent) {
    $modifier = 'footer--inverse';
  } else {
    $modifier = '';
  }

?>

<footer class="footer <?php echo $modifier; ?>">
  <div class="footer__row">
    <div class="footer__row-content">
      <?php
        wp_nav_menu([
          'theme_location' => 'social-media',
          'container' => false,
          'item_spacing' => 'discard'
        ]);
      ?>
    </div>
  </div>

  <div class="footer__row">
    <div class="footer__row-content">
      <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'container' => false,
          'item_spacing' => 'discard'
        ]);
      ?>
    </div>
  </div>

  <div class="footer__row">
    <div class="footer__row-content">
      <p class="footer__partner"></p>
      <p class="footer__partner">Ein Kooperationsprojekte mit der Rosa Luxemburg Stiftung</p>
    </div>
  </div>

  <?php if ( is_active_sidebar( 'footer_extended' ) ) : ?>
    <div class="footer__extended">
      <div class="constraint">
        <div class="richtext">
          <?php dynamic_sidebar( 'footer_extended' ); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
