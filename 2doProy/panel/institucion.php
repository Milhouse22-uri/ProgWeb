<?php
require_once("../models/institucion.php");
$app = new Institucion();
$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$data = array();
include_once("./views/header.php");
switch ($action){
    case 'create':
        $data['institucion']=$_POST['institucion'];
        $data['logotipo']=$_POST['logotipo'];
        $row = $app-> create($data);
        echo $row;
        break;


    case 'update':
        $data['institucion']=$_POST['institucion'];
        $data['logotipo']=$_POST['logotipo'];
        $id = $_POST['id'];
        $row = $app-> update($data,$id);
        echo $row;
        break;

    case 'delete':
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $row = $app-> delete($id);     
         }
        $data=$app->read();
        include_once("./views/institucion/index.php");
        break;

    case 'read':
    default:
            $data=$app->read();
            include_once("./views/institucion/index.php");
            break;
}
include_once("./views/footer.php");
?>