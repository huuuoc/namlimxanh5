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
	<div class="content-article">
		<!-- post thumbnail -->
		<div class="image-article">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a class="image-product" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<a class="icon-play-video" href="<?php the_permalink(); ?>"></a>
		</div>
		<!-- /post thumbnail -->
		<?php
			$postTitle = get_the_title();
			cutString($postTitle,80);
		?>
		<h2 class="title-article"><a title="<?php echo get_the_title(); ?>" href="<?php echo esc_url( get_permalink() ); ?> " rel="bookmark"><?php echo $postTitle; ?></a></h2>
	</div>
</article><!-- #post-## -->
