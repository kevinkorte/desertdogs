<?php get_header();?>

<!--home.php-->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php the_title();?>
  <?php the_excerpt();?>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer();?>