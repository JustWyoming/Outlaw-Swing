<!-- wordpress theme functions doc -->
<?php
	if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'Widgets for the sidebar.',
    		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</aside>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    }
	
	function new_excerpt_more($more) {
		global $post;
		return '... <a href="'. get_permalink($post->ID) . '">Read more</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

$args = array(
	'flex-width'    => true,
	'width'         => 940,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );

?>

