<?php
include_once("./views/header2.php");
?>


  <main>

    <section class="py-5 bg-light border-bottom">
      <div class="container text-center">
        <h2 class="display-6 mb-3">Noticias de Investigación 2025</h2>
      </div>
    </section>

    <section class="py-5 bg-light border-bottom">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-3">
            <img src="imagen/energia-solar.webp" class="img-fluid w-100 rounded-4 border" alt="Noticia destacada">
          </div>
          <div class="col-lg-5">
            <span class="badge text-bg-primary mb-2">Destacada</span>
            <h2 class="h3">Microredes solares mejoran acceso a la energía en comunidades rurales</h2>
            <p class="text-muted small mb-2">Publicado: 07 Sep 2025 • Categoría: Energía solar</p>
            <p>Un nuevo piloto instala sistemas fotovoltaicos comunitarios con almacenamiento,
              reduciendo costos y mejorando la resiliencia ante apagones.</p>
            <a class="btn btn-primary btn-sm" href="#" role="button">Leer más</a>
          </div>
        </div>
      </div>
    </section>

    <section class="py-4">
      <div class="container">
        <form class="row g-2 align-items-center">
          <div class="col-md-8">
            <input type="search" class="form-control" placeholder="Buscar noticias...">
          </div>
          <div class="col-md-4 text-md-end">
            <div class="btn-group" role="group" aria-label="Filtros">
              <a href="#" class="btn btn-outline-secondary btn-sm">Todas</a>
              <a href="#" class="btn btn-outline-secondary btn-sm">Energía solar</a>
              <a href="#" class="btn btn-outline-secondary btn-sm">Reciclaje inteligente</a>
              <a href="#" class="btn btn-outline-secondary btn-sm">Cambio climático</a>
            </div>
          </div>
        </form>
      </div>
    </section>

    <section class="py-3">
      <div class="container">
        <div class="row g-4">
        
          <div class="col-lg-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">

         
              <div class="col">
                <article class="card h-100">
                  <img src="imagen/img-car2.jpg" class="card-img-top" alt="Energía solar">
                  <div class="card-body">
                    <span class="badge text-bg-warning mb-2">Energía solar</span>
                    <h5 class="card-title">Capacitación local para mantenimiento de paneles</h5>
                    <p class="card-text small">Talleres comunitarios forman técnicos que garantizan la
                      sostenibilidad de microredes en zonas rurales.</p>
                  </div>
                  <div class="card-footer d-flex justify-content-between small">
                    <span>06 Sep 2025</span>
                    <a href="#" class="link-primary">Leer más</a>
                  </div>
                </article>
              </div>

           
              <div class="col">
                <article class="card h-100">
                  <img src="imagen/img-car3.webp" class="card-img-top" alt="Reciclaje inteligente">
                  <div class="card-body">
                    <span class="badge text-bg-success mb-2">Reciclaje inteligente</span>
                    <h5 class="card-title">Modelo de visión por computadora detecta vidrio y PET</h5>
                    <p class="card-text small">Un clasificador liviano alcanza 94% de precisión en
                      cintas transportadoras con cámaras económicas.</p>
                  </div>
                  <div class="card-footer d-flex justify-content-between small">
                    <span>03 Sep 2025</span>
                    <a href="#" class="link-primary">Leer más</a>
                  </div>
                </article>
              </div>

       
              <div class="col">
                <article class="card h-100">
                  <img src="imagen/noti-clima.jpeg" class="card-img-top" alt="Cambio climático">
                  <div class="card-body">
                    <span class="badge text-bg-info mb-2">Cambio climático</span>
                    <h5 class="card-title">Nuevos modelos regionales mejoran pronóstico de lluvias</h5>
                    <p class="card-text small">Investigadores integran datos satelitales y sensores IoT
                      para ajustar predicciones en tiempo real.</p>
                  </div>
                  <div class="card-footer d-flex justify-content-between small">
                    <span>01 Sep 2025</span>
                    <a href="#" class="link-primary">Leer más</a>
                  </div>
                </article>
              </div>

          
              <div class="col">
                <article class="card h-100">
                  <img src="imagen/noti-recicla.jpeg" class="card-img-top" alt="Reciclaje inteligente">
                  <div class="card-body">
                    <span class="badge text-bg-success mb-2">Reciclaje inteligente</span>
                    <h5 class="card-title">Municipio instala contenedores con cámara y app</h5>
                    <p class="card-text small">El sistema recompensa a usuarios por reciclar correctamente
                      mediante códigos QR y registro en la nube.</p>
                  </div>
                  <div class="card-footer d-flex justify-content-between small">
                    <span>28 Ago 2025</span>
                    <a href="#" class="link-primary">Leer más</a>
                  </div>
                </article>
              </div>

            </div>

         
            <nav class="mt-4" aria-label="Paginación noticias">
              <ul class="pagination pagination-sm mb-0">
                <li class="page-item disabled"><a class="page-link">Anterior</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </section>
  </main>
 

<?php
include_once("./views/footer2.php");
?>