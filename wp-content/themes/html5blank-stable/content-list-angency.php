<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<li>
	<?php
		the_title( '<a title="'.get_the_title().'" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
	?>
</li><!-- #post-## -->
