<?php

session_start();

if ( !isset($_SESSION["nombre"])){
    
	
    header("Location: registro.php");
    
}




else{
	
	
 ?>   




<html>
<head>
<title>U2_P08</title>
<meta charset="UTF-8"/>

</head>


 
<body>
<p>Bienvenido al juego <?php

echo $_SESSION["nombre"];
?></p>
<p><a href="test1.php">Comenzar juego</a></p>



</body>
</html>

<?php 
}
?>
