<?php 

/* Template Name: VirtualReality  */
?>
<?php 

/**
ges
 *
 * @package WordPress
 * @subpackage alive8
 * @since alive8 1.0
 */
 ?>
<?php get_header();
?>
 <header id="headerVR" class="d-flex flex-column align-items-start justify-content-center">
 	<div class="lead">
		<h1 class="display">Virtual Reality</h1>
		<h3>Para guardar, e reviver sem perder nada</h3>
		<p>
			Seu evento gravado com tecnologia inovadora. Usando técnicas de realidade aumentada e time-lapse.
			E acompanha um box com óculos para você ver seus vídeos em 360º.
		</p>
	</div>
 </header>

<div class="container">

<section id="insight360">
	<!-- 360 Insight -->
		<div class="row hidden-sm-up">
			<div class="col-sm-12 text-center">
				<img id="oculos" src="<?php echo get_bloginfo('template_url') ?>/images/rift.png" alt="oculos <?php bloginfo( 'name' );?>" />
			</div>
			<div class="col-sm-12 text-center">
				<img src="<?php echo get_bloginfo('template_url') ?>/images/360.gif" alt="360 gif" width="75" />
				<h1 class="display">Visão 360º</h1>
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

	<div class="row">
		<div class="col-md-12 text-center" style="margin-top: 3em">
			<h2>Galeria</h2>
			<p>Veja abaixo nossas fotos</p>
		</div>
	</div>
	<div class="row">
		<section class="d-flex flex-row align-items-stretch align-content-stretch justify-content-between" style="width: 100%">
			<article class="apple-card" style="background-image: url('<?php echo get_bloginfo('template_url') ?>/images/soundhunter/header.jpg')">
				<center>
					<a href="#" class="portfolio-link" data-toggle="modal" data-frame="iframe" data-target="#liveModal" data-theVideo="https://www.youtube.com/embed/yRuVYkA8i1o?autoplay=1&autohide=1&modestbranding=1&rel=0&hd=1">
					<img class="play-btn" src="<?php echo get_bloginfo('template_url') ?>/images/play.svg" alt="play" />
					</a>
				</center>
				<div class="legenda">
					<h2>Assista 360graus</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</article>
			<article class="apple-card" style="background-image: url('<?php echo get_bloginfo('template_url') ?>/images/soundhunter/header.jpg')">
				<div class="legenda">
					<span></span>
					<h2>Be spotlighted</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</article>
		</section>
	</div>
</div>
<?php get_footer();?>