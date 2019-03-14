<ul class="grid">
  <?php while (have_rows('videos') ) : the_row(); ?>
    <li>
      <?php get_template_part('template-parts/videos/video'); ?>
    </li>
  <?php endwhile; ?>
</ul>
