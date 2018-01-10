<html>
<head>
	<title>Conexión a BBDD con PHP</title>
	<meta charset="UTF-8"/>
</head>
<body>
<h2>Pruebas con la base de datos de animales</h2>
<?php
$servidor = "localhost";
$usuario = "alumno_rw";
$clave = "dwes";

$conexion = new mysqli($servidor,$usuario,$clave,"animales");
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
	<th>Chip</th>
	<th>Nombre</th>
	<th>Especie</th>
	<th>Imagen</th>
</tr>
<?php
$ruta="img/";
$resultado = $conexion -> query("SELECT * FROM animal ORDER BY nombre");
if($resultado->num_rows === 0) echo "<p>No hay animales en la base de datos</p>";
while($fila=$resultado->fetch_assoc()) {
	echo "<tr style='background-color:lightgreen'>";
	echo "<td>$fila[chip]</td>";
	echo "<td>$fila[nombre]</td>";
	echo "<td>$fila[especie]</td>\n";
	echo "<td><img src=$ruta$fila[imagen]></img></td>\n";
	echo "</tr>";
}

mysqli_free_result($resultado);





// Recoger el cuidador de request
if (!isset($_REQUEST["idCuidador"])) die ("<h3>ERROR en la petición. Falta identificador de cuidador</h3>");
$id = $_REQUEST["idCuidador"];




// Obtener los datos del cuidador
$resultado = $conexion -> query("SELECT * FROM cuidador WHERE idCuidador = ".$id);
if($resultado->num_rows === 0) die ("<h3>ERROR en la petición. Identificador de cuidador no válido</h3>");
$fila=$resultado->fetch_assoc();
echo "<h3>Animales cuidados por ".$fila['Nombre'].":</h3>";

// liberamos la memoria del resultado, que reutilizaremos después
mysqli_free_result($resultado);

// obtener los animales que cuida el cuidador
$resultado = $conexion -> query("SELECT animal.* FROM animal, cuida WHERE (animal.chip = cuida.chipAnimal) AND (cuida.idCuidador = '$id');");
if($resultado->num_rows === 0) echo "<p>Este cuidador no cuida a ningún animal</p>";
else {
	echo "<ul>";
	while($fila=$resultado->fetch_assoc()) {
		echo "<li>".$fila['nombre'].", de la especie ".$fila['especie']."</li>";
	}
	echo "</ul>";
}
?></table><?php 
echo "<h3>Desconectando...</h3>";
mysqli_close($conexion);
?>

<a href="conexion2.php" ><input type="button" value="Conexion2" ></a>
<a href="conexion3.php" ><input type="button" value="Conexion3" ></a>

<a href="conexion5.php" ><input type="button" value="Conexion5" ></a>
<a href="conexion6.php" ><input type="button" value="Conexion6" ></a>
</body>
</html>
