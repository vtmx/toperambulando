				</div><!-- .container -->
			</main>

			<footer class="footer">
				<div class="widgets">
					<div class="container widgets-container">
						<?php if (dynamic_sidebar('Rodapé 1')): endif; ?>
						<?php if (dynamic_sidebar('Rodapé 2')): endif; ?>
						<?php if (dynamic_sidebar('Rodapé 3')): endif; ?>
						<?php if (dynamic_sidebar('Rodapé 4')): endif; ?>
					</div>
				</div>
				
				<div class="disclaimer">
					<div class="container">
						<div class="copyright">2006 - 2019 © Todos os direitos reservados por <a href="/">Herber Terra</a></div>					
						<div class="designer">Design por <a href="http://vitormelo.com.br/" target="_blank">Vitor Melo</a></div>
					</div>
				</div>
			</footer>

			<a class="scroll-top" href="#"><i class="icon fa fa-chevron-up"></i></a>
		</div><!-- #app -->

		<!-- Scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/plugins/plugins.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery.min.js"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.11/js/lightgallery-all.min.js"></script> -->
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
		<script>
			$(document).ready(function() {
				$('.wp-block-image').lightGallery({
					selector: 'figure a',
					getCaptionFromTitleOrAlt: false,
					counter: false,
					download: false,
					zoom: false,
					actualSize: false,
					fullScreen: false,
					autoplayControls: false
				})

        		$('.wp-block-gallery').lightGallery({
					selector: '.blocks-gallery-item figure a',
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

				// Get all images of post
				// $('.post').lightGallery({
				// 	selector: 'a[href$=".jpg"], a[href$=".png"], a[href$=".gif"]',
				// 	getCaptionFromTitleOrAlt: false,
				// 	counter: false,
				// 	download: false,
				// 	zoom: false,
				// 	actualSize: false,
				// 	fullScreen: false,
				// 	autoplayControls: false,
				// 	thumbnail:true,
				// 	showThumbByDefault: false,
				// 	preload: 3
				// })				
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
	</body>
</html>
