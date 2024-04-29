<section class="container">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    
    .text {
  /* Keep your existing styles */
  letter-spacing: 7px;
  font-family: sans-serif;
  width: 100%;
  white-space: nowrap;
  overflow: hidden;
  text-align: center;
  animation: typing 3s, cursor .4s step-end infinite alternate;
  margin: 0 auto;
  text-align: center;

  /* Overwrite font-size with responsive classes */
  font-size: 5em; /* Default font size */
}

/*responsive text sizing classes */
@media (max-width: 576px) { /* Small devices (phones) */
  .text {
    font-size: 3em; /* Adjust font size for small screens */
  }
}

@media (min-width: 576px) and (max-width: 768px) { /* Medium devices (tablets) */
  .text {
    font-size: 4em; /* Adjust font size for medium screens */
  }
}

    /* creates cursor blinking effect
    @keyframes cursor {
      50% { border-color: transparent } 
    } */

    /* typing effect(display) */
    @keyframes typing {
      from { width: 0 } 
    }
  </style>

<script>
  function scrollToContactUs() {
    const contactUsSection = document.getElementById('contact_us_section');
    contactUsSection.scrollIntoView({ behavior: 'smooth' });
  }
</script>
</head>


<body>
  <!-- title -->
  <div class="container mt-5">
    <h1 class="text ">HD Studio</h1>
  </div>

  <!-- words -->
  <div class="container mt-5 mt-down">
  <div class="row justify-content-center">
    <div class=" text-center">
      <p class="fst-normal">Develope top-tier websites at a fraction of the market cost. <br> Our computer science student-led organization provides premium services at unparalleled value.</p>
    </div>
  </div>
</div>





<!-- action buttons -->
<div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-5">
  <button type="button" class="btn btn-outline-secondary btn-m px-4" onclick="scrollToContactUs()">Start Creating</button>
</div>

 

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</body>
</html>

</section>

