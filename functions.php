<?php

//
// Disable Notification Media Folder
// -----------------------------------------------------------------------------
function filter_plugin_updates( $value ) {
	unset( $value->response['wp-media-folder/wp-media-folder.php'] );
	return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );


// custom login logo
function custom_login_logo() {
	global $path_img;
	echo '<style type="text/css"> h1 a {
		width: auto !important;
		height: 100px !important;
		margin: 0 0 17px 0 !important;
		background-image:url(wp-content/themes/toperambulando/dist/img/logo-admin.png) !important; background-size: auto auto !important;
	} </style>';
}
add_action( 'login_head', 'custom_login_logo' );

// custom Footer
function custom_admin_footer() {
	echo 'Customizado por <a href="http://vitormelo.com.br/" title="Visite o site!">Vitor Melo</a>';
}
add_filter( 'admin_footer_text', 'custom_admin_footer' );

// theme support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// filter
add_filter( 'use_default_gallery_style', '__return_false' );

// menu
add_action( 'init', 'register_custom_menu' );
function register_custom_menu() {
	register_nav_menu( 'custom_menu', __('Menu') );
}

// register sidebar
if ( function_exists( 'register_sidebar' ) ) {
	 register_sidebar(array(
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

// add style editor
add_editor_style( '/dist/css/wp/wp-editor.css' );

// style editor
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_content', 'wptexturize' );
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'the_excerpt', 'wptexturize' );
remove_filter( 'acf_the_content', 'wpautop' );
remove_filter( 'acf_the_content', 'wptexturize' );

// markdown support
add_filter( 'the_content', 'Markdown' );
add_filter( 'the_excerpt', 'Markdown' );
add_filter( 'acf_the_content', 'Markdown' );



// register custom post type slider
function slider() {

	$labels = array(
		'name'                => _x( 'Sliders', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Slider', 'text_domain' ),
		'parent_item_colon'   => __( 'Pai', 'text_domain' ),
		'all_items'           => __( 'Todos os Sliders', 'text_domain' ),
		'view_item'           => __( 'Ver slider', 'text_domain' ),
		'add_new_item'        => __( 'Adicionar novo slider', 'text_domain' ),
		'add_new'             => __( 'Adicionar Novo', 'text_domain' ),
		'edit_item'           => __( 'Editar slider', 'text_domain' ),
		'update_item'         => __( 'Atualizar slider', 'text_domain' ),
		'search_items'        => __( 'Pesquisar sliders', 'text_domain' ),
		'not_found'           => __( 'Slider não encontrado', 'text_domain' ),
		'not_found_in_trash'  => __( 'Slider não encontrado na lixeira', 'text_domain' ),
	);

	$args = array(
		'label'               => __( 'slider', 'text_domain' ),
		'description'         => __( 'Slider do cabeçalho', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 3,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'slider', 0 );

?>
