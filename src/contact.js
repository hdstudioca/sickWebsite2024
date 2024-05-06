$(document).ready(function () {
	const emailInput = $('#floatingEmail');

	emailInput.on('input', function () {
		const email = emailInput.val();
		validateEmail(email, emailInput);
	});

	function validateEmail(email, emailInput) {
		// Use a regular expression to validate the email format
		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		const isValidEmail = emailRegex.test(email);

		if (isValidEmail) {
			emailInput.removeClass('is-invalid');
			emailInput.addClass('is-valid');
		} else {
			emailInput.removeClass('is-valid');
			emailInput.addClass('is-invalid');
		}
		return emailRegex.test(email);
	}

	const nameInput = $('#floatingName');

	nameInput.on('input', function () {
		const name = nameInput.val();
		validateName(name, nameInput);


	});

	function validateName(name, nameInput) {
		// Use a regular expression to validate the email format
		const nameRegex = /^.+$/;
		const isValidName = nameRegex.test(name);

		if (isValidName) {
			nameInput.removeClass('is-invalid');
			nameInput.addClass('is-valid');
		} else {
			nameInput.removeClass('is-valid');
			nameInput.addClass('is-invalid');
		}
		return nameRegex.test(name);
	}

	const contactForm = $('#contactForm');

	contactForm.on('submit', function (e) {
		console.log("submitting");
		e.preventDefault();
		const name = nameInput.val();
		const email = emailInput.val();
		const message = $('#floatingMessage').val();
		if (validateName(name, nameInput) & validateEmail(email, emailInput)) {
			console.log("nice!");
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function () {
				if (this.readyState == 4 && this.status == 200) {
					if (this.responseText == "success") {
						// Action to be performed if the email is sent successfully
					} else {
						// Action to be performed if the email is not sent successfully
					}
				} else {
					// Action to be performed if the email if status is not 200 and readyState is not 4
				}
				xhttp.open("POST", "send_email.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("name=" + name + "&email=" + email + "&message=" + message);
			}
		}
	});
});