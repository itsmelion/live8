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
			<div  class="row">
				<div class="col">
					<img src="http://live8.com.br/wp-content/uploads/logo-white.svg" width="90px" height="auto" alt="logo live8"/>
				</div>
				<div class="col">live8 contact</div>
				<div class="col">third column</div>
			</div>
		</div>
		
		<div id="alia-footer">
			<div class="container">
				<div class="row">
					<div class="col">
					<img src="http://alia.ml/logo-small.svg" alt="alia logo"/>
					<a href="http://alia.ml">Alia</a>
					</div>
				</div>
			</div>
		</div>
		
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>