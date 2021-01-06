<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
			<a href="http://hogehoge.work"><img class="header-logo" src="<?php echo get_theme_file_uri(); ?>/images/gatsweb-logo.png"></a>
			<a href="http://hogehoge.work"><p class="header-title">GatsWeb</p></a>
		</div>
		<div class="header-right">
			<ul class="header-items">
				<li class="header-item"><a href="http://hogehoge.work/price">Price</a></li>
				<li class="header-item"><a href="http://hogehoge.work/service">Service</a></li>
				<li class="header-item"><a href="http://hogehoge.work/about">About</a></li>
				<li class="header-item"><a href="http://hogehoge.work/contact">Contact</a></li>
			</ul>
		</div>
	</header>