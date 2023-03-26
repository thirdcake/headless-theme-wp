<p><a href="<?= esc_url( home_url( '/' ) ); ?>">Home</a></p>
<h1><?php the_title(); ?></h1>
<p><?php the_time('Y-m-d G:i'); ?></p>
<main style="max-width:30rem;">
  <?php the_content(); ?>
</main>