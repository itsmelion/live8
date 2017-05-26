<?php /* Template Name: VirtualReality  */ ?>
<?php 
 /** 
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
 <header id="headerVR" class="d-flex flex-column align-items-start justify-content-center">
 	<div class="lead">
		<h1 class="display"><?= get_the_title() ?></h1>
		<h3><?= $fields['subtitulo']; ?></h3>
		<p><?= $fields['paragrafo_cabeçalho']; ?></p>
	</div>
 </header>

<div class="container">

<section id="insight360">
	<!-- 360 Insight -->

	<div class="row">
		<div class="col-md-6">
			<!--<img src="<?php echo get_bloginfo('template_url') ?>/images/360.gif" alt="360 gif" width="75" />-->
				<h1 class="display"><?= $fields['sessao-titulo']; ?></h1>
				<h3><?= $fields['sessao-titulo']; ?></h3>
				<p class="text-justify">
					<?= $fields['sessao-texto']; ?>
				</p>
		</div>
		<div class="col-md-6">
			<img id="box-closed" src="<?php echo get_bloginfo('template_url') ?>/images/vr/1.png" alt="oculos <?php bloginfo( 'name' );?>" />
			<img id="box-open" src="<?php echo get_bloginfo('template_url') ?>/images/vr/2.png" alt="oculos <?php bloginfo( 'name' );?>" />
		</div>
	</div>

	<div class="row">
		<div class="col text-center" style="margin-top: 3em">
			<h2>Exemplos</h2>
			<p>Veja abaixo alguns vídeos 360º</p>
		</div>
	</div>
	<div id="videoSample" class="row">
		<div class="col-md-6 col-sm-12">
			<div class="videoWrapper">
				<iframe src="<?= $fields['video1']; ?>?autoplay=0&showinfo=0&wmode=transparent&autohide=1&modestbranding=1&rel=0&hd=1" width="100%" height="auto" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="videoWrapper">
				<iframe src="<?= $fields['video2']; ?>?autoplay=0&showinfo=0&wmode=transparent&autohide=1&modestbranding=1&rel=0&hd=1" width="100%" height="auto" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

</div>


<?php include( locate_template( 'partials/combo.php', false, false ) ); ?>
<?php include( locate_template( 'partials/arrow-swipe.php', false, false ) ); ?>


<?php get_footer();?>