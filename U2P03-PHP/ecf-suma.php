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
    $suma=0;
    for( $i=0;$i<=$numero;$i++){
        
        $suma=$suma+$i;
    }
    
    echo $suma;
    
    
    
}
?>
</body>
</html>