(function () {
	'use strict'

	var plugin = new Plugin()

	if (window.matchMedia('(max-width: 700px)').matches) {
		plugin.modal(document.querySelector('body'))
		plugin.menuToggle(document.querySelector('.menu-toggle'), document.querySelector('.menu'))
		plugin.searchToggle(document.querySelector('.nav-top .search .button'), document.querySelector('.nav-top .search .text'))
	} else {
		window.onscroll = function () { scrollToTop() }
	}

	function scrollToTop() {
		let navBottom = document.querySelector('.nav-bottom')
		let sticky = navBottom.offsetTop

		if (window.pageYOffset > sticky) {
			navBottom.classList.add('sticky')
		} else {
			navBottom.classList.remove('sticky')
		}
	}	
})();