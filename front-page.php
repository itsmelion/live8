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
		'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path class="svg-fill" style="fill-rule:evenodd;clip-rule:evenodd;" d="M445.7,158.3h-26.5v-44.7c0-7.6-6-13.7-13.3-13.7H106.2c-7.4,0-13.3,6.1-13.3,13.7v44.7H66.3 C59,158.3,53,164.5,53,172v226.4c0,7.6,6,13.7,13.3,13.7h148.3c6.7,0,12.4-5.1,13.2-12l7.4-61.5c1.3-10.7,10.2-18.8,20.7-18.8 c10.5,0,19.4,8.1,20.7,18.8l7.4,61.5c0.8,6.9,6.5,12,13.2,12h148.3c7.4,0,13.3-6.1,13.3-13.7V172 C459,164.5,453,158.3,445.7,158.3L445.7,158.3z M119.5,127.3h272.9v31H119.5V127.3L119.5,127.3z M432.3,384.7H309.1l-6-49.5 c-2.9-24.4-23.2-42.8-47.1-42.8c-23.9,0-44.2,18.4-47.2,42.8l-6,49.5H79.7v-199h352.7V384.7z"/><path class="svg-fill" style="fill-rule:evenodd;clip-rule:evenodd;"d="M156.6,200c-35.3,0-64,29.5-64,65.7c0,36.2,28.7,65.7,64,65.7s64-29.5,64-65.7 C220.5,229.5,191.8,200,156.6,200L156.6,200z M156.6,304.1c-20.6,0-37.3-17.2-37.3-38.3c0-21.1,16.7-38.3,37.3-38.3 c20.6,0,37.3,17.2,37.3,38.3C193.9,286.9,177.1,304.1,156.6,304.1z"/><path class="svg-fill" style="fill-rule:evenodd;clip-rule:evenodd;" d="M355.4,200c-35.3,0-64,29.5-64,65.7c0,36.2,28.7,65.7,64,65.7c35.3,0,64-29.5,64-65.7 C419.4,229.5,390.7,200,355.4,200L355.4,200z M355.4,304.1c-20.6,0-37.3-17.2-37.3-38.3c0-21.1,16.7-38.3,37.3-38.3 c20.6,0,37.3,17.2,37.3,38.3C392.8,286.9,376,304.1,355.4,304.1z"/></svg>'
	);
	$itemCaption = array('Sound Hunter', 'Audio & Effects', 'Virtual Reality');
	$itemText = array(
		'Briefing e assessoria personalizada para escolha das atrações musicais, consultoria técnica especializada em infraestrutura para eventos',
		'Locação e montagem de equipamentos profissionais de audio e efeitos visuais, desenvolvimento de projetos personalizados em plataforma 3D',
		'Cobertura de eventos com filmagem e edição em 360º, técnicas de realidade aumentada e time-lapse, entrega de box para reprodução de vídeos em realidade virtual');
	$edgeColor = '#131313';
	include( locate_template( 'partials/wave.php', false, false ) );
?>

<!--<div class="row">
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
</div>-->
<!--<section id="insight360">
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
				<iframe src="https://www.youtube.com/embed/v64KOxKVLVg?ecver=1&controls=0&showinfo=0" width="100%" height="auto" frameborder="0" allowfullscreen></iframe>
			</div>
			</div>
		</div>
</section>-->

<!--<div id="posts">
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
<?php the_post(); $fields = get_fields(get_the_ID()); ?>
	</div>
</div>
-->
<?php get_footer(); ?>