(function () {
	'use strict'

	if (window.matchMedia('(max-width: 700px)').matches) {
		document.querySelector('.menu-toggle').addEventListener('click', menuToggle)
		document.querySelector('.nav-top .search .button').addEventListener('click', searchToggle)
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
	
	function menuToggle() {
		e.preventDefault()
		document.querySelector('.menu').classList.toggle('menu-active')
	}

	function searchToggle(e) {
		e.preventDefault()
		document.querySelector('.nav-top .search .text').classList.toggle('text-active')
	}
})();