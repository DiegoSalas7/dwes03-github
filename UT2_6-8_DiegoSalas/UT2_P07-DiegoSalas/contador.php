

<?php
if (session_status () == PHP_SESSION_NONE){
    session_name('idSesion03');
    session_start ();
    
    if (isset ( $_SESSION ['contador'] ))
        $_SESSION ['contador'] += 1;
        else
            $_SESSION ['contador'] = 1;
            $mensaje = "Has visitado esta página " . $_SESSION ['contador'] . " veces en esta sesión.";

            
}   

if(session_status() == PHP_SESSION_NONE) {
    // código de renombrado de la sesión
    session_start();
}
if (isset($_REQUEST["reiniciarContador"])) {
    unset($_SESSION["contador"]);
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

if (!isset($_POST['visitas'])){
    
    ?>
 <form action="contador.php" method="post">
 Numero visitas: <input type="text" name="visitas" value="" >
 <br/>
 <input type="submit" name="enviar">

 </form>
<?php 
}else{
    
    $_SESSION ['contador'] += $_POST['visitas'];
    $mensaje = "Has visitado esta página " . $_SESSION ['contador'] . " veces en esta sesión.";
    
}

?>
<html>
<head>
<title>Sesiones</title>
<meta charset="UTF-8"/>
</head>
<body>
<h3><?php echo $mensaje;?></h3>
<p><a href="<?php echo $_SERVER['PHP_SELF']?>">Recargar la página</a></p>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?reiniciarContador=true"?>">Reiniciar contador</a></p>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>

</body></html>
