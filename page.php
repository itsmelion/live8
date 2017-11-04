<?php get_header(); ?>

	<section class="page-content primary" role="main">
		<?php
			if ( have_posts() ) : the_post();

				get_template_part( 'loop' ); ?>
		<?php
			else :

				get_template_part( 'loop', 'empty' );

			endif;
		?>

	</section>

<?php get_footer(); ?>