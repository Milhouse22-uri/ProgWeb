<?php
include_once("./views/header2.php");
?>

 <main>

    <!-- Hero -->
    <section class="py-5 bg-light border-bottom">
      <div class="container text-center">
        <h2 class="display-6 mb-3">Congreso de Investigación 2025</h2>
        <p class="lead">Un evento dedicado a explorar soluciones innovadoras en energía, sostenibilidad y tecnología.</p>
        <p><strong>Fecha:</strong> 20–22 de noviembre, 2025 &nbsp; | &nbsp; <strong>Sede:</strong> Campus 2 TecNM</p>
      </div>
    </section>

    <!-- Temas principales -->
    <section class="py-5">
      <div class="container">
        <h3 class="mb-4">Temas principales</h3>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card h-100">
              <img src="imagen/energia-solar.webp" class="card-img-top" alt="Energía solar">
              <div class="card-body">
                <h5 class="card-title">Energía solar en comunidades rurales</h5>
                <p class="card-text small">Proyectos de electrificación sostenible mediante paneles solares para mejorar la calidad de vida en comunidades apartadas.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <img src="imagen/reciclaje-int.png" class="card-img-top" alt="Reciclaje inteligente">
              <div class="card-body">
                <h5 class="card-title">Reciclaje inteligente con visión por computadora</h5>
                <p class="card-text small">Aplicaciones de inteligencia artificial y visión por computadora para la clasificación automatizada de residuos reciclables.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <img src="imagen/cambio_clima.jpeg" class="card-img-top" alt="Modelos climáticos">
              <div class="card-body">
                <h5 class="card-title">Modelos predictivos del cambio climático</h5>
                <p class="card-text small">Uso de ciencia de datos y machine learning para prever escenarios futuros del clima y apoyar la toma de decisiones.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Programa -->
    <section class="py-5 bg-light">
      <div class="container">
        <h3 class="mb-4">Programa tentativo</h3>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr><th>Hora</th><th>Actividad</th></tr>
            </thead>
            <tbody>
              <tr><td>09:00</td><td>Inauguración</td></tr>
              <tr><td>09:30</td><td>Ponencia: Energía solar en comunidades rurales</td></tr>
              <tr><td>11:00</td><td>Ponencia: Reciclaje inteligente con visión por computadora</td></tr>
              <tr><td>13:00</td><td>Ponencia: Modelos predictivos del cambio climático</td></tr>
              <tr><td>15:00</td><td>Panel de discusión y clausura</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="registro" class="py-5">
      <div class="container">
        <h3 class="mb-4">Registro y cuotas</h3>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="border rounded-4 p-4 h-100">
              <h5>Estudiantes</h5>
              <p class="display-6 mb-0">$250</p>
              <p class="text-muted">MXN</p>
              <ul>
                <li>Acceso a todas las sesiones</li>
                <li>Constancia</li>
              </ul>
              <a href="#" class="btn btn-outline-primary w-100">Comprar</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border rounded-4 p-4 h-100">
              <h5>Académicos</h5>
              <p class="display-6 mb-0">$500</p>
              <p class="text-muted">MXN</p>
              <ul>
                <li>Acceso completo</li>
                <li>Memorias digitales</li>
              </ul>
              <a href="#" class="btn btn-outline-primary w-100">Comprar</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="border rounded-4 p-4 h-100">
              <h5>Industria</h5>
              <p class="display-6 mb-0">$900</p>
              <p class="text-muted">MXN</p>
              <ul>
                <li>Acceso premium</li>
                <li>Networking con ponentes</li>
              </ul>
              <a href="#" class="btn btn-primary w-100">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sede y mapa (imagen de ejemplo) -->
    <section class="py-5 bg-light border-top">
      <div class="container">
        <h3 class="mb-4">Sede</h3>
        <div class="row g-4">
          <div class="col-md-6">
            <p class="mb-1"><strong>Dirección:</strong> Av. Tecnológico 123, Celaya, Gto.</p>
            <p class="mb-3">Accesos: transporte público y estacionamiento.</p>
          </div>
          <div class="col-md-6">
            <img src="imagen/Mapa.png" class="img-fluid rounded-4 border" alt="Mapa">
          </div>
        </div>
      </div>
    </section>



  </main>
<?php
include_once("./views/footer2.php");
?>
