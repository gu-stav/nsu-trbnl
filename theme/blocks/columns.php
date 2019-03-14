<section class="constraint constraint--wide">
  <div class="columns">
    <?php
      while(have_rows('columns')):
        the_row();
    ?>

      <div class="columns__column">
        <?php
          while(have_rows('first_column')) {
            the_row();
            get_template_part('template-parts/columns/column');
          }
        ?>
      </div>

      <div class="columns__column">
        <?php
          while(have_rows('second_column')) {
            the_row();
            get_template_part('template-parts/columns/column');
          }
        ?>
      </div>

    <?php
      endwhile;
    ?>
  </div>
</section>
