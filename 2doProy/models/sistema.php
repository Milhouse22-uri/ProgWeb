<?php
class Sistema{
    var $_DSN="pgsql:host=postgres;dbname=database";
    var $_USER="user";
    var $_PASSWORD="password";
    var $_DB=null;
    function connect(){
        $this -> _DB = new PDO($this -> _DSN,$this -> _USER,$this -> _PASSWORD);

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
        
}
?>