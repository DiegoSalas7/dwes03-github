<?php
$a=5;
$b=3;
echo $a += $b;
echo"<br>";
echo $a -= $b;
echo"<br>";
echo $a *= $b;
echo"<br>";
echo $a /= $b;
echo"<br>";
echo $a .= $b;
echo"<br>";

$cadena= "Hola paco";
$x= "";

$x=str_word_count($cadena);

echo $x;

$x="0";
$x= strspn($cadena, 2);
echo $x;

$array1= array("Vinlli","Joakin","Paco");

echo $array1[2]."come conejos<br>";

$array2= array(2=>"Vinlli",0=>"Joakin",1=>"Paco");

$array2[5]="Antonio";

echo $array2[5]."<br>";

echo count($array2);

for($i=0;$i<= count($array2)+1; $i++) {
    
    if(isset($array2[$i])){
        echo $array2[$i];
        
    }
    else 
        echo "la posicion vacia es".$i;
}
echo "<br>";
var_dump($array2);


echo "<ul>";
$ciclos = array("SMR","ASIR","DAW");
foreach($ciclos as $actual)
{
    
   echo "<li>$actual</li>";
}
echo "</ul>";


$capitales = array("España" => "Madrid","Portugal" => "Lisboa", "Alemania" => "Berlín" );

print_r($capitales);

echo"<br>";
echo"<br>";


$horas["DWES"]=9;
$horas["DWEC"]=7;
$horas["ING"]=2;

print_r($horas);

foreach ($horas as $actual=> $hora){
    
    echo "<li>La hora de $actual es $hora </li>";
}

   
?>