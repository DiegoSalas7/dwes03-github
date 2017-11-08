<?php

include 'Triangulo.php';


if (!isset($_POST['enviar'])){
    ?>
 <form action="principalTriangulo.php" method="post">
 Introduce los datos:
 <br/>
 Base : <input type="text" name="base">
 <br/>
 Altura : <input type="text" name="altura">
  <br/>
<input type="submit" name="enviar">
 </form>
<?php
}
else{
    
   
    $triangulo= new Triangulo();
    
    echo "El área del triángulo es: ".$triangulo->area();
    
}    
?>