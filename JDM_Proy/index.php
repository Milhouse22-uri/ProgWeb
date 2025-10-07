<?php
include_once("./views/header.php");
?>

<!-- 🔹 Carousel Header -->
<header>
  <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="img/autos_cata/nissan_gtr_r34.png" class="d-block w-100" style="height: 80vh; object-fit: cover;" alt="Nissan GTR">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
          <h1 class="fw-bold">Nissan GTR</h1>
          <p>Potencia y velocidad al máximo nivel.</p>
          <a href="#catalogo" class="btn btn-danger btn-lg">Ver Catálogo</a>
        </div>
      </div>
      
      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="img/autos_cata/mazda_rx7_fd.png" class="d-block w-100" style="height: 80vh; object-fit: cover;" alt="Mazda RX7">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
          <h1 class="fw-bold">Mazda RX7</h1>
          <p>El clásico rotativo japonés de los 90s.</p>
        </div>
      </div>
      
      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="img/autos_cata/honda_civic_eg6.png" class="d-block w-100" style="height: 80vh; object-fit: cover;" alt="Honda Civic">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
          <h1 class="fw-bold">Honda Civic EG6</h1>
          <p>Ligero, confiable y con espíritu deportivo.</p>
        </div>
      </div>

    </div>

    <!-- Controles -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeader" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHeader" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

    <!-- Indicadores -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselHeader" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselHeader" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselHeader" data-bs-slide-to="2"></button>
    </div>
  </div>
</header>


<!-- 🔹 Catálogo -->
 <!-- 🔹 Catálogo -->
<section id="catalogo" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Catálogo de Autos</h2>
    <div class="row g-4">
      <!-- Auto 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="img/autos_cata/nissan_gtr_r34.png" class="card-img-top" alt="Nissan GTR R34">
          <div class="card-body">
            <h5 class="card-title">Nissan GTR R34</h5>
            <p class="card-text">Motor Twin-Turbo 2.6L · 280 HP</p>
            <a href="#" class="btn btn-primary">Cotizar</a>
          </div>
        </div>
      </div>
      <!-- Auto 2 -->
      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="img/autos_cata/honda_civic_eg6.png" class="card-img-top" alt="Honda Civic EG6">
          <div class="card-body">
            <h5 class="card-title">Honda Civic EG6</h5>
            <p class="card-text">Motor VTEC 1.6L · 170 HP</p>
            <a href="#" class="btn btn-primary">Cotizar</a>
          </div>
        </div>
      </div>
      <!-- Auto 3 -->
      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="img/autos_cata/mazda_rx7_fd.png" class="card-img-top" alt="Mazda RX7 FD">
          <div class="card-body">
            <h5 class="card-title">Mazda RX7 FD</h5>
            <p class="card-text">Motor Rotativo 1.3L · 280 HP</p>
            <a href="#" class="btn btn-primary">Cotizar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 🔹 Catálogo de Marcas JDM -->
<section id="catalogo" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Marcas JDM</h2>
    <div id="carouselMarcas" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner text-center">
        
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-6 col-md-2">
              <img src="img/logos_marcas/nissan.png" class="d-block w-100" alt="Nissan">
            </div>
            <div class="col-6 col-md-2">
              <img src="img/logos_marcas/mazda.png" class="d-block w-100" alt="Mazda">
            </div>
            <div class="col-6 col-md-2">
              <img src="img/logos_marcas/honda.png" class="d-block w-100" alt="Honda">
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-6 col-md-2">
              <img src="img/logos_marcas/toyota.png" class="d-block w-100" alt="Toyota">
            </div>
            <div class="col-6 col-md-2">
              <img src="img/logos_marcas/subaru.png" class="d-block w-100" alt="Subaru">
            </div>
            <div class="col-6 col-md-2">
              <img src="img/logos_marcas/mitsubishi.png" class="d-block w-100" alt="Mitsubishi">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
            <div class="col-6 col-md-2">
              <img src="img/logos_marcas/suzuki.png" class="d-block w-100" alt="Suzuki">
            </div>
            <div class="col-6 col-md-2">
              <img src="img/logos_marcas/lexus.png" class="d-block w-100" alt="Lexus">
            </div>
          </div>
        </div>

      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselMarcas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselMarcas" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>


<!-- 🔹 Noticias -->
<section id="noticias" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Noticias Recientes</h2>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Nuevo Nissan GTR 2025</h5>
            <p class="card-text">Nissan presenta el renovado GTR con mejoras en aerodinámica y potencia.</p>
            <a href="#" class="btn btn-outline-danger btn-sm">Leer más</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Honda Civic Type R</h5>
            <p class="card-text">El legendario Type R regresa con un diseño agresivo y mayor desempeño.</p>
            <a href="#" class="btn btn-outline-danger btn-sm">Leer más</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include_once("./views/footer.php");
?>