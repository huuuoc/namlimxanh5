<?php
/**
 * Widget and shortcode template: excerpts template.
 *
 * This template is used by the plugin: Related Posts by Taxonomy.
 *
 * plugin:        https://wordpress.org/plugins/related-posts-by-taxonomy
 * Documentation: https://keesiemeijer.wordpress.com/related-posts-by-taxonomy/
 *
 * @package Related Posts by Taxonomy
 * @since 0.1
 *
 * The following variables are available:
 *
 * @var array $related_posts Array with related posts objects or empty array.
 * @var array $rpbt_args     Widget or shortcode arguments.
 */
?>

<?php
/**
 * Note: global $post; is used before this template by the widget and the shortcode.
 */
?>

<?php if ( $related_posts ) : ?>
 
    <?php foreach ( $related_posts as $post ) :
        setup_postdata( $post );
 
    // Check if size was set in widget or shortcode
    $size = isset( $rpbt_args['size'] ) ? $size : 'thumbnail';
?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post thumnail -->
		<?php if ( has_post_thumbnail() ) : ?>
			<a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size ); ?></a>
		<?php endif; ?>
		
		<div class="detail1">
			<header class="entry-header">
				<!-- title 
				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>-->
				<?php
					$postRelation = get_the_title();
					cutString($postRelation,80);
				?>
				<h2 class="title-post"><a title="<?php echo get_the_title(); ?>" href="<?php echo esc_url( get_permalink() ); ?> " rel="bookmark"><?php echo $postRelation; ?></a></h2>
			</header><!-- .entry-header -->
			
			<!-- excerpt -->
			<?php// the_excerpt(); ?>
			
			<!--<p class="read-more"><a class="more-show" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"> Xem thêm </a></p>-->
		</div>
	</article><!-- #post-## -->
	
    <?php endforeach; ?>
	
<?php else : ?>
<p><?php _e( 'No related posts found', 'related-posts-by-taxonomy' ); ?></p>
<?php endif ?>


<?php
/**
 * note: wp_reset_postdata(); is used after this template by the widget and the shortcode
 */
?>