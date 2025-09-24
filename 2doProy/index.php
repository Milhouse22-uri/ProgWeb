<?php
include_once("./views/header.php");
?>

<body>
    
    <div>
        <div class="col-3"></div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagen/ban1.avif" width="100%" height="100%" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagen/ban2.avif" width="100%" height="100%" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="imagen/ban3.avif" width="100%" height="100%" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="col-3"></div>
    </div>


    <main>
        <section>
            <div>
                <div class="col-12">
                    <div>&nbsp;</div>
                </div>

            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col-1">

                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="imagen/energia-solar.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Energía solar en comunidades rurales.</h5>
                                <p class="card-text">
                                    Estudio sobre la implementación de sistemas de energía solar en comunidades rurales
                                    para mejorar el acceso a la electricidad y promover el desarrollo sostenible.
                                </p>
                                <a href="inv-1.php" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="imagen/reciclaje-int.png" class="card-img-top we" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Reciclaje inteligente con visión por computadora.</h5>
                                <p class="card-text">
                                    Desarrollo de un sistema de reciclaje inteligente utilizando visión por computadora
                                    para
                                    clasificar automáticamente los materiales reciclables y mejorar la eficiencia del
                                    proceso de reciclaje.
                                </p>
                                <a href="inv-1.php" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="imagen/cambio_clima.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Modelos predictivos del cambio climático.</h5>
                                <p class="card-text">
                                    Análisis y desarrollo de modelos predictivos para comprender mejor los patrones del
                                    cambio climático y sus impactos en diferentes regiones del mundo.
                                </p>
                                <a href="inv-1.php" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">

                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div>&nbsp;</div>
                    </div>

                </div>
        </section>

        <section class="py-5 bg-light border-top">
            <div class="container text-center">
                <img src="imagen/img-car2.jpg" class=" img-fluid rounded-4 border" alt="Mision">
                <h2 class="display-6 mb-3">Mision de la Red de Investigación</h2>
                <p class="lead">Fomentar la colaboración entre investigadores y profesionales para impulsar el avance científico y
                    tecnológico en áreas clave, promoviendo soluciones innovadoras que contribuyan al desarrollo
                    sostenible y al bienestar social.</p>
            </div>
        </section>

    </main>
   
<?php
include_once("./views/footer.php");
?>