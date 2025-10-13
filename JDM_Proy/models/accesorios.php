<?php
require_once "sistema.php";

class Accesorios extends Sistema {
    function create($data){
        $this->connect();
        $this->_DB->beginTransaction();
        try {
            $sql = "INSERT INTO accesorios (nombre,precio,descripcion,imagen) VALUES (:nombre,:precio,:descripcion,:imagen)";
            $sth = $this->_DB->prepare($sql);
            $sth->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
            $sth->bindParam(":precio", $data['precio']); // numérico, no poner array ni PARAM_STR
            $sth->bindParam(":descripcion", $data['descripcion'], PDO::PARAM_STR);
            $imagen = $this -> cargarFoto('accesorios','imagen');
            $sth->bindParam(":imagen", $imagen, PDO::PARAM_STR);
            $sth->execute();
            $affected_rows = $sth->rowCount();
            $this->_DB->commit();
            return $affected_rows;
        }catch(Exception $e){
            $this->_DB->rollBack();
        }
        return null;   
    }

    function read(){
        $this->connect();
        $sth = $this->_DB->prepare("SELECT * FROM accesorios");
        $sth->execute();
        $data = $sth->fetchAll();
        return $data;
    }

    function readOne($id){ 
        $this->connect();
        $sth = $this->_DB->prepare("SELECT * FROM accesorios WHERE id_accesorio = :id_accesorio");
        $sth->bindParam(":id_accesorio", $id, PDO::PARAM_INT);
        $sth->execute();
        $data = $sth->fetch(PDO::FETCH_ASSOC); //
        return $data;
    }

    function update($data, $id) {
    if (!is_numeric($id)) {
        return null;
    }

    $this->connect();
    $this->_DB->beginTransaction();

    try {
        $nuevaImagen = null;

        // Si se sube una nueva imagen, la procesamos
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] == 0) {
            $nuevaImagen = $this->cargarFoto('accesorios', 'imagen');
        }

        // Armamos el SQL dependiendo si hay imagen o no
        if ($nuevaImagen) {
            $sql = "UPDATE accesorios 
                    SET nombre = :nombre, 
                        precio = :precio, 
                        descripcion = :descripcion, 
                        imagen = :imagen 
                    WHERE id_accesorio = :id_accesorio";
        } else {
            $sql = "UPDATE accesorios 
                    SET nombre = :nombre, 
                        precio = :precio, 
                        descripcion = :descripcion 
                    WHERE id_accesorio = :id_accesorio";
        }

        $sth = $this->_DB->prepare($sql);

        // Parámetros obligatorios
        $sth->bindParam(":nombre", $data['nombre'], PDO::PARAM_STR);
        $sth->bindParam(":precio", $data['precio']);
        $sth->bindParam(":descripcion", $data['descripcion'], PDO::PARAM_STR);
        $sth->bindParam(":id_accesorio", $id, PDO::PARAM_INT);

        // Solo se agrega si existe una imagen nueva
        if ($nuevaImagen) {
            $sth->bindParam(":imagen", $nuevaImagen, PDO::PARAM_STR);
        }

        $sth->execute();

        $affected_rows = $sth->rowCount();
        $this->_DB->commit();
        return $affected_rows;

    } catch (Exception $e) {
        $this->_DB->rollBack();
        throw $e;
    }

    return null;
}


    function delete($id){
        if (is_numeric($id)){
            $this->connect();
            $this->_DB->beginTransaction();
            try{
                $sql = "DELETE FROM accesorios WHERE id_accesorio = :id_accesorio";
                $sth = $this->_DB->prepare($sql);
                $sth->bindParam(":id_accesorio", $id, PDO::PARAM_INT);
                $sth->execute();
                $affected_rows = $sth->rowCount();
                $this->_DB->commit();
                return $affected_rows;  
            }catch (Exception $e){
                $this->_DB->rollBack();
            }
            return null;
           
        } else {
            return null;
        }
    }

    function validate($data){
        return true; //aqui puedes meter validaciones reales
    }

}
?>
