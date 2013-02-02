<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
	<meta charset="utf-8">
	
	<title><?php wp_title(''); ?></title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-precomposed.png">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="js/selectivizr.min.js"></script>
	<![endif]-->
		
	<!-- drop Google Analytics Here -->

	<!-- end analytics -->
	
</head>

<body <?php body_class(); ?>>

	<nav class="nav" role="navigation">

		<ul class="clearfix">
			<li><a href="#">What I Do</a></li>
			<li><a href="#">Who Is Garth?</a></li>
			<li><a href="#">Power In Numbers</a></li>
			<li><a href="#">Should We Work Together?</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>

	</nav>

	<header class="header" role="banner">

		<ul class="social">
			<li class="tw"><a href="#"><i class="icon-twitter"></i></a></li>
			<li class="fb"><a href="#"><i class="icon-facebook"></i></a></li>
			<li class="li"><a href="#"><i class="icon-linkedin-sign"></i></a></li>
		</ul>
			
		<h1 id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow">Garth <span>Online Marketing, SEO, PPC &amp; Social Media</span></a></h1>
		<p>Phone# 503-888-9051</p>
	
	</header> <!-- end header -->