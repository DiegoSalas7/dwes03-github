<html>
<body>

<?php
if (!isset($_POST['enviar'])){
?>
 <form action="" method="post">
 Introduce una cadena:
 <input type="text" name="cadena">
 <br/>
<input type="submit" name="enviar">
 </form>
 <?php   
}
else 
{
    $cadena = $_POST['cadena'];
  
        
    
    for( $i=strlen($cadena);$i >0;$i--){
        for($j=0;$j<$i;$j++){
            echo $cadena[$j];
        }
       echo "<br/>";
        
    }
   
     
    
    
}
?>
<a href="index.php" ><input type="button" value="Volver" ></a>
</body>
</html>