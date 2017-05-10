<?php get_header(); ?>
<header class="home d-flex flex-column align-items-center justify-content-center">
	<div>
	<a class="logo" href="<?php echo home_url();?>" title="<?php bloginfo( 'name' );?>">
		<img src="<?php echo get_bloginfo('template_url') ?>/images/logo-white.svg" alt="Live8 Logo" width="225px" height="auto" />
	</a>
	</div>
</header>
<?php
	$itemSVG = array(
		'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><path class="svg-fill" d="M256,3.7C120.1,3.7,9.5,117.3,9.5,257c0,139.7,110.6,253.3,246.5,253.3c135.9,0,246.5-113.6,246.5-253.3 C502.5,117.3,391.9,3.7,256,3.7L256,3.7z M270.8,479.3v-39.9h-29.6v39.9C133.4,471.8,46.9,383,39.6,272.2h38.9v-30.4H39.6 C46.9,131,133.4,42.2,241.2,34.7v39.9h29.6V34.7c107.9,7.5,194.3,96.3,201.6,207.1h-38.9v30.4h38.9 C465.1,383,378.6,471.8,270.8,479.3z"/><path class="svg-fill" d="M152.6,305.2c15.3-10.4,32.2-16.7,48.6-22.2c2.4-0.8,4.7-1.9,7.1-2.7l0.5-0.3c3.5-1.3,6.7-2.5,9.4-4 c0.1-0.3,0.3-0.8,0.5-1.6c-13.5-20.2-22.7-51.5-22.7-78.3c0-22.7,6.9-39.6,20.1-49.8c-5.7-3-12.5-4.1-19.9-4.1 c-19.6,0-35.5,8-35.5,36.9c0,19.2,7,42.7,17.5,56.4c-0.1,1.1-0.2,2.2-0.4,3.2c-0.6,2.9-1.6,6.2-4.3,7.9c-3,1.8-6.3,3-9.6,4.2 c-13.6,4.7-27.6,8.8-39.7,17.1c-6.3,4.3-10.5,12.7-12.9,19.9c-2.4,7.5-3.4,14.8-3.2,25h37C147.5,307.7,150,307,152.6,305.2z"/><path class="svg-fill" d="M387.8,268.1c-12.1-8.2-26.1-12.5-39.7-17.2c-3.3-1.2-6.6-2.4-9.6-4.2c-2.7-1.6-3.7-5-4.3-7.9 c-0.3-1.6-0.4-3.1-0.5-4.7c9.8-13.9,16.4-36.4,16.4-55c0-28.9-15.9-37-35.5-37c-7.5,0-14.4,1.2-20.1,4.2 c13,10.3,19.9,27.1,19.9,49.7c0,26.1-8.5,56.1-21.5,76.5c0.1,0.2,0.1,0.4,0.1,0.7c0.3,1.6,0.6,2.4,0.8,2.8c2.8,1.6,6.2,2.9,10,4.3 l5.7,2c16.8,5.7,34.2,12.7,49.8,23.4c2.6,1.7,4.9,2,7.2,7.1h37.3c0.1-10.1-0.8-17.5-3.2-25C398.3,280.6,394.1,272.4,387.8,268.1z" /><path class="svg-fill" d="M352.9,314.9c-16.1-11-34.8-16.7-52.9-23c-4.4-1.6-8.8-3.2-12.8-5.7c-3.6-2.2-4.9-6.6-5.7-10.5 c-0.4-2.1-0.6-4.2-0.7-6.3c13.1-18.5,21.8-48.6,21.8-73.3c0-38.5-21.2-49.3-47.3-49.3c-26.1,0-47.3,10.7-47.3,49.3 c0,25.6,9.3,56.9,23.3,75.2c-0.1,1.4-0.3,2.9-0.5,4.3c-0.8,3.9-2.2,8.3-5.7,10.5c-4,2.4-8.4,4-12.8,5.5 c-18.1,6.3-36.8,11.8-52.9,22.8c-8.4,5.6-14,16.6-17.2,26.2c-3.2,10-4.5,22.8-4.3,32.9h236.7c0.2-10.1-1.1-23-4.3-32.9 C366.9,330.9,361.2,320.5,352.9,314.9z"/></g></svg>',
		'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path style="fill-rule:evenodd;clip-rule:evenodd;" class="svg-fill" d="M360.8,56.1c-4.1,0-7.5,3.4-7.5,7.7c0,4.2,3.4,7.7,7.5,7.7c4.1,0,7.5-3.4,7.5-7.7 C368.3,59.5,364.9,56.1,360.8,56.1L360.8,56.1z M364.5,463.6h-217c-2.1,0-3.7,1.7-3.7,3.8c0,2.1,1.7,3.8,3.7,3.8h217 c2.1,0,3.7-1.7,3.7-3.8C368.3,465.3,366.6,463.6,364.5,463.6L364.5,463.6z M256,363.7c-20.6,0-37.4-17.2-37.4-38.4 c0-21.2,16.8-38.4,37.4-38.4c20.6,0,37.4,17.2,37.4,38.4C293.4,346.4,276.6,363.7,256,363.7L256,363.7z M256,279.1 c-24.8,0-44.9,20.7-44.9,46.1c0,25.5,20.1,46.1,44.9,46.1c24.8,0,44.9-20.7,44.9-46.1C300.9,299.7,280.8,279.1,256,279.1L256,279.1z M256,109.9c8.3,0,15,6.9,15,15.4c0,8.5-6.7,15.4-15,15.4c-8.3,0-15-6.9-15-15.4C241,116.8,247.7,109.9,256,109.9L256,109.9z M256,148.3c12.4,0,22.5-10.3,22.5-23.1c0-12.7-10-23.1-22.5-23.1c-12.4,0-22.5,10.3-22.5,23.1C233.5,138,243.6,148.3,256,148.3 L256,148.3z M256,425.2c53.6,0,97.3-44.9,97.3-100c0-55.1-43.6-100-97.3-100s-97.3,44.8-97.3,100C158.7,380.3,202.4,425.2,256,425.2 L256,425.2z M256,209.9c-62,0-112.3,51.6-112.3,115.3c0,63.7,50.3,115.3,112.3,115.3c62,0,112.3-51.6,112.3-115.3 C368.3,261.5,318,209.9,256,209.9L256,209.9z M256,71.5c-28.9,0-52.4,24.1-52.4,53.8c0,29.7,23.5,53.8,52.4,53.8 s52.4-24.1,52.4-53.8C308.4,95.6,284.9,71.5,256,71.5L256,71.5z M256,194.5c37.2,0,67.4-31,67.4-69.2c0-38.2-30.2-69.2-67.4-69.2 s-67.4,31-67.4,69.2C188.6,163.5,218.8,194.5,256,194.5L256,194.5z M398.2,463.6c0,12.7-10.1,23.1-22.5,23.1H136.3 c-12.4,0-22.5-10.3-22.5-23.1V48.4c0-12.7,10.1-23.1,22.5-23.1h239.5c12.4,0,22.5,10.4,22.5,23.1V463.6L398.2,463.6z M375.7,9.9 c20.6,0,37.4,17.3,37.4,38.4v415.2c0,21.1-16.8,38.4-37.4,38.4H136.3c-20.6,0-37.4-17.3-37.4-38.4V48.4c0-21.1,16.8-38.4,37.4-38.4 H375.7z"/></svg>',
		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125" x="0px" y="0px"><title>virtual_reality_</title><g data-name="final icons"><path class="svg-fill" d="M54.11,69.1l1.7,9.32,0,.2a1.5,1.5,0,0,0,3-.54L56.94,67.94l3.33-1.36A12.94,12.94,0,0,0,67,60.17l-1.64-.11L63.72,60a9.91,9.91,0,0,1-4.58,3.84l-4.42,1.81h0L51.32,67a1.5,1.5,0,1,0,1.14,2.78Z"/><path class="svg-fill" d="M32.14,60.23l-1.55.12-1.54.14,1.41,4a8.29,8.29,0,0,1,.45,3.3L30.15,79.5a1.5,1.5,0,0,0,1.4,1.59h.1a1.5,1.5,0,0,0,1.5-1.4v-.17L33.91,68a11.29,11.29,0,0,0-.61-4.49Z"/><path class="svg-fill" d="M82.77,56.33c.12-2.06.19-4.18.19-6.33C83,25.45,74.7,6.22,64.15,6.22a8.88,8.88,0,0,0-1.51.14,11.7,11.7,0,0,0-6.46,3.79,1.49,1.49,0,0,0-.3,1.55,1.47,1.47,0,0,0,.36.57,1.5,1.5,0,0,0,2.12-.06,9.33,9.33,0,0,1,4.29-2.8,5.87,5.87,0,0,1,1.5-.2c8.3,0,15.35,17.51,15.79,38.69q0,1,0,2.09c0,.92,0,1.83,0,2.74q0,.5,0,1c0,.5,0,1-.07,1.5,0,.19,0,.37,0,.56q-.08,1.4-.2,2.77l0,.19q-.12,1.39-.28,2.75c-.06.48-.12.95-.18,1.42Q79,64,78.79,65.12c-3.68.57-8.3,1.07-14,1.42a1.5,1.5,0,0,0,.09,3h.09c4.37-.27,9-.67,13.28-1.28-.2,1-.41,1.95-.63,2.89-2.59,10.73-7,18.32-12.1,19.47a6,6,0,0,1-1.34.16c-3.3,0-6.64-3-9.41-8.32v0a1.5,1.5,0,0,0-2.67,1.38c3.36,6.52,7.54,10,12.09,10a8.64,8.64,0,0,0,1.32-.11c6.74-1,12.41-10,15.34-23q.32-1.42.59-2.91l.05-.27q.26-1.42.47-2.89.18-1.25.34-2.55.11-.9.2-1.81c0-.31.06-.62.09-.93,4.22.84,6.78,1.78,7.43,2.59a6.94,6.94,0,0,1-2.77,1.38c-.71.24-1.54.48-2.53.72-.14,1-.29,2-.45,2.91l-.05.28c4.14-.95,7.28-2.21,8.41-3.89a2.49,2.49,0,0,0,.46-1.4C93,59.29,88.7,57.53,82.77,56.33Z"/><path class="svg-fill" d="M66.47,57.33l1.52.11c3.19.24,6.07.55,8.62.89v-.18q.11-1.38.19-2.78c-2.74-.36-5.61-.63-8.4-.85l1.21-10.3a7.49,7.49,0,0,0,5.67-6.86l.16-3a7.51,7.51,0,0,0-7.08-7.9l-.73,0A21.3,21.3,0,0,0,27,35.61V40l-.95.86a5.41,5.41,0,0,0-1.77,3.83c-.16,5.17.45,8.64,1.79,10.38C16.16,56.1,7,58.11,7,61.89a2.67,2.67,0,0,0,.43,1.44c1.08,1.71,4.23,3,9.85,4.14a1.5,1.5,0,0,0,.58-2.94,39.75,39.75,0,0,1-5-1.27A7.65,7.65,0,0,1,10,61.87c1.12-1.36,7.52-3,18.08-4.09l1.54-.15,1.54-.13c5.39-.44,11.7-.71,18.81-.71,5.48,0,10.47.16,14.94.44ZM30,35.61a18.3,18.3,0,0,1,34.14-9.4l-17.59-1a7.43,7.43,0,0,0-5.42,1.9c-.15.13-.28.27-.42.41l-.09.06L30,37.25Zm42.45-1.43-.16,3a4.52,4.52,0,0,1-3.85,4.21,4.64,4.64,0,0,1-.89,0l-.63,0-5.29-.29-3-.16L46,40.26h-.22a4.55,4.55,0,0,1-4.25-4.74l0-.81.12-2.19a4.54,4.54,0,0,1,1.49-3.11l.17-.12a4.44,4.44,0,0,1,3.08-1l19.19,1,1.63.09,1,.05a4.44,4.44,0,0,1,.62.1A4.49,4.49,0,0,1,72.45,34.18ZM41.22,41.53,30,51.66,28.58,53l-.2.18c-.62-.88-1.24-3.52-1.09-8.4A2.36,2.36,0,0,1,28.07,43l.44-.4L30,41.29l8.59-7.76-.1,1.82A7.49,7.49,0,0,0,41.22,41.53ZM44.07,43a7.5,7.5,0,0,0,1.51.24h0L58.73,44l.13,4.12-3.09.29a1.5,1.5,0,0,0,.14,3H56l4.5-.42a1.5,1.5,0,0,0,1.36-1.54l-.17-5.27,4.84.26-1.16,9.92c-8-.5-14.72-.51-15.41-.51s-9.39,0-18.7.74Z"/><path class="svg-fill" d="M27.08,65.88q-1.95-.21-3.73-.45a1.5,1.5,0,0,0-.4,3q1.82.24,3.81.46h.16a1.5,1.5,0,0,0,.16-3Z"/></g></svg>'
	);
	$itemCaption = array('Soundhunter', 'Audio & Effects', 'Virtual Reality');
	$itemText = array(
		'Briefing e assessoria personalizada para escolha das atrações musicais, consultoria técnica especializada em infraestrutura para eventos',
		'Locação e montagem de equipamentos profissionais de audio e efeitos visuais, desenvolvimento de projetos personalizados em plataforma 3D',
		'Cobertura de eventos com filmagem e edição em 360º, técnicas de realidade aumentada e time-lapse, entrega de box para reprodução de vídeos em realidade virtual');
	$edgeColor = '#131313';
	include( locate_template( 'partials/wave.php', false, false ) );
?>
<div class="container">


<div class="row duplex">
			
		<article class="col-md-8 d-flex flex-column align-items-stretch align-content-stretch">
			<h3>This</h3>
			<p>
				Lorem ipsum
			</p>
		</article>

		<div class="col-md-4"></div>

	</div>

<div class="row">
	<section class="d-flex flex-row align-items-stretch align-content-stretch justify-content-between" style="width: 100%">
			<article class="apple-card" style="background-image: url('<?php echo get_bloginfo('template_url') ?>/images/gallery/thumbnails/4.jpg')">
				<div class="legenda">
					<span></span>
					<h2>Be spotlighted</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</article>
			<article class="apple-card" style="background-image: url('<?php echo get_bloginfo('template_url') ?>/images/gallery/thumbnails/5.jpg')">
				<div class="legenda">
					<span></span>
					<h2>Be spotlighted</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</article>
		</section>
</div>
<section id="insight360">
	<!-- 360 Insight -->
		<div class="row hidden-sm-up">
			<div class="col-sm-12 text-center">
				<img id="oculos" src="<?php echo get_bloginfo('template_url') ?>/images/rift.png" alt="oculos <?php bloginfo( 'name' );?>" />
			</div>
			<div class="col-sm-12 text-center">
				<img src="<?php echo get_bloginfo('template_url') ?>/images/360.gif" alt="360 gif" width="75" />
				<h1 class="display">360 View</h1>
				<h3>Dont miss a thing!</h3>
				<p class="text-justify">
					360degreees experience for living. Uma experiencia 360graus, para guardar na memória.
					Voce leva um oculos rift pra levar pra todos seus amigos assistirem e não perder absolutamente nada.
				</p>
			</div>
		</div>
		<div class="row hidden-sm-down">
			<div class="col text-center">
				<img src="<?php echo get_bloginfo('template_url') ?>/images/360.gif" alt="360 gif" width="90" />
				<h3>Dont miss a thing!</h3>
				<p>
					360degreees experience for living. Uma experiencia 360graus, para guardar na memória.
					Voce leva um oculos rift pra levar pra todos seus amigos assistirem e não perder absolutamente nada.
				</p>
			</div>
			<div class="col text-center">
				<img id="oculos" src="<?php echo get_bloginfo('template_url') ?>/images/rift.png" alt="oculos <?php bloginfo( 'name' );?>" />
			</div>
		</div>
		<div id="videoSample" class="row">
			<div class="col">
			<div class="videoWrapper">
				<iframe src="https://www.youtube.com/embed/v64KOxKVLVg?ecver=1" width="100%" height="auto" frameborder="0" allowfullscreen></iframe>
			</div>
			</div>
		</div>
</section>

<div id="posts">
	<div class="row">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
get_template_part( 'loop' );
endwhile;
else :
				get_template_part( 'loop', 'empty' );
endif;
?>
	</div>
</div>

</div>
	<?php get_footer();
?>