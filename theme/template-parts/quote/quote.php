<blockquote class="quote">
  <div class="richtext">
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
</blockquote>
