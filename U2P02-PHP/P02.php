<html>

<body>

<?php

// COMENTARIOS
/* UT2_P02

 */

/** primera practica php

 **/



//SENTENCIAS ECHO

$nombre = "Diego";

echo "Mi nombre es " . $nombre;

echo 'Mi nombre es ' . $nombre;


 

// OPERADORES LOGICOS , DE COMPARACIÓN Y ASIGNACION

$a = 5;

$b = 10;

$b +=$a;

echo "$b";

$b *=$a;

echo "$b";

$b /=$a;

echo "$b";

$c = 5;

$d = 10;

if ($a > $b) {

echo "$c es mayor que $d";
} elseif ($a <$b) {
    
echo "$c es menor que $d";
} else {
    
echo "$c es igual que $d";
}
if ($a < 10 && $b > 10) {
echo "<p>Error</p>";
} else {
echo "<p>Mas error que antes.</p>";
}

// VARIABLE POR REFERENCIA

$cadena = "VARIABLES POR REFENRENCIA";

echo "</br>";

echo "<p>El texto tiene " . strLen($cadena) . " caracteres.<p>";

echo "</br>";

echo "Caracter numero 10" . $cadena[10];

echo "</br>";

echo "Ultimo caracter " . $cadena[strlen($cadena) - 1];

echo "</br>";

// CONSTANTES

//Obligación de mayusculas

define( "ALUMNO", "Diego Salas");

echo"El alumno ".ALUMNO;

//Sin respetar mayusculas

define("CLASE", "1004",true );

echo "La clase: ".clase;

// VARIABLES BOOLEANAS Y DOUBLES

$boolean = false;

$double = 3.77;

$numeric = 8;

// USO DE IS_NUMERIC, IS_BOOL, IS_DOUBLE

if (is_bool($boolean)) {
echo "La variable booleana lo es.";
} else if (is_numeric($numeric)) {
echo "La variable numerica lo es";
} else if(is_double($double)){
echo "La variable double lo es";
}

// STRING

echo "La posicion de la letra o es:";
echo strpos($cadena, "o");

echo "</br>El total de palabras es:";

echo str_word_count($cadena);

echo "</br>";

echo "<p>El texto:'cadena' tiene " . strLen($cadena) . " caracteres.<p>";

echo "</br>";

// ARRAY ESCALAR Y ARRAY ASOCIATIVO


//Escalar
$jugadores[0] = "Modric";

$jugadores[1] = "Cracksemiro";

$jugadores[4] = "Vinlli";

$jugadores[5] = "Jacob";

/*

 for (i = 0; i < sizeof(ciclos); i ++) {
 echo ciclos[i];
 echo "</br>";
 }
  */

//Asociativo 
  $nombres = array(
  "Diego" => "Salas",
  "Luka" => "Modric",
  "Ariel" => "Ortega"
  );
  /*
 print_r($nombres);
 echo "</br>";
  
 foreach (nombres as apellido => $nombre) {
 echo "<h3>El apellido de nombre es apellido </h3>";
 }
  */



// VAR_DUMP

var_dump($jugadores);

echo "</br>";

var_dump($nombres);

echo "</br>";

// ESTRUCTURAS DE CONTROL

for ($i = 0; $i < sizeof($jugadores); $i++) {
    
    if( $jugadores[$i] !=null ){
        
        echo $jugadores[$i];
        echo "</br>";
    }
}

$j = 0;

while ($j < 10) {
echo "</br>";
echo "$j";
$j += 1;
}

$j = 0;

do {
echo "</br>";
echo "$j";
$j += 1;
} while ($j < 10);

$opcion = 1;

switch ($opcion) {
case 1:
    echo "<p>Hola</p>";
case 2:
    echo "<p>Adios</p>";

default:
    echo "<p>Fallo</p>";
    break;
    }

if ( $jugadores[0]="Vinlli") {
    
echo "Acertaste";

} elseif ($jugadores[0]="Adebayor") {
echo "Acertaste";

} else {
echo "Fallaste";

}

// RECORRIDO DE LOS ARRAYS CON FOR EACH

echo "<ol>";

foreach ($jugadores as $jugador){
    echo "<li> $jugador </li>";
}


echo "</ol>";

echo "<ol>";

foreach ($nombres as $nombre => $apellido) {
    
echo "<li>El apellido de $nombre es $apellido </li>";
}

echo "</ol>";

// VARIABLE SUPERGLOBAL_SERVER

echo $_SERVER['PHP_SELF'];

echo "</br>";

echo $_SERVER['HTTP_HOST'];

// FUNCIONES

$sueldo = 1000;

$plus = 235;

function aumentoSueldo($plus){

global $sueldo;
$total = $sueldo + $plus;
return $total;
}

echo "<p>Aumento de suelto, sueldo total " . aumentoSueldo($plus) . "</p>";

function bajadaSueldo($plus)

{
global $sueldo;
$total = $sueldo - $plus;

}

echo "El sueldo rebajado: ".bajadaSueldo($plus);

// FECHA Y HORA

echo "Dia de la semana: " . date("N:l");

echo "</br>";

echo "Fecha actual : " . date("d-m-y");

echo "</br>";

echo "Mes: " . date("F");

echo "</br>";

echo "Este mes tiene : " . date("t") . " dias";

echo "</br>";

if (date("L") == 0) {
echo "No es bisiesto";
echo "</br>";
} else {
echo "Es bisiesto ";
echo "</br>";
}

echo "La hora actual es : " . date("H:i");

echo "</br>";

echo "La zona horaria es : " . date("e");

echo "</br>";

// FUNCION CON VARIABLE GLOBAL

$sueldo = 1000;

$plus = 235;

function aumentoSueldo2($plus){
$total = $GLOBALS["sueldo"] + $plus;
return $total;
}

echo "<p>Aumento de suelto, sueldo total " . aumentoSueldo2($plus) . "</p>";

// FORMULARIO

if (! isset($_POST['enviar'])) {
}

echo "<p>Aumento de suelto, sueldo total " . aumentoSueldo2($plus) . "</p>";

// FORMULARIO

if (! isset($_POST['enviar'])) {
?>
<form action="U2P02-PHP.php" method="post">
	Nombre:<input type="text" name="nombre"> Apellido:<input type="text"
		name="apellido"> <input type="submit" name="enviar">
</form>
  <?php

} else {
echo "<h2>¡Bienvenido " . $_POST["nombre"] . " " . $_POST["apellido"] . "!";
  }

?>

</body>

</html>