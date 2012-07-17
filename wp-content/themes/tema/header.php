<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width; initial-scale=1.0">

<title><?php if (is_home() || is_front_page()) { echo bloginfo('name'); } else { echo wp_title(''); } ?></title>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo (themify_check('setting-custom_feed_url')) ? themify_get('setting-custom_feed_url') : bloginfo('rss2_url'); ?>">

<?php if(!themify_check('setting-shortcode_css')){ ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/themify/css/shortcodes.css" type="text/css" media="screen" />
<?php } ?>

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">

<!-- media-queries.js -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- media-queries.css -->
<link href="<?php echo get_template_directory_uri(); ?>/media-queries.css" rel="stylesheet" type="text/css">

<!-- google font -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<!-- html5.js -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- jquery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<!-- audio player -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/audio-player.js"></script>
<script type="text/javascript">
	AudioPlayer.setup("<?php echo get_template_directory_uri(); ?>/player.swf", {
		width: '90%',
		transparentpagebg: 'yes'
	});
</script>

<!-- comment-reply js -->
<?php if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); ?>

<!-- wp_header -->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="pagewrap">
	<div id="headerwrap">
	
		<header id="header" class="pagewidth">
			<hgroup>
				<?php if(themify_get('setting-site_logo') == 'image' && themify_check('setting-site_logo_image_value')){ ?>
					<?php themify_image("src=".themify_get('setting-site_logo_image_value')."&w=".themify_get('setting-site_logo_width')."&h=".themify_get('setting-site_logo_height')."&alt=".get_bloginfo('name')."&before=<div id='site-logo'><a href='".get_option('home')."'>&after=</a></div>"); ?>
				<?php } else { ?>
					 <h1 id="site-logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<?php } ?>
	
				<h2 id="site-description"><?php bloginfo('description'); ?></h2>
			</hgroup>
	
			<nav>
				<?php if (function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location' => 'main-nav' , 'fallback_cb' => 'default_main_nav' , 'container'  => '' , 'menu_id' => 'main-nav' , 'menu_class' => 'main-nav'));
				} else {
					default_main_nav();
				} ?>
				<!-- /#main-nav --> 
			</nav>

		</header>
		<!-- /#header -->
				
		<div id="nav-bar"></div>
		<!-- /nav-bar -->

	</div>
	<!-- /#headerwrap -->
	
	<div id="body" class="clearfix"> 
