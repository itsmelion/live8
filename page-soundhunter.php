<?php /* Template Name: Sound Hunter */ ?>
<?php 
/*
 * Pages
 *
 * @package WordPress
 * @subpackage alive8
 * @since alive8 1.0
 */
 ?>
<?php get_header(); ?>
<?php
	$fields = get_fields(get_the_ID());
	the_post();
?>
 <header id="headerhunter" class="d-flex flex-column align-items-center justify-content-center">
 	<div class="lead text-center">
		<h1 class="display"><?= get_the_title() ?></h1>
		<h3><?= $fields['subtitulo']; ?></h3>
	</div>
 </header>

<div class="tip">
	<img src="<?php echo get_bloginfo('template_url') ?>/images/icons/soundhunter.svg" alt="soundwave" />
	<article class="d-flex flex-column align-items-stretch align-content-stretch">
		<h3 style="padding-right: 90px ">O que é um SoundHunter?</h3>
		<p>
			É um serviço para ajudar a escolher o melhor tipo de música para o seu evento 
			e te oferecer uma melhor experiência de show ao vivo.
		</p>
	</article>
</div>

<div class="container">
<div class="row">
		<div class="col-md-12 text-center" style="margin-top: 3em">
			<h1>Como Funciona?</h1>
			<p style="margin: 1rem .5rem">É bem simples, são 3 etapas te oferecer a melhor experiencia possível.</p>
		</div>
</div>
 </div>
<?php
	$itemCaption = array('Briefing', 'Triagem', 'Apresentação');
	$edgeColor = '#eaeaea';
	include( locate_template( 'partials/wave.php', false, false ) );
?>
<div class="container">
	<div class="row">
		<section class="d-flex flex-wrap flex-row align-items-stretch align-content-stretch justify-content-around" style="width: 100%">
			<article class="apple-card" style="background-image: url('<?php echo get_bloginfo('template_url') ?>/images/soundhunter/header.jpg')">
					<a href="#" class="portfolio-link" data-toggle="modal" data-frame="iframe" data-target="#liveModal" data-theVideo="https://www.youtube.com/embed/yRuVYkA8i1o?autoplay=1&autohide=1&modestbranding=1&rel=0&hd=1">
					<img class="play-btn" src="<?php echo get_bloginfo('template_url') ?>/images/play.svg" alt="play" />
					</a>
				<div class="legenda">
					<img src="<?php echo get_bloginfo('template_url') ?>/images/icons/arrow.svg" alt="Swipe up"/>
					<h3>Assista 360graus</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</article>
			<article class="apple-card" style="background-image: url('<?php echo get_bloginfo('template_url') ?>/images/soundhunter/header.jpg')">
				<div class="legenda">
					<img src="<?php echo get_bloginfo('template_url') ?>/images/icons/arrow.svg" alt="Swipe up"/>
					<h3>Be spotlighted</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</article>
		</section>
	</div>

	<div class="row text-center" style="margin: 2em 0">
		<a class="btn btn-primary btn-block" href="#joinCast">
			Eu tenho uma banda
		</a>
	</div>
	
<?php include( locate_template( 'partials/combo.php', false, false ) ); ?>

</div>

<div id="joinCast" class="overlay">
		<aside class="social text-center" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
			<h2 class="m-3">Entre pro time!</h2>
			<p class="text-left">Inscreva a sua banda, seja visto!
				<br>Nós temos uma excelente infraestrutura para os seus shows,
				e conosco voce ganha mais visibilidade</p>
			<a class="btn btn-primary" href="mailto:daniel@live8.com.br?cc=alexandre@live8.com.br?subject=Quero%20participar%20do%20Elenco&amp;body=Oi%20vi%20o%20site%20de%20voces%20e%20gostaria%20de%20saber%20mais">
				Entre em contato
			</a>
			<img src="<?php echo get_bloginfo('template_url') ?>/images/soundhunter/i-want-you.png" alt="Queremos você!">
		</aside>
		<a href="#close" class="btn-close" aria-hidden="true"><span class="sr-only">Close</span></a>
</div>
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

<?php get_footer(); ?>