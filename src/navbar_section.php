<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Navbar with Hamburger Menu</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


  <style>
    /* Hamburger menu icon */
    .navbar-toggler {
      border: none;
      background-color: transparent;
      outline: none;
      color: #000;
    }

    .navbar-toggler-icon {
      width: 1.5rem;
      height: 1.5rem;
      background-color: transparent; /* Set background color to transparent */
      /* You may also need to set the icon's background image or content */
    }

    /* Hide hamburger menu on medium and larger screens */
    @media (min-width: 768px) {
      .hide-on-md-lg {
        display: none;
      }

      .navbar-collapse {
        display: flex !important; /* Ensure navbar links are always displayed on medium and larger screens */
      }
    }

    /* Hide navbar links by default */
    .navbar-collapse {
      display: none;
    }

    

  </style>
</head>
<body>

<section class="container">
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-center py-3 mb-1 border-bottom">
      <!-- Navbar links -->
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 collapse navbar-collapse" id="navbarSupportedContent">
        <li><a href="#" class="nav-link px-2 link-dark mr-4" onclick="scrollToSection('portfolio_section')">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark mr-4" onclick="scrollToSection('about_us_section')">About</a></li>
        <li><a href="#" class="nav-link px-2 link-dark mr-4" onclick="scrollToSection('contact_us_section')">Contact</a></li>
        <li><a href="#" class="nav-link px-2 link-dark mr-4">LinkedIn</a></li>
      </ul>
       
  </header>
     <div class="pos-f-t d-flex justify-content-end">
  <div class="collapse justify-content-end" id="navbarToggleExternalContent">
    <ul class="nav flex-column"> 
      <li class="nav-item"><a href="#" class="nav-link px-2 link-dark mr-4" onclick="scrollToSection('portfolio_section')">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 link-dark mr-4" onclick="scrollToSection('about_us_section')">About</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 link-dark mr-4" onclick="scrollToSection('contact_us_section')">Contact</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 link-dark mr-4">LinkedIn</a></li>
    </ul>
  </div>

  <nav class="navbar navbar-light ml-auto d-md-none"> <!-- Hide on medium and larger screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleCollapse()">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>


</section>

<!-- Bootstrap JS (jQuery and Popper.js are required) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
  }
</script>

<script>
  let isCollapsed = false;

  function toggleCollapse() {
    const collapseContent = document.getElementById('navbarToggleExternalContent');
    const navbarToggle = document.querySelector('.navbar-toggler');
    
    if (isCollapsed) {
      collapseContent.classList.remove('show');
    } else {
      collapseContent.classList.add('show');
    }
    
    isCollapsed = !isCollapsed;
  }
</script>

</body>
</html>
