<?php get_header(); ?>
<div id="home-wrap">
	<header class="home text-center">
	<a class="logo" href="<?php echo home_url();?>" title="<?php bloginfo( 'name' );?>">
		<img src="<?php echo get_bloginfo('template_url') ?>/images/logo-white.svg" alt="Live8 Logo" width="125px" height="auto" />
	</a>
<?php
	$itemSVG = array(
		'/images/icons/soundhunter.svg',
		'/images/icons/vr.svg',
		'/images/icons/soundfx.svg'
	);
	$itemCaption = array('Sound Hunter', 'Virtual Reality', 'Audio & Effects');
	$itemText = array(
		'Briefing e assessoria personalizada para escolha das atrações musicais, consultoria técnica especializada em infraestrutura para eventos',
		'Cobertura de eventos com filmagem e edição em 360º, técnicas de realidade aumentada e time-lapse, entrega de box para reprodução de vídeos em realidade virtual',
		'Locação e montagem de equipamentos profissionais de audio e efeitos visuais, desenvolvimento de projetos personalizados em plataforma 3D'
		);
	include( locate_template( 'partials/degrade-icons.php', false, false ) );
?>

<div class="text-center arrow light up" style="margin-top: -96px; bottom: 0; position: absolute;">
	<img src="<?php echo get_bloginfo('template_url') ?>/images/icons/arrow.svg" alt="Swipe up"/>
</div>
</header>

</div>

<?php get_footer(); ?>