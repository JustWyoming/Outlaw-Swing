<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>">

<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );?>
</title>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Diplomata+SC">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=IM+Fell+French+Canon+SC|IM+Fell+French+Canon|Sorts+Mill+Goudy">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="outerWrapper">
	<!-- closing div tag appears in footer for wp sites -->
    <header>
    <h1 class="headStyle"><img src="Outlaw-Swing-Logo.png" class="smLogo"width="97" height="120" alt=""/><br><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
    <h3 class="headStyle">
       <?php bloginfo('description'); ?>
     </h3>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /><!--this is where I could add a logo instead of the h1-->
    </h1>
     
        <nav class="mainMenu">
        	<?php wp_nav_menu(); ?>
        </nav>	
    </header>
<!-- closing body and html tags are on another document in a wordpress theme -->
