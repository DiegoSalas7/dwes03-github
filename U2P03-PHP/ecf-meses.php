<html>
<body>

<?php
if (!isset($_POST['enviar'])){
?>
 <form action="" method="post">
 Introduce el mes:
 <br/>
 Mes: <input type="text" name="mes"/>
 Bisiesto: <input type="radio" name="group"  value="1" checked/>
 No Bisiesto: <input type="radio" name="group" value="2"/>

 
 <br/>
<input type="submit" name="enviar">
 </form>
 <?php   
}
else 
{
    $bisiesto= $_POST['group'];
    $mes= $_POST['mes'];

    if(  is_numeric($mes) ){
        
        switch ($mes) {

            case 2:
                
                if($bisiesto==1 ){
                    
                    echo "Febrero bisiesto";
                }
                else{
                    echo "febrero no bisiesto";
                }
                break;
                
            case 1:    
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                echo "31 dias";
                break;
                
            case 4:
            case 6:
            case 9:
            case 11:
                
                echo "30 dias";
                break;
            
            default:
                
            break;
        }
    }
    else{
        
        
        if( strcasecmp($mes, "Enero") ==0 || strcasecmp($mes, "Marzo") ==0 || strcasecmp($mes, "Mayo") ==0 ||
            strcasecmp($mes, "Julio") ==0 ||strcasecmp($mes, "Agosto") ==0 || strcasecmp($mes, "Octubre") ==0 ||
            strcasecmp($mes, "Diciembre") ==0 ){
            
                echo "31 dias";
        }
        else if( strcasecmp($mes, "Abril") ==0 || strcasecmp($mes, "Junio") ==0 || strcasecmp($mes, "Septiembre") ==0 
            || strcasecmp($mes, "Noviembre") ==0  ){
            
                echo "30 dias";
        }
        else if ( strcasecmp($mes, "Febrero")==0 ){
                
                if( $bisiesto ==2 ){
                    
                
                    echo "Febrero no bisiesto";
                }
                else if ( $bisiesto == 1  ){
                    
                    echo "Febrero bisiesto";
                }
                
            
        }
    }
    
    
    
}

?>
<a href="index.php" ><input type="button" value="Volver" ></a>
</body>
</html>