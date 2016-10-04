<?php
/*
	Travel Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>

<?php get_header(); ?>
	<div class="layer-1">
		<div class="col-1">
			<div class="content-article">
				<h2 class="title-article">Công dụng nấm lim xanh</h2>
				<div class="content">
					<?php
						$args1 = array(
							'category__in' => array(5),
							'posts_per_page' => 4,
							'order'   => 'ASC'
						);
						//echo CustomQuery($args1,'featured-post-home','featured-post-first');
						 $category_link1 = get_category_link(3);
					?>
					<!-- Print a link to this category -->
					<a class="show-all" href="<?php echo esc_url( $category_link1 ); ?>" title="Category Name"> >> Xem thêm << </a>
				</div>
			</div>
		</div>
		
	</div>
	<div class="layer-2">
		
	</div>
</div>

<?php get_sidebar(); 
	//get_sidebar( 'content' ); 
//get_sidebar();
?>
<div>
<?php get_footer(); ?>
