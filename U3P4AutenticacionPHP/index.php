<?php
include('connectBBDD.php');
session_start();

$mensajeError="";

if (isset($_SESSION["login"]))
    $login=$_SESSION["login"];
if (isset($_SESSION["usuario"]))
    $user=$_SESSION["usuario"];
if (isset($_SESSION['admin']))
    $admin=$_SESSION["admin"];


if ( $login!=1){
    
    header("Location: login.php");
}

$resultado= $conexion->query('SELECT * from usuario WHERE login="'.$user.'"');
if($resultado->num_rows==0){
    
    header('Location:logout.php');
}


?>


<html>
<head>
<title>Inicio</title>
</head>
<body>


<?php  while ($usuario = $resultado->fetch_assoc()) {
	
	?><h1>Bienvenido <?= $usuario['nombre']; ?></h1><?php 
	?><h1>Usuario: <?= $usuario['login']; ?></h1><?php
	?><h1>Descripcion: <?= $usuario['descripcion']; ?></h1><?php
	$_SESSION['admin']=$usuario['admin'];
	
	
	
	
}?>


<a href="mostrarCatalogo.php">Ver catalogo</a>
<a href="logout.php">Cerrar Sesion</a>
<a href="baja.php">Eliminar cuenta</a>



</body>
</html>

