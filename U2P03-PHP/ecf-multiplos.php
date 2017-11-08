<html>
<body>


 <?php   
    
    $multiplos5="";
    $multiplos3="";
    $multiplos3_20="";
    $multiplos5_20="";
    $cont5=0;
    $cont3=0;
    for( $i=1;$i<=1000; $i++ ){
        
        if( $i%5==0){
             $multiplos5.=",".$i;
             $cont5++;
             if( $i%5==0 && $cont5<=20 )
                 $multiplos5_20.=",".$i;
             
        }
        
        else if( $i%3==0){
            $multiplos3.=",".$i;
            $cont3++;
            if( $i%3==0 && $cont3<=20 )
                
                $multiplos3_20.=",".$i;
           
        }
        
    }
    
    echo "Multiplos de 3:<br/>".$multiplos3;
    echo "<br/>Multiplos de 5:<br/>".$multiplos5;
    
    echo "<br/>Los 20 primeros Multiplos de 3:<br/>".$multiplos3_20;
    echo "<br/>Los 20 primeros Multiplos de 5:<br/>".$multiplos5_20;
    
?>
<a href="index.php" ><input type="button" value="Volver" ></a>
</body>
</html>
