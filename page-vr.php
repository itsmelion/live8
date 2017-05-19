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

	<div class="row">
		<div class="col-md-6">
			<img src="<?php echo get_bloginfo('template_url') ?>/images/360.gif" alt="360 gif" width="75" />
				<h1 class="display">Reviva em 360º</h1>
				<h3>Uma experiencia que só a Live8 pode oferecer</h3>
				<p class="text-justify">
					360degreees experience for living. Uma experiencia 360graus, para guardar na memória.
					Voce leva um oculos rift pra levar pra todos seus amigos assistirem e não perder absolutamente nada.
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
				<iframe src="https://www.youtube.com/embed/v64KOxKVLVg?autoplay=0&showinfo=0&wmode=transparent&autohide=1&modestbranding=1&rel=0&hd=1" width="100%" height="auto" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="videoWrapper">
				<iframe src="https://www.youtube.com/embed/v64KOxKVLVg?autoplay=0&showinfo=0&wmode=transparent&autohide=1&modestbranding=1&rel=0&hd=1" width="100%" height="auto" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

</div>


<div class="container intercall-title">
	<div class="row">
		<div class="col-12 text-center">
			<h1 class="display">Live Combo!</h1>
			<h3>Leve mais estes 2 servicos e tenha uma experiencia imbatível</h3>
		</div>
	</div>
</div>
<div class="container">
	<div class="row intercall">
		<div class="col-md-6 col-sm-12 soundhunter">
			<h2>Soundhunter</h2>
			<div>
				<h3>As demos da sua banda em um outro patamar</h3>
				<p class="hidden-sm-down">
					Se você tem uma banda, se inscreva e para o nosso cast e seja visto por nossos clientes,
					e de quebra eles vão receber uma demo sua, em realidade aumentada.
				</p>
			</div>
			<legend class="hidden-sm-up text-center">ou</legend>
			<div>
				<h3>Ache uma banda, do jeito que você precisa</h3>
				<p class="hidden-sm-down">
					Nossos especialistas analisam seu perfil e encontram com voce a banda ideal.<br>
					E você pode vê-las em 360º e realidade virtual.
				</p>
			</div>
		</div>

		<div class="col-md-6 col-sm-12 soundfx">
			<h2>Audio & Effects</h2>
			<div>
				<h3>Iluminação e Efeitos visuais</h3>
				<p class="hidden-sm-down">
					Iluminação programada e temática.
					pistas de dança e etc.
				</p>
			</div>
			<legend class="hidden-sm-up text-center">ou</legend>
			<div>
				<h3>Sonorização de qualidade</h3>
				<p class="hidden-sm-down">
					Audio, microfonagem, DJ's, retornos etc.
				</p>
			</div>
		</div>
	</div>
</div>


<?php get_footer();?>