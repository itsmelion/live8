<?php

add_theme_support( 'post-formats', array( 'image', 'quote', 'status', 'link' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );


function alive8_custom_header() {
	$styles = '';
	if ( $color = get_header_textcolor() ) {
		echo '<style type="text/css">.site-header .logo .blog-name, .site-header .logo .blog-description { color: #' . $color . ';}</style>';
	}
}
add_action( 'wp_head', 'alive8_custom_header', 11 );

$custom_bg_args = array(
	'default-color' => 'e0e0e0',
	'default-image' => '',
);
add_theme_support( 'custom-background', $custom_bg_args );

register_nav_menu( 'main-menu', __( 'Your sites main menu', 'alive8' ) );

if ( ! isset( $content_width ) ) $content_width = 650;

if (!is_admin()) {
    wp_deregister_script('jquery');                                // De-Register jQuery
}
function alive8_enqueue_scripts() {
	wp_enqueue_style( 'alive8-styles', get_stylesheet_uri(), array(), '1.0' );
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', false, '3.2.1', true);
	wp_enqueue_script( 'jquery' );
	wp_register_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', false, '1.12.3', true);
	wp_enqueue_script( 'popper-js' );
	wp_register_script('jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', false, '1.12.1', true);
	wp_enqueue_script('jquery-ui');
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', false, '4.0.0-alpha.6', true);
	wp_enqueue_script('bootstrap');
	wp_register_script( 'touchswipe', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js', false, '1.6.18', true);
	wp_enqueue_script('touchswipe');
	wp_register_script('jquery-slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', false, '1.6.0', true);
	wp_enqueue_script('jquery-slick');
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/jquery-photoswipe/min/jquery.photoswipe-global.js', array(), '1.0', true );
	wp_enqueue_script( 'default-scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'alive8_enqueue_scripts' );

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' 	=> 'General Settings',
        'menu_title'	=> 'General Settings',
        'menu_slug' 	=> 'general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false,
        'menu_icon'     => 'dashicons-admin-multisite'
    ));
}

function disable_wp_emojicons() {
    
    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
    add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    
    if (isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'])) {
        remove_action('wp_head', array(
            $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
            'recent_comments_style'
        ));
    }
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
// Remove Actions
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );

add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet