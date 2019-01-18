<?php
// custom login logo
// -----------------------------------------------------------------------------
// function custom_login_logo() {
// 	global $path_img;
// 	echo '<style type="text/css"> h1 a {
// 		width: auto !important;
// 		height: 100px !important;
// 		margin: 0 0 17px 0 !important;
// 		background-image:url(wp-content/themes/toperambulando/dist/img/logo-admin.png) !important; background-size: auto auto !important;
// 	} </style>';
// }
// add_action('login_head', 'custom_login_logo');

// Remove image medium_large
// -----------------------------------------------------------------------------
// add_filter( 'intermediate_image_sizes', function( $sizes )
// {
//     return array_filter( $sizes, function( $val )
//     {
//         return 'medium_large' !== $val; // Filter out 'medium_large'
//     } );
// } );

// add_filter( 'intermediate_image_sizes', 'wpq_image_cleaner' );
// 	function wpq_image_cleaner( $sizes ) {
// 	// return array( 'thumb', 'medium', 'large' );
// }

// custom footer
// -----------------------------------------------------------------------------
// function custom_admin_footer() {
// 	echo 'Customizado por <a href="http://vitormelo.com.br/" title="Visite o site!">Vitor Melo</a>';
// }
// add_filter('admin_footer_text', 'custom_admin_footer');

// theme support
// -----------------------------------------------------------------------------
add_theme_support('post-thumbnails');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

// menu
// -----------------------------------------------------------------------------
function register_custom_menu() {
	register_nav_menu('custom_menu', __('Menu'));
}
add_action('init', 'register_custom_menu');

// register sidebar
// -----------------------------------------------------------------------------
if (function_exists('register_sidebar')) {
	 register_sidebar(array(
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}

// comments
// -----------------------------------------------------------------------------
if(get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
}
?>
