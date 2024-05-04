<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hdstudio</title>
	<link rel="icon" href="../res/HDStudioLogo.svg" type="image/png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="preload" href="styles.css" as="style" />

	<link rel="stylesheet" href="styles.css">
</head>

<body class="p-3" br-mode="off" saccades-color="" fixation-strength="2" saccades-interval="0" style="--fixation-edge-opacity: 80%; --br-line-height: 1; --br-boldness: 600;">
	<main>
		<?php
		// <!--Navbar-->

		include('navbar_section.php');

		// <!--index/landing-->

		include('landing_section.php');

		// <!--Our Work-->

		include('portfolio_section.php');

		// <!--About Us-->

		include('about_us_section.php');


		// <!--Contact Us-->
		include('contact_us_section.php');

		// <!--Footer-->
		include('footer_section.php');
		?>


	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="contact.js"> </script>
	<script src="aboutHover.js"> </script>
	<script src="dropdown.js"> </script>
</body>

</html>