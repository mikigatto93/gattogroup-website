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

          <?php if ($current_page === 'home') : ?>
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          <?php else : ?>
            <a class="nav-link" href="home">HOME</a>
          <?php endif; ?>
        </li>

        <li class="nav-item">
          <?php if ($current_page === 'chi-siamo') : ?>
            <a class="nav-link active" aria-current="page" href="#">CHI SIAMO</a>
          <?php else : ?>
            <a class="nav-link" href="chi-siamo">CHI SIAMO</a>
          <?php endif; ?>
        </li>

        <li class="nav-item dropdown has-megamenu">
          <?php if ($current_page === 'prodotti') : ?>
            <a class="nav-link dropdown-toggle active" aria-current="page" href="prodotti" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PRODOTTI
            </a>
          <?php else : ?>
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PRODOTTI
            </a>
          <?php endif; ?>


          <div class="dropdown-menu megamenu" role="menu">

            <div class="container-fluid p-0">
              <div class="d-flex flex-row justify-content-evenly">

                <dl class="megamenu-nav-list">
                  <dt><a href="finestre-in-PVC-WnD">FINESTRE IN PVC</a></dt>
                  <dd><a href="#">Konfortline</a></dd>
                  <dd><a href="#">Square Plus</a></dd>
                  <dd><a href="#">D+</a></dd>
                  <dd><a href="#">Bilico</a></dd>
                  <dd><a href="#">Aluskin</a></dd>
                </dl>

                <dl class="megamenu-nav-list">
                  <dt><a href="#">SISTEMI SCORREVOLI <br> IN PVC</a></dt>
                  <dd><a href="#">Smart Slide</a></dd>
                  <dd><a href="#">HST</a></dd>
                  <dd><a href="#">Slide Plus</a></dd>
                  <dd><a href="#">PSK</a></dd>
                </dl>

                <dl class="megamenu-nav-list">
                  <dt><a href="#">FINESTRE IN LEGNO</a></dt>
                  <dd><a href="#">Profilo 1</a></dd>
                  <dd><a href="#">Profilo 2</a></dd>
                  <dd><a href="#">Profilo 3</a></dd>
                </dl>


                <div>
                  <dl class="megamenu-nav-list">
                    <dt><a href="#">SISTEMI SCORREVOLI <br> IN LEGNO </a></dt>
                  </dl>

                  <dl class="megamenu-nav-list">
                    <dt><a href="#">PORTE IN LEGNO</a></dt>
                  </dl>

                  <dl class="megamenu-nav-list">
                    <dt><a href="#">BLINDATI</a></dt>
                  </dl>

                </div>
                <dl class="megamenu-nav-list">
                  <dt><a href="#">SISTEMI OSCURANTI</a></dt>
                  <dd><a href="#">Scuri</a></dd>
                  <dd><a href="#">Persiane</a></dd>
                  <dd><a href="#">Zanzariere</a></dd>
                </dl>

              </div>

            </div>

          </div> <!-- dropdown-mega-menu.// -->

        </li>

        <li class="nav-item">
          <?php if ($current_page === 'manutenzione') : ?>
            <a class="nav-link active" aria-current="page" href="#">MANUTENZIONE</a>
          <?php else : ?>
            <a class="nav-link" href="manutenzione">MANUTENZIONE</a>
          <?php endif; ?>
        </li>

        <li class="nav-item">
          <?php if ($current_page === 'lavori') : ?>
            <a class="nav-link active" aria-current="page" href="#">LAVORI</a>
          <?php else : ?>
            <a class="nav-link" href="lavori">LAVORI</a>
          <?php endif; ?>
        </li>
          
        <!--
        <li class="nav-item">
          <?php if ($current_page === 'showroom') : ?>
            <a class="nav-link active" aria-current="page" href="#">SHOWROOM</a>
          <?php else : ?>
            <a class="nav-link" href="showroom">SHOWROOM</a>
          <?php endif; ?>
        </li>
          -->

        <li class="nav-item">
          <?php if ($current_page === 'contatti') : ?>
            <a class="nav-link active" aria-current="page" href="#">CONTATTI</a>
          <?php else : ?>
            <a class="nav-link" href="contatti">CONTATTI</a>
          <?php endif; ?>
        </li>

      </ul>
    </div>
  </div>
</nav>


<!-- HOME // CHI SIAMO // PRODOTTI // MANUTENZIONE // GALLERIA // SHOWROOM // CONTATTI  -->