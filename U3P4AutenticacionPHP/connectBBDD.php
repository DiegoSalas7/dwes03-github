<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";


$conexion = new mysqli($servidor,$usuario,$clave,"catalogo03");
$conexion->query("SET NAMES 'UTF8'");
if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

?>
