<?php

session_start();

if (!isset($_SESSION["nombre"])){
    
	
    header("Location: registro.php");
    
}

if( !isset($_SESSION["respuesta1"]) ){
	
	header("Location: test1.php");
}


if( !isset($_POST["enviar2"])){
	
	
	
?>
	
	
	
	
<html>
<head>
<title>U2_P08</title>
<meta charset="UTF-8"/>

</head>

 
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<p>Segunda pregunta <?php

echo $_SESSION["nombre"];
?></p>
<p> ¿Cual es el disco mas vendido de la historia?</p>
<br/>
Thiller - Michael Jackson<input type="radio" name="disco" value="correcto">
<br/>
Back in Black - AC/DC<input type="radio" name="disco" value="incorrecto">
<br/>
The Dark Side of the Moon - Pink Floyd<input type="radio" name="disco" value="incorrecto">
<br/>
<br/>
<input type="submit" name="enviar2">
</form>

</body>
</html>

<?php

}

else{
	
	$_SESSION["respuesta2"] = $_POST['disco'];
	
	if( $_POST["disco"]=="correcto"){
	
		$_SESSION["acertada2"] = true;
	}
	else{
			
		$_SESSION["acertada2"] = false;
	}
		
	header('Location: test3.php');
	
}
?>

