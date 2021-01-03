<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open()?>
	<header>
		<div class="header-left">
			<a href="#"><img class="header-logo" src="<?php echo get_theme_file_uri(); ?>/images/gatsweb-logo.png"></a>
			<a href="#"><p class="header-title">GatsWeb</p></a>
		</div>
		<div class="header-right">
			<ul class="header-items">
				<li class="header-item"><a href="#">Price</a></li>
				<li class="header-item"><a href="#">Service</a></li>
				<li class="header-item"><a href="#">About</a></li>
				<li class="header-item"><a href="#">Contact</a></li>
			</ul>
		</div>
	</header>