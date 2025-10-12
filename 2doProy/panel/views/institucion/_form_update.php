<h1>Nueva Institucion</h1>
<form method="POST" enctype="multipart/form-data" action="institucion.php?action=update&id=<?php echo $id; ?>">
    <div class="text-center">
        <img src="/2doProy/imagen/institucion/<?php echo $data['logotipo']; ?>" width="200" height="200" class="rounded-circle" alt="institucion">
    </div>

    <div class="mb-3">
        <label for="logotipo" class="form-label">Logotipo</label>
        <input type="file" class="form-control" id="logotipo" name="logotipo">
    </div>
    
    
    <div class="mb-3">
        <label for="institucion" class="form-label">Nombre de la Institucion</label>
        <input type="text" class="form-control" id="institucion" name="institucion" value="<?php echo $data['institucion']; ?>" placeholder="Escribe el nombre de la institucion" required>
    </div>
   
    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>
   
   

</form>