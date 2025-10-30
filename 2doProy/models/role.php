<?php
require_once "sistema.php";
class Role extends Sistema {
    function create($data){
        $this->connect();
        $this -> _DB -> beginTransaction();
        try {
            $sql= ("INSERT INTO role (role) 
                    VALUES (:role)");
            $sth = $this->_DB->prepare($sql);
            $sth->bindParam(":role", $data['role'], PDO::PARAM_STR);
            $sth->execute();
            $affected_rows = $sth->rowCount();
            $this->_DB -> commit();
            return $affected_rows;
        } catch (Exception $ex) {
            $this->_DB -> rollback();
        }
        return null;
    }
    function read(){
        $this->connect();
        $sth = $this->_DB->prepare("Select * from role");
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }
    function readOne($id){
        $this->connect();
        $sth = $this->_DB->prepare("SELECT *
                                    FROM role
                                    WHERE id_role = :id_role");
        $sth->bindParam(":id_role", $id, PDO::PARAM_INT);
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC);
        return $data;
    }
    function update($data, $id){
        if (!is_numeric($id)) {
            return null;    
        }  
        if ($this->validate($data)) {
            $this->connect(); 
            $this -> _DB -> beginTransaction();
            try {
                $sql = "UPDATE role set role = :role
                        WHERE id_role = :id_role";
                $sth = $this->_DB->prepare($sql);
                $sth -> bindParam(":role", $data['role'], PDO::PARAM_STR);
                $sth -> bindParam(":id_role", $id, PDO::PARAM_INT);
                $sth -> execute(); 
                $affected_rows = $sth->rowCount();  
                $this->_DB -> commit();
                return $affected_rows;
            } catch (Exception $ex) {
                $this -> _DB ->rollback();
            }
            return null;
        } 
        return null;
    }
    function delete($id){
        if (is_numeric($id)) {
            $this->connect();
            $this-> _DB -> beginTransaction();
            try {
                $sql = "DELETE FROM role WHERE id_role = :id_role";
                $sth = $this->_DB->prepare($sql);
                $sth->bindParam(":id_role", $id, PDO::PARAM_INT);
                $sth->execute();
                $affected_rows = $sth->rowCount();
                $this->_DB -> commit();
                return $affected_rows;
            } catch (Exception $ex) {
                $this->_DB -> rollback();
            }
            return null;
        }else {
            return null;
        }
    }
    function validate($data){
        
        return true;
    }
}
?>