<?php get_header();?>

<!--home.php-->

<div class="">

</div>

<div class="l-ddu-container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php if( has_post_thumbnail() ) { ?>

		<div class="row">
			<?php
				//Should probably refactor this into a function
				//http://css-tricks.com/snippets/wordpress/get-featured-image-url/
				$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
				$thumb_url = $thumb_url_array[0];
			?>
			<div class="m-post-wrapper has-image" style="background-image: url('<?php echo $thumb_url;?>');">
				<span class="t-time"><?php the_date();?></span>
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			</div><!--/.m-post-wrapper-->
	</div><!--/.row-->

	<?php } ?>

	<?php if( !has_post_thumbnail() ) { ?>

		<div class="m-post-wrapper has-no-image">
			<span class="t-time"><?php the_date();?></span>
			<h1><?php the_title();?></h1>
			<?php the_content();?>
		</div><!--/.m-post-wrapper-->

	<?php } ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div><!--ddu-container-->


<?php get_footer();?>