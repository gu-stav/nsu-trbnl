<?php
  $text = get_field('text');
  $author = get_field('author');
  $author_info = get_field('author_info');
?>

<blockquote class="quote">
  <div class="quote__container constraint">
    <div class="richtext richtext--is-centered">
      »<?php echo $text; ?>«
    </div>

    <?php if ($author): ?>
      <cite class="quote__author">
        <?php echo $author; ?>

        <?php if ($author_info): ?>
          <footer class="quote__author-info"><?php echo $author_info; ?></p>
        <?php endif; ?>
      </cite>
    <?php endif; ?>
  </div>
</blockquote>
