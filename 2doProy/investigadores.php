<?php
include_once("./views/header2.php");
require_once("./models/investigador.php");
$app = new Investigador();
$investigadores = $app -> read();
require_once("./views/investigador/index.php");
include_once("./views/footer2.php");
?>
