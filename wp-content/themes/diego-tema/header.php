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
			<header class="header" role="banner">
				<!-- nav -->
				<nav class="navegacao" role="navigation" id="menu-nav">							
					<div class="container no-gutter">
						<div class="row no-gutter">							
							<div class="col-8 col-xl-3">
								<div class="logo-menu">
									<a class="" href="<?php echo home_url(); ?>">
										<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
									</a>
								</div>
							</div>								
							<div class="col-4 d-block d-sm-block d-md-none d-lg-none d-xg-none">
								<div class="menu-toggle">
									<div id="nav-icon1">
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
							</div>
							<div class="col-12 col-xl-9">
								<div id="menu-principal">
									<?php html5blank_nav(); ?>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<!-- /nav -->
			</header>
			<!-- /header -->
