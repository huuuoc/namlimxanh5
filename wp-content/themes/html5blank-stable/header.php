<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<div class="header-container">
				<div class="header">
					<header class="header clear" role="banner">
						<div class="header-top">
							<!-- logo -->
							<div class="logo lfloat">
								<?php if ( is_front_page() && is_home() ) : ?>
									<h1>
										<a href="<?php echo home_url(); ?>">
											<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
											<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img" />
										</a>
									</h1>
								<?php else : ?>
									<p>
										<a href="<?php echo home_url(); ?>">
											<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
											<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
										</a>
									</p>
								<?php endif; ?>
							</div>
							<!-- /logo -->
							<div class="rfloat">
								<div class="search-box">
									<?php get_search_form(); ?>
								</div>
								<div class="hotline lfloat">
									<span>Hotline:</span> 04.3797.0138<br/>
											0919.257.838
								</div>
								<div class="soical">
									<a href="#" title="facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-fb.png" alt="Logo" class="logo-img" /></a>
									<a href="#" title="google"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-google.png" alt="Logo" class="logo-img" /></a>
									<a href="#" title="youtube"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-youtube.png" alt="Logo" class="logo-img" /></a>
									<a href="#" title="twicetter"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.png" alt="Logo" class="logo-img" /></a>
								</div>
							</div>
						</div>
					</header>
				</div>
			</div>
			<!-- /header -->
			<!--.main-container -->
			<div class="menu-container">
				<div class="menu">
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php html5blank_nav(); ?>
					</nav> <!-- /nav -->
				</div>
			</div>
			<div class="main-container">
				<div class="main">
					<div class="main-content">
				