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

			<!--<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>-->

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
</div>
<?php get_sidebar(); ?>
<div>
<?php get_footer(); ?>
