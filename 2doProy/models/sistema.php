<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
session_start();
class Sistema{
    var $_DSN="pgsql:host=postgres;dbname=database";
    var $_USER="user";
    var $_PASSWORD="password";
    var $_DB=null;
    function connect(){
        $this -> _DB = new PDO($this -> _DSN,$this -> _USER,$this -> _PASSWORD);

    }

    function login($correo, $contrasena){
        $contrasena= md5($contrasena);
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $this->connect();
            $sql= "SELECT * FROM usuario
                    WHERE correo= :correo AND contrasena = :contrasena";
            $stmt= $this->_DB->prepare($sql);
            $stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
            $stmt->bindParam(":contrasena", $contrasena, PDO::PARAM_STR);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                $_SESSION['validado']= true;
                $_SESSION['correo']= $correo;
                $roles = $this->getroles($correo);
                $permisos = $this->getPermisos($correo);
                $_SESSION['roles']= $roles;
                $_SESSION['permisos']= $permisos;
                return true;
            }
        }
        
        return false;
    }

    function logout(){
        unset($_SESSION);
        session_destroy();
    }

    function getroles($correo){
        $roles = array();
        $this->connect();
        $sql= "SELECT r.role FROM usuario u join usuario_role ur on u.id_usuario = ur.id_usuario
                join role r on ur.id_role = r.id_role where correo = :correo";
        $stmt= $this->_DB->prepare($sql);
        $stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($fila= $stmt->fetch(PDO::FETCH_ASSOC)){
                $roles[] = $fila['role'];
            }
        }
        return $roles;
    }

    function getPermisos($correo){
        $permisos = array();
        $this->connect();
        $sql= "SELECT distinct p.privilege  from usuario u join usuario_role ur on u.id_usuario = ur.id_usuario
                            left join role r on ur.id_role = r.id_role
                            left join role_privilege rp on r.id_role = rp.id_role
                            left join privilege p on rp.id_privilege = p.id_privilege
                            where correo = :correo";
        $stmt= $this->_DB->prepare($sql);
        $stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($fila= $stmt->fetch(PDO::FETCH_ASSOC)){
                $permisos[] = $fila['privilege'];
            }
        }
        return $permisos;
    }

    function cargarFoto($carpeta,$nombre) {
        $tipos = array('image/gif','image/jpeg','image/png','image/jpg');
        $maximo = 1000 * 1024; 
        if(isset($_FILES[$nombre])){
            $imagen = $_FILES[$nombre];
            if($imagen['error'] == 0) {
                if(in_array($imagen['type'],$tipos)){
                    if($imagen['size'] <= $maximo){
                        $n = rand(1,1000000);
                        $nombreArchivo = md5($imagen['name'].$imagen['size'].$n.'cruz azul campeon');
                        $extension = explode('.',$imagen['name']);
                        $extension = $extension[count($extension)-1];
                        $nombreArchivo = $nombreArchivo.'.'.$extension;
                        $rutaFinal = '../imagen/'.$carpeta.'/'.$nombreArchivo;
                        if(!file_exists($rutaFinal)) {
                            if(move_uploaded_file($imagen['tmp_name'],$rutaFinal)) {
                                return $nombreArchivo;
                            }
                        }
                    }
                }
            }
        }

        // Si no se sube imagen válida, retorna null
        return null;
    }

    function checarRol($rol){
        $roles = isset($_SESSION['roles']) ? $_SESSION['roles']: array();
        if(!in_array($rol,$roles)){
            $alerta['mensaje'] = "Usted no tiene el rol adecuado";
            $alerta['tipo'] = "danger";
            include_once ("./views/alert.php");
            die();
        }
    }

    function enviarCorreo($para,$asunto,$mensaje,$nombre=null){
        require '../vendor/autoload.php';
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPAuth = true;
        $mail->Username = '21031562@itcelaya.edu.mx';
        $mail->Password = 'uuxbgkswqqpaqtfz';
        $mail->setFrom('21031562@itcelaya.edu.mx', 'Uriel Alejandro');
        $mail->addAddress($para,$nombre ? $nombre : 'Red de investigacion');
        $mail->Subject = $asunto;
        $mail->msgHTML($mensaje);
        if (!$mail->send()) {
            return false;
        } else {
            return true;}
    }

    function cambiarContrasena($data){
        if(!filter_var($data['correo'],FILTER_VALIDATE_EMAIL)){
            return false;
        }
        $this ->connect();
        $token = bin2hex(random_bytes(16));
        $token = md5($token);
        $token = $token.md5('hola');
        $sql = "UPDATE usuario SET token = :token WHERE correo = :correo";
        $sth = $this -> _DB -> prepare($sql);
        $sth -> bindParam(":token",$token,PDO::PARAM_STR);
        $sth -> bindParam(":correo",$data['correo'],PDO::PARAM_STR);
        $result = $sth -> execute();
        if($sth -> rowCount()){
            $para = $data['correo'];
            $asunto = "Recuperacion de contraseña";
            $mensaje = "Para cambiar su contraseña, por favor haga clic en el siguiente enlace:
                <br><br><a href='http://localhost:8080/2doProy/panel/login.php?action=token&token=".$token."&correo=".$data['correo']."'>Cambiar contraseña</a>
                <br><br>Si usted no solicitó este cambio, por favor ignore este correo.
                <br><br>Atentamente, Administrador Red de Investigacion:";
            $mail = $this->enviarCorreo($para,$asunto,$mensaje);
            return true;
        }else{
            return false;
        } 
    }

    function restablecerContrasena($data){
        if(!filter_var($data['correo'],FILTER_VALIDATE_EMAIL)){
            return false;
        }
        $this -> connect();
        $contrasena = md5($data['contrasena']);
        $sql = "UPDATE usuario SET contrasena = :contrasena, token = null WHERE correo = :correo AND token = :token";
        $sth = $this -> _DB -> prepare($sql);
        $sth -> bindParam(":contrasena",$contrasena,PDO::PARAM_STR);
        $sth -> bindParam(":correo",$data['correo'],PDO::PARAM_STR);
        $sth -> bindParam(":token",$data['token'],PDO::PARAM_STR);
        $result = $sth -> execute();
        if($sth -> rowCount()){
            return true;
        }else{
            return false;
        }

    }

}


?>