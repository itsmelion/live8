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
 <header id="headerhunter" class="d-flex flex-column align-items-center justify-content-center">
 	<div class="lead text-center">
		 <h1 class="display">Virtual Reality</h1>
		 <h3>Para guardar, e reviver sem perder nada</h3>
	</div>
 </header>

<div class="container">

	<div class="row duplex">
			
		<article class="col-md-8 d-flex flex-column align-items-stretch align-content-stretch">
			<h3>Realidade Virtual, visão 360graus</h3>
			<p>
				Lorem impsum
			</p>
		</article>

		<div class="col-md-4"></div>

	</div>

</div>

<div class="container">
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