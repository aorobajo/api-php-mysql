<?php

require_once "clases/conexion/conexion.php";

$conexion = new conexion;

$query = "select * from estu";

print_r($conexion->obtenerDatos($query));


?>
