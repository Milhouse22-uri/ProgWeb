<?php
include_once("./views/header.php");

require_once("./models/accesorios.php");
$app = new Accesorios();
$accesorios = $app -> read();
include_once("panel/views/accesorios");

include_once("./views/footer.php");
?>