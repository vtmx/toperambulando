<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="author" content="Herbert Terra">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Title -->
		<title><?php wp_title(); ?></title>

		<!-- Style -->
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">	
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

		<!--Internet Explorer up to version 8.0 can't read HTML5 tags properly, you can't style them.-->
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.min.js"></script>
		<![endif]-->

		<!-- Generic -->
		<meta name="author" content="Herbert Terra">
		<meta name="keywords" content="toperambulando,to perambulando,herbert,herbert terra,viagens,aventuras,destinos,brasil,america do norte,america do sul,europa,asia">
		<meta name="robots" content="index, follow">

		<!-- SEO Verification -->
		<meta name="google-site-verification" content="e73WQKeIi1rlfKpa74UMErH0iZhfRq5g5XfYEmzQS2E">
		<meta name="alexaVerifyID" content="Caor2z-hEOTlA7plwi_Axa4gKhY">

		<!-- Facebook -->
		<meta property="og:locale" content="pt_BR">
		<meta property="og:type" content="website">
		<meta property="og:url" content="http://toperambulando.com.br">
		<meta property="og:site_name" content="Herbert Terra">
		<meta property="og:title" content="Herbert Terra">
		<meta property="og:description" content="Blog com informações sobre viagens">
		<meta property="og:image" content="http://toperambulando.com.br/wp-content/themes/to-perambulando/images/Perfil_Herbert.jpg">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="100">
		<meta property="og:image:height" content="100"> 
		<meta property="article:publisher" content="https://www.facebook.com/ToPerambulando"> 
		<meta property="article:author" content="Herbert Terra">
		<meta property="article:section" content="Tô Perambulando">   
		<meta property="article:tag" content="toperambulando,to perambulando,herbert,herbert terra,viagens,aventuras,destinos,brasil,america do norte,america do sul,europa,asia">

		<!-- Google+ -->
		<link rel="canonical" href="http://toperambulando.com.br">
		<link rel="publisher" href="https://plus.google.com/106306120649819552921/posts">

		<!-- Twitter -->
		<meta name="twitter:card" content="Tô Perambulando">
		<meta name="twitter:domain" content="http://toperambulando.com.br">
		<meta name="twitter:site" content="http://toperambulando.com.br">
		<meta name="twitter:title" content="Tô Perambulando">
		<meta name="twitter:description" content="Blog com informações sobre viagens">
		<meta name="twitter:creator" content="Herbert Terra">
		<meta name="twitter:image:src" content="http://toperambulando.com.br/wp-content/themes/to-perambulando/images/Perfil_Herbert.jpg">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!--[if lt IE 8]>
			<p class="browsehappy">Você está usando um navegador <strong>desatualizado</strong>. <a href="http://browsehappy.com/">Atualize seu navegador</a> para ter uma melhor experiência de navegação.</p>
		<![endif]-->

		<div id="page-container">
			<header role="banner">
				<h1 id="logo" itemscope itemtype="http://schema.org/Brand">
					<a href="<?php bloginfo('url'); ?>" title="tôPerambulando">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo" itemprop="logo" >
						<span id="site-description" itemprop="description" ><?php bloginfo( 'description' ); ?></span>
					</a>
				</h1>

				<form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('url'); ?>">
					<input type="text" id="searchtext" value="" name="s" class="s" placeholder="<?php if( get_search_query() ) { echo get_search_query(); } else { echo 'Pesquisar'; } ?>" >
					<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
				</form>

				<div class="social">
					<a class="btn facebook" target="_blank" href="https://www.facebook.com/ToPerambulando" title="Página no Facebook"><i class="fa fa-facebook"></i> Facebook</a>
					<a class="btn gplus" target="_blank" href="https://plus.google.com/106306120649819552921/posts" title="Página no Google Plus"><i class="fa fa-google-plus"></i> Google+</a>
				</div><!-- .social -->

				<div class="slide">
					<?php
						$query = new WP_Query( array( 'post_type' => 'slider', 'posts_per_page' => 1 ));
						while ( $query->have_posts() ) : $query->the_post();

							if( have_rows('slider') ): 

								while( have_rows('slider') ) : the_row(); 

								// vars
								$slider_title = get_sub_field('slider-title');
								$slider_image = get_sub_field('slider-image');
								$slider_text = get_sub_field('slider-text');

							?>
						  		<figure>
						  			<img src="<?php echo $slider_image; ?>" alt="<?php echo $slider_text; ?>">
						  			<a href="<?php echo $slider_link; ?>"><?php echo $slider_text; ?></a>
						  		</figure>
						  		
							<?php endwhile; ?>
						<?php endif; ?>
					<?php endwhile; ?>
				</div><!-- #slider -->
			</header>

			<nav>
				<?php wp_nav_menu( array( 'menu' => 'Menu' ) ); ?>
			</nav>
				
			<div id="main-container">

