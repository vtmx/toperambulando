$(document).ready(function() {

	// Nav fixed
	var nav = $('nav');

	$(window).scroll(function () {
		if ($(this).scrollTop() > 350) {
			nav.addClass('nav-fixed');
		} else {
			nav.removeClass('nav-fixed');
		}
	});



	// Slider
	$('header .slide').owlCarousel({
		singleItem: true,
		autoPlay: 5000,
		stopOnHover: true,
		transitionStyle: 'fade',
		pagination: true,
		autoHeight: true
	});

	

	// Remove p empt
	$('p').each(function() {
		var $this = $(this);
		if ($this.html().replace(/\s|&nbsp;/g, '').length === 0) {
			$this.remove();
		}
	});


	// Tabs
	$('.nav-tabs li:first-child').addClass('active in');
	$('.tab-content .tab-pane:first-child').addClass('active in');


	// Magnific Popup
	$.extend(true, $.magnificPopup.defaults, {
		tClose: 'Fechar (Esc)',
		tLoading: 'Carregando...',
		gallery: {
			tPrev: 'Imagem anterior (Seta esquerda)',
			tNext: 'Próxima imagem (Seta direita)',
			tCounter: '%curr% de %total%'
		},
		image: {
			tError: '<a href="%url%">Esta imagem</a> não pode ser carregada.'
		},
		ajax: {
			tError: '<a href="%url%">O conteúdo</a> não pode ser carregado.'
		}
	});

	// Add class links to image
	$('a[href$=".jpg"], a[href$=".png"], a[href$=".gif"], .gallery a').magnificPopup({
		type: 'image',
		removalDelay: 300,
		mainClass: 'mfp-fade',
	});

	// post intro
	$('article .post-intro a[href$=".jpg"]').magnificPopup({
		type: 'image',
		removalDelay: 300,
		mainClass: 'mfp-fade',
		gallery: {
			enabled: true
		}
	});

	// post intro
	$('article #script a[href$=".jpg"]').magnificPopup({
		type: 'image',
		removalDelay: 300,
		mainClass: 'mfp-fade',
		gallery: {
			enabled: true
		}
	});

	// gallery
	$('article .gallery a').magnificPopup({
		type: 'image',
		removalDelay: 300,
		mainClass: 'mfp-fade',
		gallery: {
			enabled: true
		}
	});

	// Social Popup
	$('.post .social a').click(function() {
		var sharer = $(this).attr('href');
		var title = $(this).attr('title');
		var coordX = screen.width / 2 - 550 / 2;
		var coordY = screen.height / 2 - 700 / 2;
		window.open(sharer, title, 'width=550, height=550, left=' + coordX + ', top=' + coordY);
	});


	// Scroll Top
	$('.scroll-top').click(function() {
		$('html, body').animate({
			scrollTop: 0
		}, 500);
		return false;
	});


	// Search Hightlight
	var searchWord = $('.search-highlight').text();

	$('.search .post-summary p:contains("' + searchWord + '")').each(function() {
		var regex = new RegExp(searchWord, 'gi');
		$(this).html($(this).text().replace(regex, '<mark>' + searchWord + '</mark>'));
	});

	// Related Posts Slider
	$('#posts-related .slide').owlCarousel({
		items: 3,
		itemsDesktop: [330, 4],
		itemsDesktopSmall: [370, 3],
		itemsTablet: [600, 2],
		itemsMobile: false,
		navigation:true,
		navigationText: ['',''],
		pagination: false
	});

	// Slider
	$('.post .slide').owlCarousel({
		singleItem: true,
		autoPlay: 5000,
		stopOnHover: true,
		transitionStyle: 'fade',
		navigation:true,
		navigationText: ['',''],
		pagination: true,
		autoHeight: true
	});

});
