<html>
<body>

<?php
if (!isset($_POST['enviar'])){
?>
 <form action="" method="post">
 Introduce un numero del 1 al 10:
 <br/>
 Numero 1 : <input type="text" name="numero1">
 <br/>
 Numero 2 : <input type="text" name="numero2">
  <br/>
<input type="submit" name="enviar">
 </form>
 <?php   
}
else {
    $num1=$_POST['numero1'];
    $num2=$_POST['numero2'];
    $resta=0;
    $asterisco="";
    $almohadilla="";
    
    if( ( $num1>=10 || $num1<=1 ) && ($num2>=10 || $num2<=1) )
    {
        alert("Los numeros son menores de 0 o mayores de 10");
    }else{
        
        if($num1 > $num2){
            while($num2<$num1 ){
                
                $asterisco.="*";
                
                $num2++;
                $resta++;
                
            }
            
            echo $asterisco;
        }
        
        
        else if ($num1 < $num2){
            
            while($num1<$num2 ){
                
                $asterisco.="*";
                
                $num1++;
                $resta++;
            }
            
            echo $asterisco;
        }
    
        
        
        for($i=0;$i<$resta;$i++)
        {
            $almohadilla.="#";
     
        }
        echo $almohadilla;
        
        
    }
}
?>

<a href="index.php" ><input type="button" value="Volver" ></a>
</body>

</html>


