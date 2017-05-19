<?php
/**
 * alive8 template for displaying the header
 *
 * @package WordPress
 * @subpackage alive8
 * @since alive8 1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie ie-no-support" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( ); ?></title>
		<meta name="viewport" content="width=device-width" />
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >

			<!--<nav class="navbar navbar-toggleable-md navbar-inverse sticky-top menu">
						<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<a class="blog-name navbar-brand" href="/">
						<img class="d-inline-block align-middle" src="<?php echo get_bloginfo('template_url') ?>/images/logo-white.svg" width="50px" height="auto" alt="logo live8"/>
						</a>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<?php
					$nav_menu = wp_nav_menu(
						array(
							'container' => 'li',
							'container_class' => '',
							'items_wrap' => '<li class="%2$s">%3$s</li>',
							'theme_location' => 'main-menu',
							'fallback_cb' => '__return_false',
						)
					); ?>
							</div>
						</div>
						<span class="navbar-text hidden-sm-down">
      				<?php bloginfo( 'description' ); ?>
    				</span>
				</nav>-->