<?php 

// function connectite_custom_nav_attributes ( $atts, $item, $args ) {
//     $atts['data-scroll'] = 'true';
//     return $atts;
// }
// add_filter( 'nav_menu_link_attributes', 'connectite_custom_nav_attributes', 10, 3 );

function theme_styles() {
	wp_enqueue_style( 'jquery_smooth', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css');
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/connectite.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script('scrollTo', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js', array('jquery'), '', true);
	wp_enqueue_script('jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script('bootstrap_hover', get_template_directory_uri() . '/js/jquery.bootstrap-dropdown-hover.min.js', array('jquery', 'bootstrap_js'), '', true);
	wp_enqueue_script('smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array('jquery'), '', true);
	wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery', 'bootstrap_js'), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );
// add_filter( 'show_admin_bar', '__return_false' );


//add_theme_support( 'menus' ); // This is to set the custom and dynamic menus
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'thermflo' ),
) );

require_once('wp_bootstrap_navwalker.php'); // Register Custom Navigation Walker

add_theme_support( 'post-thumbnails' ); // this allows you to set a featured image



add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );

/**
 * Register and load font awesome CSS files using a CDN.
 *
 * @link   http://www.bootstrapcdn.com/#fontawesome
 * @author FAT Media
 */

function prefix_enqueue_awesome() {
	wp_enqueue_style( 'prefix-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), '4.4.0' );
}

// Add extra classes for the first and last items in all WordPress menus
add_filter( 'wp_nav_menu_objects', function ( $items ) {
   if ( ! empty( $items ) ) {
      $items[1]->classes[] = 'menu-item-first';
      $items[ count( $items ) ]->classes[] = 'menu-item-last';
   }
 
   return $items;
} );

function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h6>',
		'after_title' => '</h6>'
	));

}

create_widget( 'Footer First Column', 'first-column', 'Displays in the first column of the footer' );
create_widget( 'Footer Second Column', 'second-column', 'Displays in the second column of the footer' );
create_widget( 'Footer Third Column', 'third-column', 'Displays in the third column of the footer' );
create_widget( 'Footer Fourth Column', 'fourth-column', 'Displays in the fourth column of the footer' );
create_widget( 'Footer Fifth Column', 'fifth-column', 'Displays in the fifth column of the footer' );


create_widget( 'Page Sidebar', 'page', 'Displays on the side of the pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog-right', 'Displays on the side of pages in the blog section' );


?>