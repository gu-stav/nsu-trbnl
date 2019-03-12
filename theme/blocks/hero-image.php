<?php
  $title = get_field('title');
  $subtitle = get_field('subtitle');
?>

<header class="hero-image">
  <div class="constraint">
    <h1 class="hero-image__title"><?php echo $title; ?></h1>
    <p class="hero-image__subtitle"><?php echo $subtitle; ?></p>
  </div>
</header>
