<?php

include 'Hexagono.php';


if (!isset($_POST['enviar'])){
    ?>
 <form action="principalHexagono.php" method="post">
 Introduce los datos:
 <br/>
 Lado : <input type="text" name="lado">
 <br/>
 Apotema : <input type="text" name="apotema">
  <br/>
<input type="submit" name="enviar">
 </form>
<?php
}
else{
    
   
    $hexagono= new Hexagono();
    
    echo  $hexagono;
    echo "El área del hexágono es: ".$hexagono->area();
    
    
}    
?>