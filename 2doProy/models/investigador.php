<?php
require_once "sistema.php";
class Investigador extends Sistema{
    function create($data){
        return $rowsAffected;

    }

    function read(){
        $this -> connect();
        $sth = $this -> _DB -> prepare("select i.institucion, inv.* from 
        institucion i join investigador inv on i.id_institucion = inv.id_institucion;");
        $sth -> execute();
        $data = $sth -> fetchAll();
        return $data;
    }

    function readOne(){ 
        $this -> connect();
        $sth = $this -> _DB -> prepare("SELECT * from institucion where id_institucion = :id_institucion");
        $sth -> bindParam(":id_institucion",$id,PDO::PARAM_INT);
        $sth -> execute();
        $data = $sth -> fetchAll();
        return $data;
    }

    function update($data,$id){
        return $rowsAffected;
    }

    function delete($id){
        return $rowsAffected;
    }

}

?>