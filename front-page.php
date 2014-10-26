<?php get_header();?>
<!--front-page.php-->

<div class="container hero-container">
  <div class="row">
    <div class="col-md-8">
      Desert Dogs Unleashed
      Professional K9 Training
    </div>
    <div class="col-md-4 hero-background">
      
    </div>
  </div>
</div>

<?php
$args = array(
    'post_type' => 'tribe_events'
  );
$myposts = tribe_get_events( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

<li>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php echo tribe_get_end_date();?>
    <?php echo tribe_get_address();?>
  </li>
<?php endforeach; 
wp_reset_postdata();?>

<?php get_footer();?>