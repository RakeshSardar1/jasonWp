<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>



		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="navBarOthers">
					<div class="letfLogo">
						<a href="<?php echo home_url(); ?>">
				      <img src="<?php echo get_template_directory_uri(); ?>/img/logo-2.png" alt="Logo" class="logo-img">
				    </a>
					</div>
					<div class="rightNavbar">
						<!-- nav -->
						<nav class="navbar navbar-expand-lg navbar-light" role="navigation">

							<div class="menuToggle">
								<img src="<?php echo get_template_directory_uri(); ?>/img/icons/menu-of-three-lines-black.png" alt="sandwich bar" class="sanwichBar">
							</div>

							<?php my_custom_theme_nav(); ?>
						</nav>
						<!-- /nav -->
						<div class="menuDrawer">
							<img src="<?php echo get_template_directory_uri(); ?>/img/icons/close.png" alt="sandwich bar" class="closeBar">
							<?php my_custom_theme_nav(); ?>
						</div>
					</div>
				</div>
			</header>
			<!-- /header -->
