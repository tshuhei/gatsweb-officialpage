<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/images/favicon_web.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_theme_file_uri(); ?>/images/favicon_ios.png" sizes="180x180">
	<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri(); ?>/images/favicon_android.png" sizes="192x192">
	<!-- BootstrapのCSS読み込み -->
    <!-- <link href="<?php echo get_theme_file_uri(); ?>/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- jQuery読み込み -->
	<script src="<?php echo get_theme_file_uri(); ?>/js/jquery-3.5.1.min.js"></script>
	<!-- BootstrapのJS読み込み -->
    <!-- <script src="<?php echo get_theme_file_uri(); ?>/js/bootstrap.min.js"></script> -->
	<!-- ParallaxのJS読み込み -->
	<script src="<?php echo get_theme_file_uri(); ?>/js/parallax.min.js"></script>
	<?php wp_head(); ?>
	<script>
		(function(d) {
			var config = {
			kitId: 'wef0kqi',
			scriptTimeout: 3000,
			async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		})(document);
	</script>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open()?>
	<header>
		<div class="header-left">
			<a href="https://gatsweb.net"><img class="header-logo" src="<?php echo get_theme_file_uri(); ?>/images/gatsweb-logo.png"></a>
			<a href="https://gatsweb.net"><p class="header-title">GatsWeb</p></a>
		</div>
		<div class="header-right">
			<ul class="header-items">
				<!-- <li class="header-item"><a href="https://gatsweb.net/price">Price</a></li>
				<li class="header-item"><a href="https://gatsweb.net/service">Service</a></li> -->
				<li class="header-item"><a href="https://gatsweb.net/about">About</a></li>
				<li class="header-item"><a href="https://gatsweb.net/contact">Contact</a></li>
			</ul>
		</div>
		<div class="nav-drawer-wrapper">
			<div id="nav-drawer">
				<input id="nav-input" type="checkbox" class="nav-unshown">
				<label id="nav-open" for="nav-input"><span></span></label>
				<label class="nav-unshown" id="nav-close" for="nav-input"></label>
				<div id="nav-content">
					<ul class="nav-content-items">
						<!-- <a class="nav-content-item" href="https://gatsweb.net/price"><li>Price</li></a>
						<a class="nav-content-item" href="https://gatsweb.net/service"><li>Service</li></a> -->
						<a class="nav-content-item" href="https://gatsweb.net/about"><li>About</li></a>
						<a class="nav-content-item" href="https://gatsweb.net/contact"><li>Contact</li></a>
					</ul>
				</div>
			</div>
		</div>
	</header>