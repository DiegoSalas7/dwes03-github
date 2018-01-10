<?php
session_start();

if (!isset($_SESSION["nombre"])){


	header("Location: registro.php");

}

if( !isset($_SESSION["respuesta3"]) ){

	header("Location: test3.php");
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
	
	header("Location: registro.php");
}

if($_SESSION["acertada1"]==true){
	
	echo "Primera pregunta acertada.<br/>";
}
else{
	
	echo "Primera pregunta fallada.<br/>";
}

if($_SESSION["acertada2"]==true){

	echo "Segunda pregunta acertada.<br/>";
}
else{

	echo "Segunda pregunta fallada.<br/>";
}

if($_SESSION["acertada3"]==true){

	echo "Tercera pregunta acertada.<br/>";
}
else{

	echo "Tercera pregunta fallada.<br/>";
}



?>
<p><a href="<?php echo $_SERVER['PHP_SELF']."?cerrarSesion=true"?>">Cerrar sesión</a></p>




