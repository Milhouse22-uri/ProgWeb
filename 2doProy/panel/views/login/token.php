<?php 
include_once("./views/login/header.php");
?>
<h1>Nueva Contraseña</h1>
<form action="login.php?action=restablecer" method="post">
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 form-label">Password</label>
        <div class="col-sm-10">
            <input name="contrasena" type="password" class="form-control" id="contrasena">
            <input name="token" type="hidden" class="form-control" id="token" value="<?php echo $peticion['token']; ?>">
            <input name="correo" type="hidden" class="form-control" id="correo" value="<?php echo $peticion['correo']; ?>">            
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-success" id="enviar" name="enviar" value="Entrar">
        </div>
    </div>
</form>

<?php 
include_once('./views/login/footer.php');
?>