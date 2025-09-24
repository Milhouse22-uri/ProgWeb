<?php require_once('models/institucion.php');
$app = new Institucion; 
//$filas = $app ->delete(4); 

//$data['institucion']="institucion de prueba"; 
//$data['logotipo']="logotipo_prueba.png"; 
//$filas=$app->create($data);

$data['institucion']='institucion7';
$data['logotipo']='logotipo_prueba8.png';
$row = $app-> update($data,6);
print_r($row); 
?>