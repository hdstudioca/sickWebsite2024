// desc: dropdown menu animation
$('.btn-secondary').click(function (e) {
	console.log("dropdown-menu clicked");
	e.stopPropagation();
	e.preventDefault();
});