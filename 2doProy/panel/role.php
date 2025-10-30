<?php
require_once("../models/role.php");
$app = new Role();
$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$data = array();
include_once("./views/header.php");
switch ($action) {
    case 'create':
        if (isset($_POST['enviar'])) {
            $data['role'] = $_POST['role'];
            $row = $app -> create($data);
            if ($row){
                $alerta['mensaje'] = "Rol dado de alta correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            }else{
                $alerta['mensaje'] = "El rol no fue dado de alta";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");
            }
            $data = $app -> read();
            include_once("./views/role/index.php");
        }else{
            include_once("./views/role/_form.php");
        }
        break;

    case 'update':
        if (isset($_POST['enviar'])) {
            $data['role'] = $_POST['role'];
            $id = $_GET['id'];
            $row = $app -> update($data, $id); 
            if ($row){
                $alerta['mensaje'] = "Rol modificado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            }else{
                $alerta['mensaje'] = "El rol no fue modificado";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");
            }
            $data = $app -> read();
            include_once("./views/role/index.php");
        }else{
            $id = $_GET['id'];
            $data = $app -> readOne($id);
            include_once("./views/role/_form_update.php");
        }
        break;

    case 'delete':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $row = $app -> delete($id);
            if ($row){
                $alerta['mensaje'] = "Rol eliminado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            }else{
                $alerta['mensaje'] = "El rol no eliminado";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php");
            }
        }
        $data = $app -> read();
        include_once("./views/role/index.php");
        break;
    
    case 'read':
    default:
        $data = $app -> read();
        include_once("./views/role/index.php");
        break;
}
include_once("./views/footer.php");
?>