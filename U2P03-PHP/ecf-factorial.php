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
    $factorial=1;
    for( $i=1;$i<=$numero;$i++){
        
        $factorial *=$i;
    }
    
    echo $factorial;
    
    
    
}
?>
</body>
</html>