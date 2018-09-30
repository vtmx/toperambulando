<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="author" content="Herbert Terra">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title><?php wp_title(); ?></title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">

	<!-- Styles -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/variables.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/elements.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/components.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/utilities.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/pages/archive.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/pages/single.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/pages/search.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/photoswipe.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.2/default-skin/default-skin.min.css">

	<!-- Fonts -->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700"> -->

	<!-- Icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!-- SEO -->
	<meta name="author" content="Herbert Terra">
	<meta name="keywords" content="toperambulando, herbert terra, viagens, aventuras, destinos, brasil, america do norte, america do sul, europa, asia">
	<meta name="robots" content="index, follow">

	<!-- SEO Verification -->
	<meta name="google-site-verification" content="e73WQKeIi1rlfKpa74UMErH0iZhfRq5g5XfYEmzQS2E">
	<meta name="alexaVerifyID" content="Caor2z-hEOTlA7plwi_Axa4gKhY">

	<?php wp_head(); ?>
</head>

<body <?php if (is_home()) { body_class('archive'); } else { body_class(); } ?>>

	<!--[if lt IE 8]>
		<p class="browsehappy">Você está usando um navegador <strong>desatualizado</strong>. <a href="http://browsehappy.com/">Atualize seu navegador</a> para ter uma melhor experiência de navegação.</p>
	<![endif]-->

		<div id="app">
		<header class="header">
			<nav class="nav nav-top">
				<div class="container">
					<div class="social">
						<a class="link facebook" target="_blank" href="https://www.facebook.com/ToPerambulando" title="Tô Perambulando no Facebook">
							<i class="icon fab fa-facebook-f"></i> Facebook
						</a>
						<a class="link instagram" target="_blank" href="https://www.instagram.com/toperambulando" title="Tô Perambulando no Instagram">
							<i class="icon fab fa-instagram"></i> Instagram
						</a>
					</div>

					<form role="search" method="get" id="searchform" class="search" action="<?php bloginfo('url'); ?>">
						<input class="text" type="text" id="searchtext" value="" name="s" class="s" placeholder="<?php if( get_search_query() ) { echo get_search_query(); } else { echo 'Pesquisar'; } ?>">
						<button class="button" type="submit" id="searchsubmit"><i class="icon fa fa-search"></i></button>
					</form>
				</div>
			</nav>

			<nav class="nav nav-middle">
				<div class="container">
					<a class="logo" href="<?php bloginfo('url'); ?>" title="tôPerambulando">
						<img class="logo-img" src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="Logo do site TôPerambulando">
					</a>

					<a class="nav-middle-adsense" href="#">

					</a>
				</div>
			</nav>

			<nav class="nav nav-bottom">
				<div class="container">
					<?php wp_nav_menu( array( 'menu' => 'Menu' ) ); ?>
					<button class="menu-toggle" data-target="nav-bottom-menu" aria-label="menu" aria-expanded="false">
						<i class="icon fas fa-bars"></i>
					</button>
				</div>
			</nav>	
		</header>

		<main class="main">
			<div class="container">
