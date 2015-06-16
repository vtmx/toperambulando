				<footer role="contentinfo">
					<p class="copyright">2006 - 2014 © Todos os direitos reservados por <a href="http://toperambulando.com.br/">Herber Terra</a></p>
					<p class="designer">Tema por <a href="http://vitormelo.com.br/">Vitor Melo</a></p>
					<a href="#" class="scroll-top"><i class="fa fa-chevron-up"></i></a>
				</footer>
			</div><!-- #main-container -->
		</div><!-- #page-container -->

		<!-- Script -->
		<script src="<?php bloginfo('template_directory'); ?>/js/script.min.js"></script>

		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-56519521-2', 'auto');
		  ga('send', 'pageview');
		</script>

		<!-- Booking -->
		<script>
			var booking = {
			env : {
			b_simple_weekdays: ['2ª','3ª','4ª','5ª','6ª','Sa.','Do.'],
			b_simple_weekdays_for_js: ['Seg.','Ter.','Qua.','Qui.','Sex.','Sab.','Dom.'],
			b_long_weekdays: ['Segunda-feira','Terça-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sábado','Domingo']
			}
			}
			function addzero( value )
			{
			while( value.length<2 ) value = String("0") + value;
			return value;
			}
			function checkDateOrder(frm, ci_day, ci_month_year, co_day, co_month_year) {
			if (document.getElementById) {
			var frm = document.getElementById(frm);
			// create date object from checkin values
			// set date to 12:00 to avoid problems with one
			// date being wintertime and the other summertime
			var my = frm[ci_month_year].value.split("-");
			var ci = new Date (my[0], my[1]-1, frm[ci_day].value, 12, 0, 0, 0);
			// create date object from checkout values
			my = frm[co_month_year].value.split("-");
			var co = new Date (my[0], my[1]-1, frm[co_day].value, 12, 0, 0, 0);
			// if checkin date is at or after checkout date,
			// add a day full of milliseconds, and set the
			// selectbox values for checkout date to new value
			if (ci >= co){
			co.setTime(ci.getTime() + 1000 * 60 * 60 * 24);
			frm[co_day].value = co.getDate();
			var com = co.getMonth()+1;
			frm[co_month_year].value = co.getFullYear() + "-" + com;
			}
			}
			}
		</script>
		
		<?php wp_footer(); ?>
	</body>
</html>