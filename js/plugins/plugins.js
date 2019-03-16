class Plugin {
	sticky(el) {
		let nav = document.querySelector(el)

		window.onscroll = function () {
			let sticky = nav.offsetTop

			if (window.pageYOffset > sticky) {
				nav.classList.add('sticky')
			} else {
				nav.classList.remove('sticky')
			}
		}
	}

	menuToggle(el, el1) {
		let button = document.querySelector(el)
		let menu = document.querySelector(el1)

		button.addEventListener('click', function (e) {
			e.preventDefault()
			menu.classList.toggle('menu-active')
		})
	}

	searchToggle(el, el1, el2) {
		let button = document.querySelector(el)
		let form = document.querySelector(el1)
		let modal = document.querySelector(el2)

		button.addEventListener('click', searchToggle)
		modal.addEventListener('click', searchToggle)

		function searchToggle(e) {
			e.preventDefault()
			modal.classList.toggle('modal-open')
			form.classList.toggle('search-text-active')
			form.focus()
		}
	}
}