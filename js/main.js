(function () {
	'use strict'

	const plugin = new Plugin()

	if (window.matchMedia('(min-width: 700px)').matches) {
		plugin.sticky('.nav-bottom')
	} else {
		plugin.menuToggle('.menu-toggle', '.menu')
		plugin.searchToggle('.nav-top .search .button', '.nav-top .search .text')
	}
})();