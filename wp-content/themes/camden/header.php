<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php echo get_bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="title" content="<?php wp_title('|', true, 'right'); ?>">

	<link rel="pingback" href="<?php echo get_bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- bof wp_head -->
	<?php wp_head(); ?>
	<!-- eof wp_head -->

</head>
<body class="<?php echo implode(' ', get_body_class()); ?>">

	<div id="top"><!-- Closes in footer.php -->
		<header class="header">
			<div class="header__wrapper">
				<h1 class="header__heading">
					<?php if (is_front_page()) : ?>
						<span>
							<?php bloginfo('name'); ?>
						</span>
					<?php else : ?>
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<?php bloginfo('name'); ?>
						</a>
					<?php endif; ?>
				</h1>

				<?php if (get_bloginfo('description')) : ?>
					<h2 class="header__description"><?php bloginfo('description'); ?></h2>
				<?php endif; ?>

				<div class="nav-float-right">
					<div class="utility-nav">
						<p class="phone-number">804.745.6488</p>
						<p class="address">201 W. 7th St. Richmond, VA 23224</p>
						<a href="https://www.instagram.com/camdensdogtown/"><i class="fab fa-instagram"></i></a>
						<a href="https://www.facebook.com/Camdens-Dogtown-Market-236787479718917/"><i class="fab fa-facebook"></i></a>
					</div>
					<div class="primary-nav">
						<?php
						if (has_nav_menu('header')) :
							wp_nav_menu(array(
								'container'       => 'nav',
								'theme_location'  => 'header',
								'container_id'    => 'header-menu',
								'container_class' => 'header-menu',
								'menu_id'         => 'header-menu-list',
								'menu_class'      => 'header__menu-list',
							));
						endif;
						?>
					</div>
				</div>
			</div>
		</header>
