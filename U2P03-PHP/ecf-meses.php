<html>
<body>

<?php
if (!isset($_POST['enviar'])){
?>
 <form action="" method="post">
 Introduce el mes:
 <br/>
 Mes: <input type="text" name="mes">
 Bisiesto: <input type="radio" name="bisiesto" value="2">

 
 <br/>
<input type="submit" name="enviar">
 </form>
 <?php   
}
else 
{
    $Bisiesto= $_POST['bisiesto'];
    $Mes= $_POST['mes'];

    if(  is_numeric($Mes) ){
        
        switch ($Mes) {
            case 1:
                
                echo "Enero";
            break;
            case 2:
                
                if($Bisiesto== 1){
                    
                    echo "Febrero bisiesto";
                }
                break;
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
            case 11:
            case 12:
                
                
                echo "Enero";
                break;
            case 1:
                
                echo "Enero";
                break;
                
            
            default:
                ;
            break;
        })
    }
    
}
?>
</body>
</html>