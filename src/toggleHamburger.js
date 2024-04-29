function closeNavbarOnResize() {
    const windowWidth = window.innerWidth;
    const collapseContent = document.getElementById('navbarToggleExternalContent');
    if (windowWidth >= 768 && collapseContent.classList.contains('show')) {
        collapseContent.classList.remove('show');
        isCollapsed = false; // Reset isCollapsed variable
    }
}

// Event listener for window resizing
window.addEventListener('resize', closeNavbarOnResize);

let isCollapsed = false;

function toggleCollapse() {
    const collapseContent = document.getElementById('navbarToggleExternalContent');
    const toggledHam = document.getElementById('hamburgerDiv');
    
    if (isCollapsed) {
        collapseContent.classList.remove('show');
    } else {
        collapseContent.classList.add('show');
    }

    isCollapsed = !isCollapsed;
}
