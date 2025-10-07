<?php
class Sistema{
    var $_DSN="pgsql:host=postgres;dbname=database";
    var $_USER="user";
    var $_PASSWORD="password";
    var $_DB=null;
    function connect(){
        $this -> _DB = new PDO($this -> _DSN,$this -> _USER,$this -> _PASSWORD);

    }

    function cargarFoto($carpeta){
        if(move_uploaded_file($_FILES['fotografia']['tmp_name'],'../imagen/'.$carpeta.'/'.$_FILES['fotografia']['name'])){
            return $_FILES['fotografia']['name'];

        }else{
            return null;
        }

    }

}
?>