<?php get_header();
?>
<header class="home d-flex flex-column align-items-center justify-content-center">
	<div class="p-2">
		<h1 class="display">A Live Experience</h1>
	</div>
	<div class="p-2">
	<a class="logo" href="<?php echo home_url();
?>" title="<?php bloginfo( 'name' );
?>">
		<img src="<?php echo get_bloginfo('template_url') ?>/images/logo-white.svg" alt="Live8 Logo" width="225px" height="auto" />
	</a>
	</div>
</header>
<?php
			$itemCaption = array('item1', 'dois', 'tres');
$edgeColor = '#101010';
include( locate_template( 'partials/wave.php', false, false ) );
?>
<div class="container">
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
			<div class="col text-center">
				<img src="<?php echo get_bloginfo('template_url') ?>/images/oculus-right-list.svg" alt="right list" width="300px" />
			</div>
		</div>
		<div id="videoSample" class="row">
			<div class="col">
			<iframe src="https://www.youtube.com/embed/v64KOxKVLVg?ecver=1" frameborder="0" allowfullscreen></iframe>
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
<div class="card-deck">
  <div class="card card-inverse">
    <img class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/images/book/6.jpg" alt="Show">
    <div class="card-block">
      <h4 class="card-title">Sua banda quebrando o pau!</h4>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card card-inverse">
    <img class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/images/book/4.jpg" alt="Show">
    <div class="card-block">
      <h4 class="card-title">Boite</h4>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card card-inverse">
    <img class="card-img-top" src="<?php echo get_bloginfo('template_url') ?>/images/book/5.jpg" alt="Show">
    <div class="card-block">
      <h4 class="card-title">Iluminação</h4>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>
	<?php get_footer();
?>