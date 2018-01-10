<?php

session_start();


if ( isset($_SESSION["nombre"]) ){
	
	
	
	header("Location: index.php");
	
    
}


	
	if ( isset($_POST["nombre"])){
		
			
			$_SESSION["nombre"] = $_POST["nombre"];
			header("Location: index.php");
		
		 
	}
	
	else{
	?>
	<html>
	<head>
	<title>U2_P08</title>
	<meta charset="UTF-8"/>
	
	
	</head>
	
	 
	<body>
	<p>Registrate para jugar</p>
	     <form action="registro.php" method="post">
		 Nombre: <input type="text" name="nombre" >
		 <br/>
		 <input type="submit" name="enviar">
		 </form>
	<p><a href="index.php">Comenzar juego</a></p>
	</body>
	</html>
	<?php
	
	
	}
	?>
	
	





