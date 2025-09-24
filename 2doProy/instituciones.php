<?php
include_once("./views/header2.php");
require_once("./models/institucion.php");
$app = new Institucion();
$instituciones = $app -> read();
include_once("./views/institucion/index.php");
include_once("./views/footer2.php");
?>