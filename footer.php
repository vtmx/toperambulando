				</div><!-- .container -->
			</main>

			<footer class="footer">
				<?php if ( is_active_sidebar('widget_footer1') || is_active_sidebar('widget_footer2') || is_active_sidebar('widget_footer3') || is_active_sidebar('widget_footer4') ): ?>
					<div class="widgets">
						<div class="container widgets-container">
							<?php dynamic_sidebar('widget_footer1') ?>
							<?php dynamic_sidebar('widget_footer2') ?>
							<?php dynamic_sidebar('widget_footer3') ?>
							<?php dynamic_sidebar('widget_footer4') ?>
						</div>
					</div>
				<?php endif; ?>
				
				<div class="disclaimer">
					<div class="container">
						<div class="copyright">2006 - 2019 © Todos os direitos reservados por <a href="/">Herbert Terra</a></div>					
						<div class="designer">Design por <a href="http://vitormelo.com.br/" target="_blank">Vitor Melo</a></div>
					</div>
				</div>
			</footer>

			<a class="scroll-top" href="#"><i class="icon fa fa-chevron-up"></i></a>

			<div class="modal"></div>
		</div><!-- #app -->

		<!-- Scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/plugins/plugins.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery-all.min.js"></script> -->
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
		<script>
			$(document).ready(function() {
        		$('.wp-block-image, .wp-block-gallery, .mgl-gallery').lightGallery({
					selector: 'a',
					getCaptionFromTitleOrAlt: false,
					counter: false,
					download: false,
					zoom: false,
					actualSize: false,
					fullScreen: false,
					autoplayControls: false,
					thumbnail:true,
					showThumbByDefault: false,
					preload: 3
				})

    		})

			 var swiper = new Swiper('.slider', {
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev'
				},
				autoplay: {
					delay: 5000
				},
				speed: 800,
				loop: true
			})
		</script>
			
		<!-- Google Analytics -->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('set', 'userId', {{ USER_ID }}); // Defina o ID de usuário usando o user_id conectado.
			ga('create', 'UA-56519521-2', 'auto');
			ga('send', 'pageview');
		</script>

		<?php wp_footer(); ?>
	</body>
</html>
