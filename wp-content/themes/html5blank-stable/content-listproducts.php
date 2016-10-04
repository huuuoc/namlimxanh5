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

<li id="post-<?php the_ID(); ?>">
	<div class="info-product">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		
		<div class="content-product">
			<?php
				the_title( '<h2 class="name-product"><a title="'.get_the_title().'" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
			<div class="type-product">
				<?php
					$typeProduct = get_post_meta( get_the_ID(), 'type_product', true );
					 
					if( $typeProduct ) { // kiểm tra xem nó có dữ liệu hay không
						echo $typeProduct;
					}
				?>
			</div>
			<div class="price-product">
				<?php
					$priceProduct = get_post_meta( get_the_ID(), 'price_product', true );
					 
					if( $priceProduct ) { // kiểm tra xem nó có dữ liệu hay không
						echo 'Giá : ', number_format($priceProduct,0,",","."),' Đ/hộp';
					}
				?>
			</div>
			<a class="more-show" href="<?php echo get_permalink() ;?>" title="Xem chi tiết">Xem chi tiết</a>
		</div>
	</div>
	
</li><!-- #post-## -->
