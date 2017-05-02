<?php 








/* Template Name: Sound Hunter */
?>
<?php









/**
g Pages
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
		 <h1 class="display">SoundHunters</h1>
		 <h3>Um show inesquecível, e a sua cara!</h3>
		 <button class="btn btn-primary btn-block">Encontre a banda ideal</button>
		 <a>Inscreva a sua banda</a>
	</div>
 </header>
<section class="container">
	<div class="row triplex">
		<div class="col-md-2 col-sm-3 triplex-icon">
			<img src="<?php echo get_bloginfo('template_url') ?>/images/soundwave.svg" alt="soundwave" />
		</div>
		<article class="col-md-10 col-sm-9 d-flex flex-column align-items-stretch align-content-stretch">
			<h3>O que é SoundHunter?</h3>
			<p>
				É um serviço para ajudar a escolher o melhor tipo de música para o seu evento 
				e te oferecer uma melhor experiência de show ao vivo.
			</p>
		</article>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center" style="margin-top: 3em">
			<h1>Como Funciona?</h1>
			<p>É bem simples, são 3 etapas te oferecer a melhor experiencia possível.</p>
		</div>
	</div>
</div>
<?php
			$itemCaption = array('Briefing', 'Triagem', 'Apresentação');
$edgeColor = '#420C5A';
include( locate_template( 'partials/wave.php', false, false ) );
?>
<div class="container">
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
<section class="container">
	<div class="row triplex">
		<div class="col-md-2 col-sm-2 triplex-icon">
			<img src="<?php echo get_bloginfo('template_url') ?>/images/soundwave.svg" alt="soundwave" />
		</div>
		<article class="col-md-7 col-sm-7 d-flex flex-column align-items-stretch align-content-stretch">
			<h3>O que é SoundHunter?</h3>
			<p>
				É um serviço para ajudar a escolher o melhor tipo de música para o seu evento 
				e te oferecer uma melhor experiência de show ao vivo.
			</p>
		</article>
		<div class="col-md-3 col-sm-3 triplex-pic" style="background-image: url('<?php echo get_bloginfo('template_url') ?>/images/soundhunter/acoustic.jpg')">
		</div>
	</div>
</section>
<?php get_footer();
?>
<div class="modal fade video-lightbox liveModal" id="liveModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
							<div align="center" class="embed-responsive embed-responsive-16by9">
								<iframe width="420" height="315" src="" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->