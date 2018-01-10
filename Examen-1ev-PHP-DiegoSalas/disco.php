<?php
include('connectBBDD.php');


?>

<table style='border:0'>


<tr style='background-color:lightblue'>

	<th>Titulo<a href="index.php?orden=ASC">&#x25B2;</a><a href="index.php?orden=DESC">&#x25BC;</a></th>
	<th>Discografica</th>
	<th>Año<a href="index.php?ordenAño=ASC">&#x25B2;</a><a href="index.php?ordenAño=DESC">&#x25BC;</a></th>
	<th>Formato</th>
	<th>Foto</th>
	<th>Idioma<a href="index.php?idioma=ES"></a></th>
	<th>Idioma<a href="index.php?idioma=IS"></a></th>
	<th>Listado Canciones
	
	
	<table>
	<tr style='background-color:lightblue'>
	<th>Duracion</th>
	<th>NumeroLista</th>
	<th>titulo</th>
	
	</tr>
	</table>
	
	</th>
	
</tr>
<?php

if( isset($_REQUEST['idioma']) && $_REQUEST['idioma']=="ES"){
    $idioma=$_REQUEST['idioma'];
}
else{
    $idioma="IS";
}

if (!isset($_REQUEST["id"])) die ("<h3>ERROR en la petición. Falta identificador de autor</h3>");
$id = $_REQUEST["id"];

$resultado = $conexion -> query("SELECT * FROM discos WHERE id='$id' ");
if($resultado->num_rows === 0) echo "<p>No hay obras en la base de datos</p>";

while ($disco = $resultado->fetch_assoc()) {
    
    $resultado2 = $conexion -> query("SELECT * FROM temas WHERE id_disco=".$disco['id']);
    
    if($resultado2->num_rows === 0) echo "<p>No hay discos en la base de datos</p>";
    
    
    
    $tema= $resultado2->fetch_assoc();
    echo "<tr bgcolor='lightgreen'>";
    echo "<td>".$disco['nombre']."</td>\n";
    echo "<td>".$disco['discografica']."</td>\n";
    echo "<td>".$disco['year']."</td>\n";
    echo "<td>".$disco['soporte']."</td>\n";
    echo "<td><img  style='width:150px; height:150px' src='img/discografia/".$disco['imagen']."' >"."</td>\n";
    echo "<td><img  style='width:80px; height:50px' src='img/banderas/es.png' >"."</td>\n";
    echo "<td><img  style='width:80px; height:50px' src='img//banderas/is.png' >"."</td>\n";
    echo "<td>".$tema['minutos']."min ".$tema['segundos']." sec".$tema['numero']." ".$tema['nombre_e']."</td>\n";

    
    
    
    echo "</tr>";
}

?>
</table>

<a href="index.php">Volver al listado</a>


<html>
<head>
	<title>Inicio.DiegoSalas</title>
	<meta charset="UTF-8"/>
</head>
<body>
</body>

</html>
