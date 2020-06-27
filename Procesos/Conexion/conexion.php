<?php
function conexion(){
    $conexion = new mysqli("localhost","root","","tadia");
    if ($conexion->connect_errno) {
        echo "Fallo la conexión". $conexion->connect_error;
    }
    $conexion->set_charset("utf8");
    return $conexion;
}
?>