<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="site_wrapper">
			<header id="site_header">
				<div class="container">
					<div class="row">
						<div class="column column-30">
							<div class="logo_text">
								<h1><a href="<?php echo HOME_URI; ?>" target="_self"><i class="fas fa-heart"></i>Tellplatz<span>Basel</span></a></h1>
							</div>
						</div>
						<?php
						$args = array(
							'theme_location' => 'main-menu',
							'container_class' => 'column column-70 responsive',
							'container_id' => 'menu_container',
							'depth' => 0
						);
						wp_nav_menu($args);
						?>
						<button class="hamburger hamburger--stand" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
				</div>
			</header>
			<main id="site_main">