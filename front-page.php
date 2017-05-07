<?php get_header();
?>
<header class="home d-flex flex-column align-items-center justify-content-center">
	<div>
	<a class="logo" href="<?php echo home_url();
?>" title="<?php bloginfo( 'name' );
?>">
		<img src="<?php echo get_bloginfo('template_url') ?>/images/logo-white.svg" alt="Live8 Logo" width="225px" height="auto" />
	</a>
	</div>
</header>
<?php
			$itemCaption = array('item1', 'dois', 'tres');
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
				<img id="oculos" src="<?php echo get_bloginfo('template_url') ?>/images/rift.png" alt="oculos <?php bloginfo( 'name' );
?>" />
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
				<img id="oculos" src="<?php echo get_bloginfo('template_url') ?>/images/rift.png" alt="oculos <?php bloginfo( 'name' );
?>" />
			</div>
		</div>
		<div id="videoSample" class="row">
			<div class="col">
			<iframe src="https://www.youtube.com/embed/v64KOxKVLVg?ecver=1" width="100%" height="auto" frameborder="0" allowfullscreen></iframe>
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