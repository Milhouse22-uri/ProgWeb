<h1>Nuevo Investigador</h1>
<form method="POST" action="investigador.php?action=create">
    <div class="mb-3">
        <label for="primer_apellido" class="form-label">Primer Apellido</label>
        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="Escribe aqui el primer apellido" required>
    </div>
    <div class="mb-3">
        <label for="segundo_apellido" class="form-label">Segundo Apellido</label>
        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="Escribe aqui el segundo apellido" required>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe aqui el nombre" required>
    </div>
    <div class="mb-3">
        <label for="fotografia" class="form-label">Fotografia</label>
        <input type="text" class="form-control" id="fotografia" name="fotografia" placeholder="Escribe aqui el nombre de su fotografia" required>
    </div>
    <div class="mb-3">
        <label for="semblanza" class="form-label">Semblanza</label>
        <input type="text" class="form-control" id="semblanza" name="semblanza" placeholder="Escribe aqui la sembranza" required>
    </div>
    <div class="mb-3">
        <label for="id_institucion" class="form-label">Institucion</label>
        <input type="text" class="form-control" id="id_institucion" name="id_institucion" placeholder="Escribe aqui la institucion" required>
    </div>
    <div class="mb-3">
        <label for="id_tratamiento" class="form-label">Tratamiento</label>
        <input type="text" class="form-control" id="id_tratamiento" name="id_tratamiento" placeholder="Escribe aqui el tratamiento" required>
    </div>

    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>

</form>