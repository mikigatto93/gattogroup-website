<?php $this->extend('templates/default'); ?>

<?php $this->section('content'); ?>


<div class="container-fluid pt-3 custom-margin-skip">

    <div class="row">
        <div class="container custom-centering-pad">
            <h1 class="display-1 my-5">Finestra in Legno <br> <span class="display-2"> Linea -nome- </span> </h1>
        </div>
    </div>


    <div class="row">

        <div class="container custom-centering-pad py-4">


            <div class="row">
                <div class="col-md-7 order-sm-2 order-md-1"><img src="https://unsplash.it/600/400.jpg?image=220" alt="" class="img-fluid"></div>
                <div class="col-md-5 order-sm-1 order-md-2">

                    <p class="mt-md-5 mt-sm-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, odio?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, beatae. Dolor sed perferendis eligendi tenetur neque aliquid eius ut soluta.
                    </p>

                </div>
            </div>



        </div>

    </div>

    <div class="row custum-row-bg-color mt-4 pt-3 pb-4">

        <div class="container custom-centering-pad">

            <div class="row">
                <h2 class="display-3 my-3"> Caratteristiche tecniche </h1>
            </div>


            <div class="row mt-3 align-items-center">
                <div class="col-md-6 col-lg-7">

                    <dl>

                        <dt>Lorem dolor</dt>
                        <dd>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, fugiat!</dd>

                        <dt>Lorem sit</dt>
                        <dd>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam.</dd>

                        <dt>Lorem amet</dt>
                        <dd>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores quibusdam ex amet?</dd>

                    </dl>

                </div>

                <div class="col-md-6 col-lg-5">
                    <img src="assets/img/Dettaglio-finestra-Konfortline.jpg" alt="konfortline" class="img-fluid">
                </div>
            </div>

        </div>

    </div>

    <!--
    <div class="row pb-4">

        <img src="assets/img/WND_Konfortline-1024x513.jpg" alt="" class="img-fluid px-0">
        
        <div class="container custom-centering-pad plus-section-product">
            
        <div class="row">
            <h2 class="display-3 mt-5 mb-5"> I plus delle finestre PVC Konfortline </h1>
        </div>
        

        <div class="row mt-3 align-items-center">
            <div class="col-sm-6 col-md-4 mb-3">
            <div class="card text-center">
            <h5 class="card-title">PROFESSIONALIT&Agrave;</h5>
            <div class="card-title-border"></div>
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, ab.
            </div>
            </div>
            </div>


            <div class="col-sm-6 col-md-4 mb-3">
            <div class="card text-center">
            <h5 class="card-title">QUALIT&Agrave;</h5>
            <div class="card-title-border"></div>
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero perspiciatis sint sed.
            </div>
            </div>
            </div>


            <div class="col-sm-6 col-md-4 mb-3">
            <div class="card text-center">
            <h5 class="card-title">POSA IN OPERA</h5>
            <div class="card-title-border"></div>
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, rem numquam.
            </div>
            </div>
            </div>
        </div>
        
        </div>

    </div>
-->


    <div class="row my-4 pt-3 pb-4">

        <div class="container custom-centering-pad">

            <div class="row">
                <h2 class="display-3 my-3"> Galleria </h1>
            </div>


            <div class="row mt-3">

                <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="konfortline-gallery" class="col-sm-4">
                    <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid gallery-image">
                </a>
                <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="konfortline-gallery" class="col-sm-4">
                    <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid gallery-image">
                </a>
                <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="konfortline-gallery" class="col-sm-4">
                    <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid gallery-image">
                </a>

            </div>

        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>


    <?php $this->endSection(); ?>