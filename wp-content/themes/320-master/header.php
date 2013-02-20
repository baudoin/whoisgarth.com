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

	<script type="text/javascript" src="//use.typekit.net/ouu4snh.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
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

	<header class="header" role="banner">
		<div class="inner clearfix">
			<div class="right">
				<p>PH: <a href="tel:1-<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a> <span><a href="mailto:<?php the_field('email_address', 'option'); ?>"><i class="icon-envelope-alt"></i></a></span></p>
			</div>	
			<span id="nav-toggle"><i class="icon-reorder"></i></span>
			<nav class="nav" role="navigation">
				
				<ul class="clearfix">
					<li class="garth"><a href="#garth"></a></li>
					<li class="what"><a href="#what">What I Do</a></li>
					<li class="who"><a href="#who">Who Is Garth?</a></li>
					<li class="work"><a href="#work">Power In Numbers</a></li>
					<li class="contact"><a href="#contact">Contact Us</a></li>
				</ul>

			</nav>
		</div>
	</header> <!-- end header -->