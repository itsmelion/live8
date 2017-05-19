<?php
/**
 * alive8 template for displaying the footer
 *
 * @package WordPress
 * @subpackage alive8
 * @since alive8 1.0
 */
?>

		<ul class="footer-widgets"><?php
			if ( function_exists( 'dynamic_sidebar' ) ) :
				dynamic_sidebar( 'footer-sidebar' );
			endif; ?>
		</ul>

	<footer>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12 col-md-2" id="footer-brand">
					<img src="<?php echo get_bloginfo('template_url') ?>/images/logo-white.svg" width="80px" height="auto" alt="logo live8"/>
				</div>
				<div class="col-xs-12 col-md-4"><a id="instagram" href="//instagram.com/produtoralive8">
					<img src="<?php echo get_bloginfo('template_url') ?>/images/icons/instagram-wave.svg">
				</a><div>
				<div class="col-sm-12 col-md-4 offset-md-6">
					<address>
						<a id="facebook" href="//facebook.com/produtoralive8">
							<img src="<?php echo get_bloginfo('template_url') ?>/images/icons/facebook.svg">
						</a>
						<br>Belo Horizonte/MG
						<p class="card-text">telefone: (31) 9 9581-0804</p>
						<a class="btn btn-success iconic" href="mailto:daniel@live8.com.br?cc=alexandre@live8.com.br;subject=Oi%20Live8&amp;body=Oi%20vi%20o%20site%20de%20voces%20e%20gostaria%20de%20saber%20mais">Escrever email</a>
						<a class="btn btn-outline-success hidden-md-up iconic" href="tel:+5531995810804">
							<img src="<?php echo get_bloginfo('template_url') ?>/images/icons/whatsapp.svg">
							Adicionar aos contatos
						</a>
					</address>
				</div>

			</div>
		</div>
		
		<div id="alia-footer">
			<div class="container">
				<div class="row">
					<div class="col">
					<img id="alicon" src="<?php echo get_bloginfo('template_url') ?>/images/alia-icon.svg" alt="alia logo"/>
					An exclusive design by <a href="http://alia.ml">Alia</a>
					</div>
				</div>
			</div>
		</div>
		
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>