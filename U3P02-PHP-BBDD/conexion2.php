<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de animales</h2>
<?php
$servidor = "localhost";
$usuario = "alumno";
$clave = "alumno";

$conexion = new mysqli($servidor,$usuario,$clave,"animales");
$conexion->query("SET NAMES 'UTF8'");
//si quisiéramos hacerlo en dos pasos:
// $conexion = new mysqli($servidor,$usuario,$clave);
// $conexion->select_db("animales");

if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
echo "<p>A continuación mostramos algunos registros:</p>";
$resultado = $conexion -> query("SELECT * FROM animal ORDER BY NOMBRE");
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
$fila=$resultado->fetch_assoc();
while($fila!=null) {
	echo "<hr>";
	echo "Nombre:" . $fila['nombre'];
	echo "<br>Especie: $fila[especie]"; // observa la diferencia en el uso de comillas
	$fila=$resultado->fetch_assoc();
}

mysqli_free_result($resultado);

echo "<p>A continuación mostramos los cuidadores:</p>";
$resultado = $conexion -> query("SELECT * FROM cuidador ORDER BY NOMBRE");
if($resultado->num_rows === 0) echo "<p>No hay cuidadores en la base de datos</p>";
$fila=$resultado->fetch_assoc();
while($fila!=null) {
    echo "<hr>";
    echo "Nombre:" . $fila['Nombre'];
    $fila=$resultado->fetch_assoc();
}

mysqli_free_result($resultado);
echo "<h3>Desconectando...</h3>";
mysqli_close($conexion);
?>


<a href="conexion3.php" ><input type="button" value="Conexion3" ></a>
<a href="conexion4.php?idCuidador=12345" ><input type="button" value="Conexion4" ></a>
<a href="conexion5.php" ><input type="button" value="Conexion5" ></a>
<a href="conexion6.php" ><input type="button" value="Conexion6" ></a>

</body>
</html>
