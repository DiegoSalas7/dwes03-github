<?php
$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "dwes";
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo03");
$conexion->query("SET NAMES 'UTF8'");
?>
