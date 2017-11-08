<html>
<body>

<?php
if (!isset($_POST['enviar'])){
?>
 <form action="" method="post">
 Introduce un numero:
 <br/>
 Numero: <input type="text" name="numero">
 <br/>
<input type="submit" name="enviar">
 </form>
 <?php   
}
else 
{
    $numero = $_POST['numero'];
   
    for( $i=1;$i<=10;$i++){
        
        echo $numero."*".$i."=".$numero*$i."<br>";
    }
   
     
    
    
}
?>
<a href="index.php" ><input type="button" value="Volver" ></a>
</body>
</html>