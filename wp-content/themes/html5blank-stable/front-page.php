<?php
/*
	Travel Theme's Front Page to Display the Home Page if Selected
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>

<?php get_header(); ?>
	<div class="col-main">
		<div class="col-home-1">
			<div class="content-article block-congdung">
				<div class="content">
					<?php
						$args1 = array(
							'category__in' => array(5),
							'posts_per_page' => 7,
							'order'   => 'ASC'
						);
						echo CustomQuery($args1,'title');
					?>
				</div>
			</div>
		</div>
		<div class="col-home-2">
			<div class="block-cachdung">
				<div class="content">
					<?php
						$args2 = array(
							'category__in' => array(5),
							'posts_per_page' => 4,
							'order'   => 'ASC'
						);
						echo CustomQuery($args2,'title');
						$category_link7 = get_category_link(7);
						$category_link11 = get_category_link(11);
						$category_link12 = get_category_link(12);
					?>
				</div>
			</div>
		</div>
		<div class="bock-tab">
			<div class="title-tab tab1">
				<ul class="tab-link-block">
					<li item="tab1" tab-link="tab-link-block" tab-content="tab-content-block" class="active">Mua bán</li>
					<li  item="tab2" tab-link="tab-link-block" tab-content="tab-content-block">Bệnh lý </li>
					<li  item="tab3" tab-link="tab-link-block" tab-content="tab-content-block">Hỏi đáp</li>
				</ul>
				<a title="Xem thêm" class="link-tab1 link-category" href="<?php echo $category_link7; ?>">Xem thêm </a>
				<a title="Xem thêm" class="link-tab2 link-category" href="<?php echo $category_link11; ?>" >Xem thêm </a>
				<a title="Xem thêm" class="link-tab3 link-category" href="<?php echo $category_link12; ?>" >Xem thêm </a>
			</div>
			<div class="content tab-content-block">
				<div id="tab1" class="active">
					<?php
						$args3 = array(
							'category__in' => array(7),
							'posts_per_page' => 4,
							'order'   => 'ASC'
						);
						echo CustomQuery($args3,'title-desc');
					?>
				</div>
				<div id="tab2">
					<?php
						$args4 = array(
							'category__in' => array(11),
							'posts_per_page' => 4,
							'order'   => 'ASC'
						);
						echo CustomQuery($args4,'title');
					?>
				</div>
				<div id="tab3">
					<?php
						$args5 = array(
							'category__in' => array(12),
							'posts_per_page' => 4,
							'order'   => 'ASC'
						);
						echo CustomQuery($args5,'title');
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); 
	//get_sidebar( 'content' ); 
//get_sidebar();
?>
<div>
<?php get_footer(); ?>
