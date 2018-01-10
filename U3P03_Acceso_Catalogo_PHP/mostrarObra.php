
<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Base de datos de Catalogo</h2>
<?php


$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";

include "Obra.php";
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo03");
$conexion->query("SET NAMES 'UTF8'");
//si quisiéramos hacerlo en dos pasos:
// $conexion = new mysqli($servidor,$usuario,$clave);
// $conexion->select_db("animales");

if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}

?>

<table style='border:0'>
<tr style='background-color:lightblue'>
	<th>Nombre</th>
	<th>Codigo Obra</th>
	<th>Precio</th>
	<th>Nombre Autor</th>
	<th>Foto</th>
	<th>Foto Autor</th>
</tr>
<?php

// Recoger el codigo de obra de request
if (!isset($_REQUEST["codigo_Obra"])) die ("<h3>ERROR en la petición. Falta identificador de autor</h3>");
$id = $_REQUEST["codigo_Obra"];

$resultado = $conexion -> query("SELECT * FROM obra WHERE codigo_Obra='$id' ");
if($resultado->num_rows === 0) echo "<p>No hay obras en la base de datos</p>";

while ($obra = $resultado->fetch_object('Obra')) {
    
    $resultado2 = $conexion -> query("SELECT nombre_Autor,foto FROM autor WHERE codigo_Autor=".$obra->getCodigoAutor());
    
    if($resultado2->num_rows === 0) echo "<p>No hay obras en la base de datos</p>";
    
    
    
    $autor= $resultado2->fetch_assoc();
    echo "<tr bgcolor='lightgreen'>";
    echo "<td>".$obra->getNombre()."</td>\n";
    echo "<td>".$obra->getCodigoObra()."</td>\n";
    echo "<td>".$obra->getPrecio()."</td>\n";
    echo "<td>".$autor['nombre_Autor']."</td>\n";

    
    echo "<td><img  style='width:150px; height:150px' src='img/".$obra->getFoto()."' >"."</td>\n";
    echo "<td><img  style='width:150px; height:150px' src='img/".$autor['foto']."' >"."</td>\n";
    echo "</tr>";
}

?></table><?php 
echo "<h3>Desconectando...</h3>";
mysqli_close($conexion);
?>

<a href="mostrarCatalogo.php">Volver</a>

</body>
</html>
