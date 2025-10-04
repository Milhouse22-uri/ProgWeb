<?php
class Sistema{
    var $_DSN="pgsql:host=postgresjdm;dbname=jdm_db_pg";
    var $_USER="admin_jdm";
    var $_PASSWORD="jdmlove22";
    var $_DB=null;
    function connect(){
        $this -> _DB = new PDO($this -> _DSN,$this -> _USER,$this -> _PASSWORD);

    }

}
?>
