class Plugin {
	modal(el) {
		el.style.color = 'blue'
	}

	menuToggle(button, menu) {
		button.addEventListener('click', menuToggle)

		function menuToggle(e) {
			e.preventDefault()
			menu.classList.toggle('menu-active')
		}
	}

	searchToggle(button, form) {
		button.addEventListener('click', searchToggle)

		function searchToggle(e) {
			e.preventDefault()
			form.classList.toggle('text-active')
		}
	}
}

