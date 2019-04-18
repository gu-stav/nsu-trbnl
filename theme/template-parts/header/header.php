<header class="header">
  <div class="constraint constraint--wide">
    <?php if (!is_front_page()): ?>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
    <?php else: ?>
      <span class="header__logo">
    <?php endif; ?>

      <span class="header__logo-site-name">
        <?php bloginfo('name'); ?>
      </span>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 430.87 91.06">
        <path d="M311.92 22.78v-3.9h-10.28V.15h-4.43v22.63zm-26.49-7.73h-5.64l2.87-8.25zm7.13 7.73L284.28.11h-3.47l-8.25 22.67h4.62l1.37-4h8.05l1.34 4zm-25 0V.15h-4.43v13.89l-9-13.89h-3.95v22.63h4.43V8.91l9 13.91zm-23.92-7.77V.11h-4.4v14.75c0 2.61-1.56 4.17-3.94 4.17s-3.92-1.56-3.92-4.17V.15h-4.43v14.9c0 4.81 3.7 8 8.35 8s8.34-3.16 8.34-8m-27.91-8.34c0 1.56-1 2.61-2.93 2.61h-4.33V4.1h4.33c1.88 0 2.93 1.05 2.93 2.61m.32 9.36a2.69 2.69 0 0 1-3 2.81h-4.61V13.3h4.61a2.67 2.67 0 0 1 3 2.77m4.42.23a5.27 5.27 0 0 0-3.12-5.1 5.23 5.23 0 0 0 2.8-4.68c0-3.88-2.58-6.37-7-6.37H204v22.63h9.49c4 0 6.94-2.29 6.94-6.52M196.21.11h-4.41v22.67h4.43zm-15.75 6.94a3 3 0 0 1-3.21 3h-4.18v-6h4.18a3 3 0 0 1 3.21 3m5.37 15.73l-5.06-9.77a6.11 6.11 0 0 0 4.14-6c0-3.79-2.74-6.94-7.36-6.94h-8.88v22.71h4.42v-9h3.19l4.43 9zM163.67 4.06V.11H147.4v3.95h5.92v18.72h4.43V4.1zM289.77 56.84l-7-11.62 6.56-11.05h-3.94l-4.49 8.12-4.46-8.12h-3.95L279 45.22l-7 11.62h4l4.91-8.69 4.93 8.69zm-22.82 0v-3.06H255.9v-6.81h9.42v-3.09h-9.42v-6.62H267v-3.09h-14.54v22.67zm-19.47 0v-3.06h-10.92V34.17h-3.44v22.67zm-23-15.79c0 2.39-1.62 3.76-4 3.76h-5v-7.55h5c2.39 0 4 1.4 4 3.79m3.44 0c0-3.95-2.83-6.88-7.26-6.88H212v22.67h3.43v-8.91h5.16c4.43 0 7.26-2.93 7.26-6.88m-23.66 15.79V34.17h-3.44l-6.45 14.11-6.62-14.11h-3.44v22.67h3.44V41.68l5.32 11.1h2.54l5.22-11.05v15.16zm-29.58-11.33c0 4.55-.23 5.82-1.34 7a4.77 4.77 0 0 1-6.75 0c-1.12-1.21-1.34-2.48-1.34-7s.22-5.83 1.34-7a4.77 4.77 0 0 1 6.75 0c1.11 1.21 1.34 2.48 1.34 7m3.44 0c0-4.37.06-6.88-2.17-9.11a8.19 8.19 0 0 0-6-2.42 8.1 8.1 0 0 0-5.95 2.42c-2.23 2.23-2.2 4.74-2.2 9.11s0 6.87 2.2 9.1a8.1 8.1 0 0 0 5.95 2.42 8.19 8.19 0 0 0 6-2.42c2.23-2.23 2.17-4.74 2.17-9.1M158 56.84l-8.12-13.79 7.36-8.88h-4.21l-9.26 11.4v-11.4h-3.44v22.67h3.44v-6.59l3.82-4.58L154 56.84zm-24.68-11.42h-9.29v3h9.29zm-15.95 3.78v-15H114v14.87c0 3-1.88 4.9-4.71 4.9s-4.68-1.87-4.68-4.9v-14.9h-3.44v15c0 4.68 3.5 7.83 8.12 7.83s8.15-3.15 8.15-7.83m-21.88 1.18a5.94 5.94 0 0 0-1.85-4.65 7.48 7.48 0 0 0-4.23-1.69l-2.58-.38a5.07 5.07 0 0 1-2.55-1.05 2.69 2.69 0 0 1-.86-2.1c0-2 1.46-3.54 4.14-3.54a6.67 6.67 0 0 1 4.93 1.75l2.2-2.16a9.41 9.41 0 0 0-7-2.58c-4.71 0-7.57 2.71-7.57 6.65a5.65 5.65 0 0 0 1.65 4.33 7.69 7.69 0 0 0 4.3 1.82l2.68.38a3.94 3.94 0 0 1 2.48 1 3.06 3.06 0 0 1 .89 2.35c0 2.2-1.72 3.47-4.68 3.47a7.48 7.48 0 0 1-5.8-2.16l-2.29 2.26c2.17 2.2 4.62 3 8 3 4.74 0 8.15-2.48 8.15-6.65m-21.72 6.46V34.17h-3.44v15.92L59.93 34.17h-3.15v22.67h3.44V40.89L70.7 56.84zM357.16 90.87V68.2h-3.44v15.92L343.25 68.2h-3.16v22.67h3.44v-16l10.48 16zm-23.24 0v-3.09h-11v-6.81h9.42v-3.06h-9.42v-6.63h11V68.2h-14.49v22.67zm-19.66-6.47a5.92 5.92 0 0 0-1.85-4.64 7.48 7.48 0 0 0-4.23-1.69l-2.58-.38a5.07 5.07 0 0 1-2.55-1.06 2.7 2.7 0 0 1-.86-2.1c0-2 1.47-3.53 4.14-3.53a6.66 6.66 0 0 1 4.94 1.75l2.19-2.17a9.45 9.45 0 0 0-7-2.58c-4.72 0-7.58 2.71-7.58 6.66a5.65 5.65 0 0 0 1.65 4.33 7.86 7.86 0 0 0 4.3 1.82l2.68.38a3.94 3.94 0 0 1 2.48.95 3 3 0 0 1 .89 2.36c0 2.2-1.72 3.47-4.68 3.47a7.48 7.48 0 0 1-5.79-2.16l-2.3 2.26c2.17 2.19 4.62 3 8 3 4.74 0 8.15-2.48 8.15-6.66m-31.21-22h-2.93v3.44h2.93zm6.88 0H287v3.44h2.93zm-.19 17.13c0 4.56-.22 5.83-1.34 7a4.77 4.77 0 0 1-6.75 0c-1.11-1.21-1.34-2.48-1.34-7s.23-5.83 1.34-7a4.77 4.77 0 0 1 6.75 0c1.12 1.21 1.34 2.49 1.34 7m3.44 0c0-4.36.06-6.88-2.17-9.11a8.57 8.57 0 0 0-11.94 0c-2.23 2.23-2.2 4.75-2.2 9.11s0 6.88 2.2 9.11a8.57 8.57 0 0 0 11.94 0c2.23-2.23 2.17-4.75 2.17-9.11m-20.36 11.34v-3.1h-10.93V68.2h-3.44v22.67zm-20.09-19.6V68.2h-14.49v22.67h3.44v-9.59h9.43v-3.09h-9.43v-6.91zm-20.89 11.95v-15h-3.44V83.1c0 3-1.88 4.9-4.72 4.9S219 86.12 219 83.1V68.2h-3.44v15c0 4.68 3.51 7.83 8.12 7.83s8.16-3.15 8.16-7.83m-26.15.16h-7l3.54-10.07zm6.18 7.48l-8.32-22.67h-2.77l-8.31 22.67h3.66l1.57-4.56h8.94l1.56 4.56zM0 .16h136.06v22.68H0zM300.47 34.17h130.39v22.68H300.47zM368.5 68.19h62.36v22.68H368.5zM323.15 0h107.72v22.68H323.15zM0 68.19h181.42v22.68H0zM0 34.17h45.35v22.68H0z" />
      </svg>

    <?php if (!is_front_page()): ?>
      </a>
    <?php else: ?>
      </span>
    <?php endif; ?>

    <div class="header__menu-container">
      <input type="checkbox" name="navigation-toggle" id="navigation-toggle" class="header__toggle-checkbox" />

      <div class="menu-container">
        <?php
          wp_nav_menu([
            'theme_location' => 'navigation',
            'container' => false,
            'item_spacing' => 'discard',
            'walker' => new Navigation_Walker
          ]);
        ?>
      </div>

      <label for="navigation-toggle" class="header__toggle js-navigation-toggle">

        <svg aria-hidden="true" focusable="false" class="header__toggle-times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
          <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
        </svg>

        <svg aria-hidden="true" focusable="false" class="header__toggle-bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
        </svg>

        <span class="header__toggle-label">Menü</span>
      </label>
    </div>
  </div>
</header>
