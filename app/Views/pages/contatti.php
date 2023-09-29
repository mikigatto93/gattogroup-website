<?php $this->extend('templates/default'); ?>





<?php $this->section('content'); ?>

<!--page content-->
  
<div class="container-fluid pt-3 custom-margin-skip">
    <div class="row">
      <div class="container custom-centering-pad">
        
        <h1 class="display-1 my-5">Contatti</h1>
      </div>
    
    </div>
    


    <div class="row custum-row-bg-color">
      <div class="container custom-centering-pad">
      <div class="row ps-4 py-4">
        <!--form section-->
        <div class="col-lg-6 ps-4 text-start">
          <form action="">

            <div class="row">
              <div class="col-12 gy-3">
                <label for="nameInput" class="form-label">Nome e cognome*</label>
                <input type="text" id="nameInput" class="form-control" required>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6 gy-3">
                <label for="phoneInput" class="form-label">Telefono*
                </label>
                <input type="text" id="phoneInput" class="form-control" required>
              </div>
              <div class="col-md-6 gy-3">
                <label for="emailInput" class="form-label">Email*</label>
                <input type="email" id="emailInput" class="form-control" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 gy-3">
                <label for="zipInput" class="form-label">CAP*</label>
                <input type="text" id="zipInput" class="form-control" required>
              </div>
              <div class="col-md-6 gy-3">
                <label for="cityInput" class="form-label">Città*</label>
                <input type="email" id="cityInput" class="form-control" required>
              </div>
            </div>


            <div class="row">
              <div class="col-12 gy-3">
                <label for="messageTextArea" class="form-label">Messaggio*</label>
                <textarea class="form-control" id="messageTextArea" rows="5"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col gy-3">
                <button type="submit" class="btn btn-primary">Invia messaggio</button>
              </div>
            </div>

          </form>
        </div>
        <!--end form section-->

        <!--map section-->
        <div class="col-lg-6 ps-4">

          <div class="ratio ratio-1x1 w-100">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202.70476848331512!2d12.060957380079838!3d45.284706332741806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477ec06b4430318d%3A0xe780a4fffa9f336b!2sGatto%20Group%20S.R.L.!5e0!3m2!1sit!2sit!4v1687812498750!5m2!1sit!2sit"
              allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>
        <!--end map section-->

      </div>
      </div>
    </div>

    <!--additional contact section-->
    <div class="row my-4 additional-contacts-section ">

        <div class="container custom-centering-pad">
          <div class="row g-2">
      
          <div class="col-sm-12 col-md-4">
        <div class="card text-center">
          <div class="card-img py-3"><i class="fa-solid fa-phone fa-2xl" ></i></div>
          <h2 class="card-title"> TELEFONO </h2>
          <div class="card-body mb-4">
            <div>+39 049 9714 209</div>
            <div>+39 349 1329 232</div>
          </div>
        </div>
          </div>

          <div class="col-sm-12 col-md-4">
        <div class="card text-center">
          <div class="card-img py-3"><i class="fa-solid fa-clock fa-2xl" ></i></div>
          <h2 class="card-title"> ORARI </h2>
          <div class="card-body">
            <div>Dal Lunedì al Sabato, dalle 8:00 alle 12:00 e dalle 14:00 alle 19:00</div>
            <div>Domenica chiuso</div>
          </div>
        </div>
          </div>

          <div class="col-sm-12 col-md-4">
        <div class="card text-center">
          <div class="card-img py-3"><i class="fa-solid fa-map-marker fa-2xl" ></i></div>
          <h2 class="card-title"> INDIRIZZO </h2>
          <div class="card-body mb-4">
            <div>Via Montagnon, 59C, 35028 Piove di Sacco (PD)</div>
          </div>
        </div>
          </div>
        
        </div>
    </div> 
    
    </div>  
  
    <!-- end additional contact section-->
    
  </div>
  <!--end page content-->

<?php $this->endSection(); ?>