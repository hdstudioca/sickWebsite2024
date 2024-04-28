<section class="container">
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-center py-3 mb-4 border-bottom">

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
	 
        <li><a href="#" class="nav-link px-2 link-dark" onclick="scrollToSection('portfolio_section')">Features</a></li>
        <li><a href="#" class="nav-link px-2 link-dark" onclick="scrollToSection('about_us_section')">About</a></li>
        <li><a href="#" class="nav-link px-2 link-dark" onclick="scrollToSection('contact_us_section')">Contact</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">LinkedIn</a></li>
      </ul>
    </header>
  </div>

  <script>
  function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
  }
</script>
</section>
