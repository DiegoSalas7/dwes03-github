<?php

$mensaje="";

if (session_status () == PHP_SESSION_NONE){
    session_start();
    
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
    

if ( isset($_POST['enviar'])){
    
    if( empty($_POST['nombre'])){
        $mensaje= 'Introduzca un nombre para iniciar sesión';
     }
     else{
 
         $_SESSION["nombre"] = $_POST['nombre'];
         
     }
     
 }


?>
<html>
<head>
<title>U2_P08</title>
<meta charset="UTF-8"/>


</head>


<?php 

if( empty( $_SESSION['nombre'])){
    
    

?>
 
<body>
<p>Bienvenido a la app</p>
     <form action="saludo.php" method="post">
	 Nombre: <input type="text" name="nombre" value="" >
	 <br/>
	 <input type="submit" name="enviar">
	 </form>

<?php

if( $mensaje!=null){
    echo $mensaje;
}

}
else{
    
     echo "Damos la bienvenida a ".$_SESSION['nombre']; 
    
}
?>
<p><a href="<?php echo $_SERVER['PHP_SELF']?>">Recargar la página</a></p>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>



</body>
</html>
