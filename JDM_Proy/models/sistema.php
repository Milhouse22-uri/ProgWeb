<?php
class Sistema{
    var $_DSN="pgsql:host=postgresjdm;dbname=jdm_db_pg";
    var $_USER="admin_jdm";
    var $_PASSWORD="jdmlove22";
    var $_DB=null;
    function connect(){
        $this -> _DB = new PDO($this -> _DSN,$this -> _USER,$this -> _PASSWORD);

    }

    function cargarFoto($carpeta,$nombre) {
        $tipos = array('image/gif','image/jpeg','image/png','image/jpg','image/webp');
        $maximo = 1000 * 1024; 
        if(isset($_FILES[$nombre])){
            $img = $_FILES[$nombre];
            if($img['error'] == 0) {
                if(in_array($img['type'],$tipos)){
                    if($img['size'] <= $maximo){
                        $n = rand(1,1000000);
                        $nombreArchivo = md5($img['name'].$img['size'].$n.'cruz azul campeon');
                        $extension = explode('.',$img['name']);
                        $extension = $extension[count($extension)-1];
                        $nombreArchivo = $nombreArchivo.'.'.$extension;
                        $rutaFinal = '../img/'.$carpeta.'/'.$nombreArchivo;
                        if(!file_exists($rutaFinal)) {
                            if(move_uploaded_file($img['tmp_name'],$rutaFinal)) {
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
