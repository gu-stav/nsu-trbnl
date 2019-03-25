<header class="header">
  <?php if (!is_front_page()): ?>
    <a href="<?php esc_url(home_url('/')); ?>" class="header__logo">
  <?php else: ?>
    <span class="header__logo">
  <?php endif; ?>

    <?php bloginfo('name'); ?>

  <?php if (!is_front_page()): ?>
    </a>
  <?php else: ?>
    </>
  <?php endif; ?>

  <?php
    wp_nav_menu([
      'theme_location' => 'navigation',
      'container' => false,
      'item_spacing' => 'discard'
    ]);
  ?>
</header>
