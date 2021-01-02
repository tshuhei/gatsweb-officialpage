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
			<img>
			<p>GatsWeb</p>
		</div>
		<div class="header-right">
			<a href="#">Price</a>
			<a href="#">Service</a>
			<a href="#">About</a>
			<a href="#">Contact</a>
		</div>
		<p>This is header</p>
	</header>