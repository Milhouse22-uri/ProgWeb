<?php
require_once("../models/accesorios.php");
$app = new Accesorios();
$action = isset($_GET['action']) ? $_GET['action'] : 'read';
$data = array();
include_once("./views/header.php");
switch ($action){
    case 'create':
        if(isset($_POST['enviar'])){
            $data['nombre']=$_POST['nombre'];
            $data['precio']=$_POST['precio'];
            $data['descripcion']=$_POST['descripcion'];
            $data['imagen']=$_FILES['imagen']['name'];
            $row = $app-> create($data);
            if($row){
                $alerta['mensaje'] = "Accesoro creado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            }else{
                $alerta['mensaje'] = "El accesorio no fue dado de alta";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php"); 
            }
            $data=$app->read();
            include_once("./views/accesorios/index.php");
        }else{
            include_once("./views/accesorios/_form.php");
        }
        break;


    case 'update':
        if(isset($_POST['enviar'])){
            $data['nombre']=$_POST['nombre'];
            $data['precio']=$_POST['precio'];
            $data['descripcion']=$_POST['descripcion'];
            $id = $_GET['id'];
            $row = $app-> update($data,$id);
            if($row){
                    $alerta['mensaje'] = "Accesorio modificado correctamente";
                    $alerta['tipo'] = "success";
                    include_once("./views/alert.php");
                }else{
                    $alerta['mensaje'] = "El accesorio no fue modificada";
                    $alerta['tipo'] = "danger";
                    include_once("./views/alert.php"); 
                }
            $data=$app->read();
                include_once("./views/accesorios/index.php");
        }else{
            $id = $_GET['id'];
            $data = $app->readOne($id);
            include_once("./views/accesorios/_form_update.php");
        }
        
        break;

    case 'delete':
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $row = $app-> delete($id);   
            if($row){
                $alerta['mensaje'] = "Accesorio eliminado correctamente";
                $alerta['tipo'] = "success";
                include_once("./views/alert.php");
            }else{
                $alerta['mensaje'] = "El accesorio no fue eliminada";
                $alerta['tipo'] = "danger";
                include_once("./views/alert.php"); 
            }  
         }
        $data=$app->read();
        include_once("./views/accesorios/index.php");
        break;

    case 'read':
    default:
            $data=$app->read();
            include_once("./views/accesorios/index.php");
            break;
}
include_once("./views/footer.php");
?>