<h1>Nuevo Investigador</h1>
<form method="POST" enctype="multipart/form-data" action="investigador.php?action=create">
     <div class="mb-3">
        <label for="fotografia" class="form-label">Fotografia</label>
        <input type="file" class="form-control" id="fotografia" name="fotografia" placeholder="fotografia" required>
    </div>
    
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
        <label for="semblanza" class="form-label">Semblanza</label>
        <input type="text" class="form-control" id="semblanza" name="semblanza" placeholder="Escribe aqui la sembranza" required>
    </div>

    <div class="mb-3">
        <label for="id_institucion" class="form-label">Institucion</label>
        <select class="form-select" id="id_institucion" name="id_institucion" required="required">
           <?php foreach ($instituciones as $institucion): ?>
                <option value="<?php echo $institucion['id_institucion']; ?>">
                    <?php echo $institucion['institucion']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

   <div class="mb-3">
        <label for="id_tratamiento" class="form-label">Tratamiento</label>
        <select class="form-select" id="id_tratamiento" name="id_tratamiento" required="required">
           <?php foreach ($tratamiento as $tratamiento): ?>
                <option value="<?php echo $tratamiento['id_tratamiento']; ?>">
                    <?php echo $tratamiento['tratamiento']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>


    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>

</form>