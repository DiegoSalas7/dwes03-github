<?php
session_start();

$mensajeError="";
if ( isset($_SESSION["login"]) && $_SESSION["login"]==1){
    
    
    header("Location: index.php");
    
}

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}


if ( isset($_POST["enviar"])){
    
    $id=$_POST["login"];
    $pass=$_POST["password"];
    
    $resultado = $conexion -> query("SELECT * FROM usuario WHERE login='$id' ");
    if($resultado->num_rows === 0){
        $mensajeError="No existe el ususuario en la base de datos";
    }
    
   if( $_POST["password"]== $resultado['password']){
        
       $_SESSION["login"]=1;
       $_SESSION["usuario"]=$resultado['nombre'];
       header("Location: index.php");
   }
   else{
       
   
    $error="Fallo contaseña";
    
    }

}
if( !isset($_POST["enviar"])){
    
?>

<html>
<head>
<title>U3_P04</title>
<meta charset="UTF-8"/>

</head>


<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<p> Inicia Sesion</p>
<br/>
Nombre<input type="radio" name="login" value="">
<br/>
Contraseña<input type="radio" name="password" value="">
<br/>

<br/>
<input type="submit" name="enviar">
</form>

<a href="alta.php">¿aún no tienes cuenta? Haz clic aquí para crear una.</a>
</body>
</html>
<?php
}
?>
