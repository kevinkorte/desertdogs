<?php get_header();?>

<!--home.php-->

<div class="">

</div>

<div class="l-ddu-container">
	<div class="row">

		<div class="l-ddu-blogwrapper">
			<div class="m-ddu-blogbar">
				<span class="t-text-blogbar">Latest Posts</span>
				<span class="pull-right">
					<?php wp_dropdown_categories(); ?>
				</span>
			</div><!--/.m-ddu-blogbar-->
			<div class="m-ddu-blog-feed clearfix">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="m-ddu-single-post">
						<div class="row">
							<div class="l-featured-image">
								<?php the_post_thumbnail( 'thumbnail' );?>
							</div><!--/.feature-image-->
							<div class="l-blog-body">
								<div class="t-cat">
									<?php the_category( '&bull;' );?>
								</div><!--/.t-cat-->
								<h1 class="t-blog-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
								<div class="t-blog-excerpt"><?php the_excerpt();?></div>
							</div><!--/.l-blog-body-->
						</div><!--/.row-->
						<div class="row">
							<div class="m-blog-meta">
								<span class="t-date"><?php the_date();?></span>
								<span class="t-comment-count pull-right"><?php comments_number();?></span>
							</div><!--/.m-blog-meta-->
						</div><!--/.row-->
					</div><!--/.m-ddu-single-post-->
				<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div><!--/.m-ddu-blog-feed-->
		</div><!--/.l-ddu-blogwrapper-->

	</div><!--/.row-->
</div><!--ddu-container-->


<?php get_footer();?>