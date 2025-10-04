<h1>Modificacion de Accesorio</h1>
<form method="POST" action="accesorios.php?action=update&id=<?php echo $id; ?>">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de la Institucion</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $data['nombre']; ?>" placeholder="Accesorio nuevo" required>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $data['precio']; ?>" placeholder="100.00">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $data['descripcion']; ?>" placeholder="Descripcion del accesorio">
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="text" class="form-control" id="imagen" name="imagen" value="<?php echo $data['imagen']; ?>" placeholder="imagen.png">
    </div>
    
    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>
   
   

</form>