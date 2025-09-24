<?php
include_once("./views/header2.php");
?>

    <main>

        <section class="py-5 bg-light border-bottom">
            <div class="container text-center">
                <h2 class="mb-2">Contacto</h2>
                <p class="text-muted mb-0">¿Tienes dudas, propuestas o quieres colaborar con la Red de Investigación?
                    Escríbenos.</p>
            </div>
        </section>

        <section class="py-4">
            <div class="container">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="border rounded-4 p-3 h-100">
                            <h6 class="text-uppercase text-muted mb-2">Teléfono</h6>
                            <p class="mb-1 fs-5"><a href="tel:+527296281542" class="link-body-emphasis">+52 729 628
                                    1542</a></p>
                            <small class="text-muted">Lun–Vie · 9:00–17:00</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded-4 p-3 h-100">
                            <h6 class="text-uppercase text-muted mb-2">Correo</h6>
                            <p class="mb-1 fs-5"><a href="mailto:uriel@gmail.com"
                                    class="link-body-emphasis">uriel@gmail.com</a></p>
                            <small class="text-muted">Respondemos en 24–48 h</small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border rounded-4 p-3 h-100">
                            <h6 class="text-uppercase text-muted mb-2">Dirección</h6>
                            <p class="mb-1">TecNM · Celaya, Gto.</p>
                            <small class="text-muted">Av. Tecnológico 123</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <section class="py-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="border rounded-4 p-4">
                            <h3 class="h5 mb-3">Envíanos un mensaje</h3>

                            <form class="needs-validation" action="enviarmensaje.php" method="get" novalidate>
                                <div class="row g-3">
                                    <div class="col-md-6 form-floating">
                                        <input type="text" class="form-control" id="nombre" name="nombre"
                                            placeholder="Nombre completo" minlength="3" maxlength="50" required>
                                        <label for="nombre">Nombre completo</label>
                                        <div class="invalid-feedback">Escribe tu nombre (mín. 3 caracteres).</div>
                                    </div>

                                    <div class="col-md-6 form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="you@example.com" maxlength="50" required>
                                        <label for="email">Correo electrónico</label>
                                        <div class="invalid-feedback">Ingresa un correo válido.</div>
                                    </div>

                                    <div class="col-md-6 form-floating">
                                        <input type="tel" class="form-control" id="telefono" name="telefono"
                                            placeholder="+52..." pattern="[\d\s\+\-]{7,}" />
                                        <label for="telefono">Teléfono (opcional)</label>
                                        <div class="invalid-feedback">Revisa el formato (solo números, +, - y espacios).
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-floating">
                                        <select class="form-select" id="tipo" name="tipo" required>
                                            <option value="" selected disabled>Selecciona una opción</option>
                                            <option value="comentario">Comentario</option>
                                            <option value="queja">Queja</option>
                                            <option value="inscripcion">Inscripción</option>
                                            <option value="colaboracion">Colaboración</option>
                                            <option value="otro">Otro</option>
                                        </select>
                                        <label for="tipo">Tipo de comentario</label>
                                        <div class="invalid-feedback">Selecciona un tipo.</div>
                                    </div>

                                    <div class="col-12 form-floating">
                                        <textarea class="form-control" placeholder="Mensaje" id="mensaje" name="mensaje"
                                            style="height: 140px" minlength="10" required></textarea>
                                        <label for="mensaje">Mensaje</label>
                                        <div class="invalid-feedback">Cuéntanos con al menos 10 caracteres.</div>
                                    </div>

                                    <!-- Honeypot anti-spam (oculto) -->
                                    <div class="d-none">
                                        <label>Dejar en blanco</label>
                                        <input type="text" name="empresa">
                                    </div>

                                    <div class="col-12 d-grid d-sm-flex gap-2">
                                        <button class="btn btn-primary" type="submit">Enviar</button>
                                        <button class="btn btn-outline-secondary" type="reset">Limpiar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="border rounded-4 p-4">
                            <h3 class="h6 text-uppercase text-muted mb-3">Síguenos</h3>
                            <div class="d-flex gap-2 flex-wrap">
                                <a class="btn btn-outline-dark btn-sm" href="#" target="_blank">Facebook</a>
                                <a class="btn btn-outline-dark btn-sm" href="#" target="_blank">X / Twitter</a>
                                <a class="btn btn-outline-dark btn-sm" href="#" target="_blank">YouTube</a>
                                <a class="btn btn-outline-dark btn-sm" href="#" target="_blank">LinkedIn</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <div>&nbsp;</div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>

 <?php
include_once("./views/footer2.php");
?>
