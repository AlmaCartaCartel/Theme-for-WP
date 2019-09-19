<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body>
			<header id="header">
				<div class="logo"><a href="<?php echo site_url(); ?>"><?php echo get_bloginfo(name);?></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>
			<?php
				wp_nav_menu(array(
					'thame_location' => 'main_menu',
					'container' => 'nav',
					'container_id' => 'menu',
					'menu_class' => 'links',
					'depth' => 0,
				));
			?>