<?php

session_start();

if (!isset($_SESSION["nombre"])){
    
	
    header("Location: registro.php");
    
}

if( !isset($_SESSION["respuesta2"]) ){
	
	header("Location: test2.php");
}


if( !isset($_POST["enviar3"])){
	
	
	
?>
	
	
	
	
<html>
<head>
<title>U2_P08</title>
<meta charset="UTF-8"/>

</head>

 
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<p>Tercera pregunta <?php

echo $_SESSION["nombre"];
?></p>
<p> ¿Cual es la nacionalidad de Ken Follett?</p>
<br/>

Americana<input type="radio" name="nacionalidad" value="incorrecto">
<br/>
Australiana<input type="radio" name="nacionalidad" value="incorrecto">
<br/>
Inglesa<input type="radio" name="nacionalidad" value="correcto">
<br/>
<br/>
<input type="submit" name="enviar3">
</form>

</body>
</html>

<?php

}

else{
	
	$_SESSION["respuesta3"] = $_POST['nacionalidad'];
	
	if( $_POST["nacionalidad"]=="correcto"){
	
		$_SESSION["acertada3"] = true;
	}
	else{
			
		$_SESSION["acertada3"] = false;
	}
		
	header('Location: resultados.php');
	
}
?>

