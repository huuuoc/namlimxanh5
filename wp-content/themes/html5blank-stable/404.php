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

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>
</div>
<?php get_sidebar(); ?>
<div>
<?php get_footer(); ?>
