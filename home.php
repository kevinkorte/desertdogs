<?php get_header();?>

<!--Remove before final production-->
<p>This is the home.php file for blogging!</p>

<div class="l-ddu-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="m-post-wrapper">
		<span class="t-time"><?php the_date();?></span>
		<h1><?php the_title();?></h1>
		<?php the_content();?>
	</div><!--/.m-post-wrapper-->

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div><!--ddu-container-->


<?php get_footer();?>