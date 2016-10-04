<!-- sidebar -->
<aside class="sidebar" role="complementary">
	<div class="content-sidebar">
		<?php // get_template_part('searchform'); ?>
		<div class="block-product">
			<h2 class="title-block">Sản phẩm nấm lim xanh</h2>
			<ul>
				<ul class="list-products">
					<?php
						$args_products = array(
							'category__in' => array(9),
							'orderby'   => 'meta_value_num',
							'meta_key'  => 'price_product',
							'order'   => 'ASC',
						);
						$a = CustomQuery($args_products,'listproducts');
						echo $a;
					?>
				</ul>
			</ul>
		</div>
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>

		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
		</div>
	</div>
</aside>
<!-- /sidebar -->
