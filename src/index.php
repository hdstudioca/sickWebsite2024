<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>hdstudio</title>
	<link href="
https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="contact.js"> </script>
	<script src="aboutHover.js"> </script>

</head>

<body br-mode="off" saccades-color="" fixation-strength="2" saccades-interval="0" style="--fixation-edge-opacity: 80%; --br-line-height: 1; --br-boldness: 600;">
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

		// <!--About Us Frame-->

		include('about_us_frames.php');

		// <!--Contact Us-->
		include('contact_us_section.php');

		// <!--Footer-->
		include('footer_section.php');
		?>


	</main>
</body>

</html>