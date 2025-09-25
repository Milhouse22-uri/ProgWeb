<h1>Nueva Institucion</h1>
<form method="POST" action="institucion.php?action=update&id=<?php echo $id; ?>">
    <div class="mb-3">
        <label for="institucion" class="form-label">Nombre de la Institucion</label>
        <input type="text" class="form-control" id="institucion" name="institucion" value="<?php echo $data['institucion']; ?>" placeholder="Escribe el nombre de la institucion" required>
    </div>
    <div class="mb-3">
        <label for="logotipo" class="form-label">Logotipo</label>
        <input type="text" class="form-control" id="logotipo" name="logotipo" value="<?php echo $data['logotipo']; ?>" placeholder="logo.png">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>
   
   

</form>