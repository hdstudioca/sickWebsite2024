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

    <div id="hamburgerDiv"class="pos-f-t d-flex justify-content-end">
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
  </div>
</section>