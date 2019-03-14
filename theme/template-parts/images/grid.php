<ul class="grid">
  <?php while (have_rows('images') ) : the_row(); ?>
    <li>
      <?php get_template_part('template-parts/images/image'); ?>
    </li>
  <?php endwhile; ?>
</ul>
