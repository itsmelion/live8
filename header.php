<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie ie-no-support" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>         <html class="ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>
		<?php wp_title(''); ?>
		<?php if(wp_title('', false)) { echo ' : '; } ?>
		<?php bloginfo('name'); ?>
	</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="content-language" content="<?php language_attributes(); ?>">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="reply-to" content="christhopherleao@icloud.com">
    <meta name="author" content="Christhopher Lion">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta name="theme-color" content="#A3E337" />
    <meta name="msapplication-TileColor" content="#A3E337" />
    <meta name="keywords" content="Live8, sound, live, virtual reality, vr, efeitos, luz, efeitos especiais, realidade virtual, som, acessórios, ao vivo, shows, soundhunters" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="<?php language_attributes(); ?>">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:url" content="//live8.com.br" />
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<nav class="menu">
  <a  title="Página inicial" href="<?php echo home_url();?>" class="menu-item"> <img src="<?php echo get_bloginfo('template_url') ?>/images/home.svg" alt="Home" /></a>  
</nav>