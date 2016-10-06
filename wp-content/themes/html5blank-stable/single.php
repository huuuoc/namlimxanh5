<?php get_header(); ?>

	<main role="main">
		<?php
			if ( !is_front_page() && !is_home() ){
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('<div id="breadcrumbs">','</div>');
				}
			}
		?>
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			

			<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->


			<?php the_content(); // Dynamic Content ?>
			<?php if(function_exists('the_ratings')) { the_ratings(); } ?>
			<div class="tag">
				<?php the_tags( __( '<span class="title-rating">Tags: </span> ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			</div>
			<!--<p> <?php // _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p> <?php // _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>-->

			<?php // edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php // comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	<div class="related-posts">
		<?php if ( is_single() ) : ?>
			<?php echo do_shortcode('[related_posts_by_tax format="thumbnail_excerpt" posts_per_page="10" title=""]');?>
		<?php endif; ?>
	</div>
	</main>
</div>
<?php get_sidebar(); ?>
<div>
<?php get_footer(); ?>
