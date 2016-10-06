<!-- sidebar -->
<aside class="sidebar" role="complementary">
	<div class="content-sidebar">
		<?php // get_template_part('searchform'); ?>
		<div class="block-product">
			<h2 class="title-block">Sản phẩm nấm lim xanh</h2>			
			<ul class="list-products">
				<?php
					$args_products = array(
						'category__in' => array(9),
						'orderby'   => 'meta_value_num',
						'meta_key'  => 'price_product',
						'posts_per_page' => 3,
						'order'   => 'ASC',
					);
					$products = CustomQuery($args_products,'listproducts');
					echo $products;
				?>
			</ul>
		</div>
		<div class="block-video">
			<h2 class="title-block">Video tư vấn</h2>			
			<ul class="list-video">
				<?php
					$args_video = array(
						'category__in' => array(8),
						'posts_per_page' => 5,
						'order'   => 'DESC'
					);
					$video = CustomQuery($args_video,'title');
					echo $video;
				?>
			</ul>
		</div>
		<?php if ( !is_front_page() && !is_home() ) :?>
		<div class="block-chung-nhan">
			<h2 class="title-block">Chứng nhận</h2>			
			<div class="content">
				<img src="<?php echo get_template_directory_uri(); ?>/img/chung-nhan.png" alt="chứng nhận"/>
			</div>
		</div>
		<?php endif; ?>
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>

		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
		</div>
	</div>
</aside>
<!-- /sidebar -->
