<section style="max-width:30rem;">
  <p><?php the_time('Y-m-d'); ?></p>
  <h3>タイトル:
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h3>
  <p>要約:<br/><?php the_excerpt(); ?></p>
</section>
<hr/>