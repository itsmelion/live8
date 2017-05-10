<?php 
/* Template Name: Audio FX */
?>
<?php 
/*
@package WordPress
 * @subpackage alive8
 * @since alive8 1.0
 */
 ?>
<?php get_header(); ?>
<header id="headerFX" class="d-flex flex-column align-items-center justify-content-center">
	<div class="swipe fx1"></div>
	<div class="swipe fx2"></div>
	<div class="swipe fx3"></div>
	<div class="lead text-center">
		<h1 class="display">Audio & Effects</h1>
		<h3>Efeitos visuais e som, do jeito que você precisa.</h3>
	</div>
</header>
<div class="container">

	<div class="row duplex">
			
		<article class="col-md-8 d-flex flex-column align-items-stretch align-content-stretch">
			<h3>Sonorização e efeitos visuais</h3>
			<p>
				Nós vamos além de montar simplesmente um palquinho, e tudo pronto.<br>
				Cuidamos da iluminação da entrada, dos ambientes e programamos os efeitos especiais
				das luzes de acordo com as músicas, para que seu evento seja um sucesso
				e a sua esperiência ao vivo seja única, e inesquecível.
			</p>
		</article>

		<div class="col-md-4"></div>

	</div>

</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center" style="margin-top: 3em">
			<h2>Galeria</h2>
			<p>Veja abaixo nossas fotos</p>
		</div>
	</div>
	<div class="row">
		<section class="card-container" style="width: 100%">
			<?php include( locate_template( 'partials/fx-gallery.php', false, false ) ); ?>
		</section>
	</div>

	<div class="row">
		
	</div>
</div>
<?php get_footer();?>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	<!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
	<div class="pswp__bg"></div>

	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">

		<!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>

		<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		<div class="pswp__ui pswp__ui--hidden">

			<div class="pswp__top-bar">

				<!--  Controls are self-explanatory. Order can be changed. -->

				<div class="pswp__counter"></div>

				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

				<button class="pswp__button pswp__button--share" title="Share"></button>

				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

				<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
				<!-- element will get class pswp__preloader--active when preloader is running -->
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div>
			</div>

			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>

		</div>

	</div>

</div>