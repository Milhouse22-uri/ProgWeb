<h1>Modificar Usuario</h1>
<form method="POST"  action="usuario.php?action=update&id=<?php echo $id; ?>">
    <div class="mb-3">
        <label for="correo" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $data['correo']; ?>" placeholder="Correo" required>
    </div>
    <div class="mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Guardar">
    </div>
</form>