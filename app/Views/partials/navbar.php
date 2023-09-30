<nav class="navbar navbar-expand-lg fixed-top custom-nav-bg-color  border-bottom border-2">
  <div class="container">
    <a class="navbar-brand" href="home/">
      <img src="assets/img/logo.png" alt="Logo gatto group srl" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">

        <li class="nav-item">

          <?php if ($current_page === 'home') :?>
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          <?php else: ?>
            <a class="nav-link" href="home/">HOME</a>
          <?php endif; ?>
        </li>

        <li class="nav-item">
          <?php if ($current_page === 'chi-siamo') :?>
            <a class="nav-link active" aria-current="page" href="#">CHI SIAMO</a>
          <?php else :?>
            <a class="nav-link" href="chi-siamo/">CHI SIAMO</a>
          <?php endif; ?>
        </li>

        <li class="nav-item dropdown">
          <?php if ($current_page === 'prodotti') :?>
            <a class="nav-link dropdown-toggle active" aria-current="page" href="prodotti/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PRODOTTI
            </a>
          <?php else: ?>
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PRODOTTI
          </a>
          <?php endif; ?>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
          <?php if ($current_page === 'manutenzione') :?>
            <a class="nav-link active" aria-current="page" href="#">MANUTENZIONE</a>
          <?php else :?>
            <a class="nav-link" href="manutenzione/">MANUTENZIONE</a>
          <?php endif; ?>
        </li>

        <li class="nav-item">
          <?php if ($current_page === 'galleria') :?>
            <a class="nav-link active" aria-current="page" href="#">GALLERIA</a>
          <?php else :?>
            <a class="nav-link" href="galleria/">GALLERIA</a>
          <?php endif; ?>
        </li>

        <li class="nav-item">
          <?php if ($current_page === 'showroom') :?>
            <a class="nav-link active" aria-current="page" href="#">SHOWROOM</a>
          <?php else :?>
            <a class="nav-link" href="showroom/">SHOWROOM</a>
          <?php endif; ?>
        </li>

        <li class="nav-item">
          <?php if ($current_page === 'contatti') :?>
          <a class="nav-link active" aria-current="page" href="#">CONTATTI</a>
          <?php else :?>
            <a class="nav-link" href="contatti/">CONTATTI</a>
          <?php endif; ?>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- HOME // CHI SIAMO // PRODOTTI // MANUTENZIONE // GALLERIA // SHOWROOM // CONTATTI  -->