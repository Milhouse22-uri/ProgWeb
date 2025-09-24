<?php
include_once("./views/header2.php");
?>

   <main class="container py-4">

  <!-- Título/intro -->
    <h2 class="mb-2">Investigaciones</h2>
    <p class="text-muted">Proyectos en curso de nuestra Red: energía solar en comunidades rurales,
         reciclaje inteligente con visión por computadora y modelos predictivos del cambio climático.</p>
  

  <!-- Índice rápido -->
  <nav class="mb-4">
    <ul class="nav nav-pills justify-content-center gap-2 flex-wrap">
      <li class="nav-item"><a class="nav-link active" href="#solar">Energía solar</a></li>
      <li class="nav-item"><a class="nav-link" href="#reciclaje">Reciclaje inteligente</a></li>
      <li class="nav-item"><a class="nav-link" href="#clima">Modelos de cambio climático</a></li>
    </ul>
  </nav>

  <!-- ========== 1) Energía solar ========== -->
  <section id="solar" class="py-4 border rounded-4 mb-5">
    <div class="row g-0">
      <div class="col-md-5">
        <img src="imagen/img-inv1.webp" alt="Energía solar en comunidades rurales" class="img-fluid w-100 h-100 object-fit-cover rounded-start-4">
      </div>
      <div class="col-md-7">
        <div class="p-4">
          <h3 class="h4">Energía solar en comunidades rurales</h3>
          <p class="mb-3">Estudio sobre la implementación de sistemas fotovoltaicos para mejorar el acceso a la electricidad y promover el desarrollo sostenible.</p>
          <div class="row">
            <div class="col-lg-6">
              <h6 class="text-uppercase text-muted">Objetivos</h6>
              <ul class="small mb-3">
                <li>Diseñar microredes solares con almacenamiento.</li>
                <li>Capacitar técnicos locales para mantenimiento.</li>
                <li>Evaluar impacto social y económico.</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <h6 class="text-uppercase text-muted">Metodología</h6>
              <ul class="small mb-3">
                <li>Levantamiento de demanda energética.</li>
                <li>Dimensionamiento PV + baterías.</li>
                <li>Pilotos y medición de KPIs (costo/kWh, uptime).</li>
              </ul>
            </div>
          </div>
          <div class="d-flex gap-2">
            <a class="btn btn-primary btn-sm" href="#">Ver detalles</a>
            <a class="btn btn-outline-primary btn-sm" href="#">Descargar ficha (PDF)</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== 2) Reciclaje inteligente ========== -->
  <section id="reciclaje" class="py-4 border rounded-4 mb-5">
    <div class="row g-0 flex-md-row-reverse">
      <div class="col-md-5">
        <img src="imagen/img-car3.webp" alt="Reciclaje inteligente con visión por computadora" class="img-fluid w-100 h-100 object-fit-cover rounded-end-4">
      </div>
      <div class="col-md-7">
        <div class="p-4">
          <h3 class="h4">Reciclaje inteligente con visión por computadora</h3>
          <p class="mb-3">Desarrollo de un sistema de clasificación automática de residuos (vidrio, PET, cartón) mediante modelos de visión por computadora.</p>
          <div class="row">
            <div class="col-lg-6">
              <h6 class="text-uppercase text-muted">Objetivos</h6>
              <ul class="small mb-3">
                <li>Alcanzar &gt; 90% de precisión en cinta.</li>
                <li>Modelo ligero para cámaras económicas.</li>
                <li>Dashboard en tiempo real con métricas.</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <h6 class="text-uppercase text-muted">Metodología</h6>
              <ul class="small mb-3">
                <li>Dataset propio con etiquetado.</li>
                <li>Entrenamiento (Transfer Learning).</li>
                <li>Inferencia edge + API de reporte.</li>
              </ul>
            </div>
          </div>
          <div class="d-flex gap-2">
            <a class="btn btn-success btn-sm" href="#">Ver detalles</a>
            <a class="btn btn-outline-success btn-sm" href="#">Repositorio / Demo</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== 3) Modelos predictivos del cambio climático ========== -->
  <section id="clima" class="py-4 border rounded-4 mb-5">
    <div class="row g-0">
      <div class="col-md-5">
        <img src="imagen/img-inv3.jpeg" alt="Modelos predictivos del cambio climático" class="img-fluid w-100 h-100 object-fit-cover rounded-start-4">
      </div>
      <div class="col-md-7">
        <div class="p-4">
          <h3 class="h4">Modelos predictivos del cambio climático</h3>
          <p class="mb-3">Uso de ciencia de datos para prever patrones de temperatura y precipitación y apoyar la toma de decisiones regional.</p>
          <div class="row">
            <div class="col-lg-6">
              <h6 class="text-uppercase text-muted">Objetivos</h6>
              <ul class="small mb-3">
                <li>Generar pronósticos regionales de lluvia.</li>
                <li>Evaluar escenarios de riesgo hídrico.</li>
                <li>Publicar un portal con series históricas.</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <h6 class="text-uppercase text-muted">Metodología</h6>
              <ul class="small mb-3">
                <li>Integración satelital + estaciones IoT.</li>
                <li>Modelos ARIMA/Prophet y redes LSTM.</li>
                <li>Validación cruzada y mapas temáticos.</li>
              </ul>
            </div>
          </div>
          <div class="d-flex gap-2">
            <a class="btn btn-info btn-sm" href="#">Ver detalles</a>
            <a class="btn btn-outline-info btn-sm" href="#">Descargar dataset</a>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

 <?php
include_once("./views/footer2.php");
?>
