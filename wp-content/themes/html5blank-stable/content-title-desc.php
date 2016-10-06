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

<article id="post-<?php the_ID(); ?>">
	<div class="info-product">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a class="image-product" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		
		<div class="desc-article">
			
			<?php
				$postTitle1 = get_the_title();
				cutString($postTitle1,80);
			?>
			<h2 class="name-product"><a title="<?php echo get_the_title(); ?>" href="<?php echo esc_url( get_permalink() ); ?> " rel="bookmark"><?php echo $postTitle1; ?></a></h2>
				
			
			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		</div>
	</div>
	
</article><!-- #post-## -->
