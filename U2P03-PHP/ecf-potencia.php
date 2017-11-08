<html>
<body>

<?php
if (!isset($_POST['enviar'])){
?>
 <form action="" method="post">
 Introduce una base y un exponente:
 <br/>
 Base: <input type="text" name="numero1">
 <br/>
 Exponente: <input type="text" name="numero2">
  <br/>
<input type="submit" name="enviar">
 </form>
 <?php   
}
else {
    $num1=$_POST['numero1'];
    $num2=$_POST['numero2'];
    $potencia=1;
    $cont=0;
    
    while($cont<$num2)
    {
        $cont++;
        $potencia *= $num1;
    }
    echo $potencia;
    
}
?>
<a href="index.php" ><input type="button" value="Volver" ></a>
</body>
</html>