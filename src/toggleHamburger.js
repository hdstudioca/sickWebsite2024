let isCollapsed = false;

function toggleCollapse() {
	const collapseContent = document.getElementById('navbarToggleExternalContent');
	const toggledHam = document.getElementById('hamburgerDiv');
	const navbarToggle = document.querySelector('.navbar-toggler');

	if (isCollapsed) {
		collapseContent.classList.remove('show');
		toggledHam.classList.add('justify-content-end');
		toggledHam.classList.remove('justify-content-between');
		
	} else {
		collapseContent.classList.add('show');
		toggledHam.classList.remove('justify-content-end');
		toggledHam.classList.add('justify-content-between');
	}

	isCollapsed = !isCollapsed;

}