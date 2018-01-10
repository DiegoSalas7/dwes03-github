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

session_name('autor');
session_start();

include "Obra.php";
$conexion = new mysqli($servidor,$usuario,$clave,"catalogo03");
$conexion->query("SET NAMES 'UTF8'");
//si quisiéramos hacerlo en dos pasos:
// $conexion = new mysqli($servidor,$usuario,$clave);
// $conexion->select_db("animales");

$order="";
$where="";





if ($conexion->connect_errno) {
	echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}


if (isset($_REQUEST["cerrarSesion"])) {
    $_SESSION=array();
    session_unset();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
            );
    }
    session_destroy();
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<?php 

if( !isset($_POST["enviar"]) ){
    
    
    ?>
<p>Buscar obras por nombre:</p>

<input type="text" name="titulo" value="">
<input type="submit" name="enviar">
<br/>

</form>
<?php
    
    
}else{
    if( $_POST["titulo"]!=null){
        $where="WHERE nombre_Obra='".$_POST["titulo"]."'";
        
    }
    
}





if( isset($_REQUEST['id']) && $_REQUEST['id']=='ASC') {
    
    $order="ORDER BY nombre_Obra ".$_REQUEST['id'];
}
else if ( isset($_REQUEST['id']) && $_REQUEST['id']=='DESC' ){
    
    $order="ORDER BY nombre_Obra ".$_REQUEST['id'];
}


if(isset($_REQUEST['codigo_Autor'])){
    
    $where= "WHERE codigo_Autor=".$_REQUEST["codigo_Autor"];
    $_SESSION["codigo_Autor"]=$_REQUEST["codigo_Autor"];
}

if( isset($_SESSION['codigo_Autor'])){
    $where= "WHERE codigo_Autor=".$_SESSION["codigo_Autor"];
    
}




?>

<table style='border:0'>


<tr style='background-color:lightblue'>

	<th>Nombre Obra<a href="mostrarCatalogo.php?id=ASC">&#x25B2;</a><a href="mostrarCatalogo.php?id=DESC">&#x25BC;</a></th>
	<th>Codigo Obra</th>
	<th>Precio</th>
	<th>Codigo Autor</th>
	<th>Nombre Autor</th>
	<th>Foto</th>
</tr>
<?php




$consulta = "SELECT nombre_Obra,codigo_Obra,precio,codigo_Autor,foto FROM obra ".$where." ".$order;


$resultado = $conexion -> query($consulta);


if($resultado->num_rows === 0) echo "<p>No hay obras en la base de datos</p>";

while ($obra = $resultado->fetch_object('Obra')) {
    
    $resultado2 = $conexion -> query("SELECT nombre_Autor,codigo_Autor FROM autor WHERE codigo_Autor=".$obra->getCodigoAutor());
    
    if($resultado2->num_rows === 0) echo "<p>No hay obras en la base de datos</p>";
    
    
    
    $autor= $resultado2->fetch_assoc();
    echo "<tr bgcolor='lightgreen'>";
    
    echo "<td><a href='mostrarObra.php?codigo_Obra=".$obra->getCodigoObra()."'>".$obra->getNombre()."</a></td>\n";
    echo "<td>".$obra->getCodigoObra()."</td>\n";
    echo "<td>".$obra->getPrecio()."</td>\n";
    echo "<td>".$obra->getCodigoAutor()."</td>\n";
    echo "<td><a href='mostrarCatalogo.php?codigo_Autor=".$obra->getCodigoAutor()." '>".$autor['nombre_Autor']."</a></td>\n";

    echo "<td><img  style='width:150px; height:150px' src='img/".$obra->getFoto()."' >"."</td>\n";
    echo "</tr>";
}





?></table>

<?php 


mysqli_close($conexion);
?>

<br/>
<a href="mostrarCatalogo.php?cerrarSesion=true">Eliminar Filtros</a>

</body>
</html>
