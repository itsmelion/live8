<?php



/**
live8 functions file
 *
 * @package WordPress
 * @subpackage alive8
 * @since alive8 1.0
 */





/******************************************************************************\
eme support, standard settings, menus and widgets
\******************************************************************************/

add_theme_support( 'post-formats', array( 'image', 'quote', 'status', 'link' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );





/**
rint custom header styles
 * @return void
 */
function alive8_custom_header() {
	$styles = '';
	if ( $color = get_header_textcolor() ) {
		echo '<style type="text/css"> ' .
										'.site-header .logo .blog-name, .site-header .logo .blog-description {' .
											'color: #' . $color . ';' .
										'}' .
									 '</style>';
	}
}
add_action( 'wp_head', 'alive8_custom_header', 11 );

$custom_bg_args = array(
	'default-color' => '232323',
	'default-image' => '',
);
add_theme_support( 'custom-background', $custom_bg_args );

register_nav_menu( 'main-menu', __( 'Your sites main menu', 'alive8' ) );

if ( function_exists( 'register_sidebars' ) ) {
	register_sidebar(
					array(
						'id' => 'home-sidebar',
						'name' => __( 'Home widgets', 'alive8' ),
						'description' => __( 'Shows on home page', 'alive8' )
					)
				);
	
	register_sidebar(
					array(
						'id' => 'footer-sidebar',
						'name' => __( 'Footer widgets', 'alive8' ),
						'description' => __( 'Shows in the sites footer', 'alive8' )
					)
				);
}

if ( ! isset( $content_width ) ) $content_width = 650;




/**
nclude editor stylesheets
 * @return void
 */



/*function alive8_editor_style() {
d_editor_style( 'css/wp-editor-style.css' );
}
add_action( 'init', 'alive8_editor_style' );
*/





/******************************************************************************\
ripts and Styles
\******************************************************************************/




/**
nqueue alive8 scripts
 * @return void
 */
function alive8_enqueue_scripts() {
wp_enqueue_style( 'alive8-styles', get_stylesheet_uri(), array(), '1.0' );
wp_enqueue_script( 'jquery' );
wp_register_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', false, '1.12.1', true);
wp_enqueue_script('jquery-ui');
wp_register_script('tween-max', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js', false, '1.19.1', true);
wp_enqueue_script('tween-max');
wp_register_script('scroll-magic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', false, '2.0.5', true);
wp_enqueue_script('scroll-magic');
wp_register_script('tether',  'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', false, '1.4.0', true);
wp_enqueue_script('tether');
wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', false, '4.0.0-alpha.6', true);
wp_enqueue_script('bootstrap-js');
wp_enqueue_script( 'default-scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'alive8_enqueue_scripts' );





/******************************************************************************\
ntent functions
\******************************************************************************/




/**
isplays meta information for a post
 * @return void
 */
function alive8_post_meta() {
if ( get_post_type() == 'post' ) {
	echo sprintf(
						__( 'Posted %s in %s%s by %s. ', 'alive8' ),
						get_the_time( get_option( 'date_format' ) ),
						get_the_category_list( ', ' ),
						get_the_tag_list( __( ', <b>Tags</b>: ', 'alive8' ), ', ' ),
						get_the_author_link()
					);
}
edit_post_link( __( ' (edit)', 'alive8' ), '<span class="edit-link">', '</span>' );
}
