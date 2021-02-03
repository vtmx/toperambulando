<?php
// Theme support
// -----------------------------------------------------------------------------
add_theme_support('post-thumbnails');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

// Disable Jpeg compress
// -----------------------------------------------------------------------------
add_filter('jpeg_quality', 'jpeg_quality');
function jpeg_quality() { return 100; };
add_filter('wp_editor_set_quality', 'wp_editor_set_quality');
function wp_editor_set_quality() { return 100; }

// Menu
// -----------------------------------------------------------------------------
function register_custom_menu() {
	register_nav_menu('custom_menu', __('Menu'));
}
add_action('init', 'register_custom_menu');

// Add ACF menu
// -----------------------------------------------------------------------------
if (function_exists('acf_add_options_page')) {
	acf_add_options_page('Slider');
}

// Register sidebar
// -----------------------------------------------------------------------------
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'id' => 'widget_header',
		'name' => 'Anúncio Cabeçalho',
		'before_widget' => '<div class="adsense">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));

	register_sidebar(array(
		'id' => 'highlights',
		'name' => 'Destaques',
		'before_widget' => '<div class="highlight">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="highlight-title">',
		'after_title' => '</h3>',
	));

	 register_sidebar(array(
		'id' => 'sidebar_archive',
		'name' => 'Barra Lateral',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	 register_sidebar(array(
		'id' => 'sidebar_post',
		'name' => 'Barra Lateral Post',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'id' => 'widget_footer1',
		'name' => 'Rodapé 1',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'id' => 'widget_footer2',
		'name' => 'Rodapé 2',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'id' => 'widget_footer3',
		'name' => 'Rodapé 3',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}

// Comments
// -----------------------------------------------------------------------------
if (get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
}

?>
