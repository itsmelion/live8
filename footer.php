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
				<div class="col-sm-12 col-md-2">
					<img src="wp-content/themes/alive/images/logo-white.svg" width="75px" height="auto" alt="logo live8"/>
					<caption><?php bloginfo( 'description' ); ?></caption>
				</div>
				<div class="col-sm-12 col-md-8">
					<address>
						Rua Bélgica, 85<br>Eldorado - Contagem/MG - 32 340-030
						<p class="card-text">telefone: (31) 9 9581-0804</p>
						<a class="btn btn-success d-inline-block" href="mailto:daniel@live8.com.br?cc=alexandre@live8.com.br;subject=Oi%20Live8&amp;body=Oi%20vi%20o%20site%20de%20voces%20e%20gostaria%20de%20saber%20mais">Escrever email</a>
						<a class="btn btn-outline-success d-inline-block hidden-md-up" href="tel:+5531995810804">Adicionar aos contatos</a>
					</address>
					
				</div>
				<div class="col-sm-12 col-md-2">
					<ul>
						<li>Dúvidas</li>
						<li>Contrato de adesão</li>
						<li>Clientes</li>
						<li>Contato</li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="alia-footer">
			<div class="container">
				<div class="row">
					<div class="col">
					<img id="alicon" src="http://alia.ml/logo-small.svg" alt="alia logo"/>
					An exclusive design by <a href="http://alia.ml">Alia</a>
					</div>
				</div>
			</div>
		</div>
		
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>