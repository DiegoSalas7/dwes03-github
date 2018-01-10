<?php

session_start();

if (!isset($_SESSION["nombre"])){
    
	
    header("Location: registro.php");
    
}


if( !isset($_POST["enviar1"])){
	
	
	
?>
	
	
	
	
<html>
<head>
<title>U2_P08</title>
<meta charset="UTF-8"/>

</head>

 
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<p>Primera pregunta <?php

echo $_SESSION["nombre"];
?></p>
<p> ¿Cual es la pelicula mejor valorada de la historia?</p>
<br/>
El Padrino<input type="radio" name="pelicula" value="correcto">
<br/>
Requiem for a dream<input type="radio" name="pelicula" value="incorrecto">
<br/>
Amores Perros<input type="radio" name="pelicula" value="incorrecto">
<br/>
<br/>
<input type="submit" name="enviar1">
</form>

</body>
</html>

<?php

}

else{
	
	$_SESSION["respuesta1"] = $_POST["pelicula"];
	
	if( $_POST["pelicula"]=="correcto"){
		
		$_SESSION["acertada1"] = true;
	}
	else{
			
		$_SESSION["acertada1"] = false;

	}
		
	header('Location: test2.php');
	
}
?>
