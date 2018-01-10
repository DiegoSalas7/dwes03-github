
<?php 
include('connectBBDD.php');


$order="";
$orderaño="";

if( isset($_REQUEST['categoria']) && $_REQUEST['categoria']=='Sencillos') {
    
    $where="WHERE tipo=".$_REQUEST['categoria'];
}
else if( isset($_REQUEST['categoria']) && $_REQUEST['categoria']=='Varios') {
    
    $where="WHERE tipo=".$_REQUEST['categoria'];
}

else if( isset($_REQUEST['categoria']) && $_REQUEST['categoria']=='DVD') {
    
    $where="WHERE tipo=".$_REQUEST['categoria'];
}

else if( isset($_REQUEST['categoria']) && $_REQUEST['categoria']=='Álbumes') {
    
    $where="WHERE tipo=".$_REQUEST['categoria'];
}
else{
    $where="WHERE tipo='Álbumes'";
}


if( isset($_REQUEST['orden']) && $_REQUEST['orden']=='ASC') {
    
    $order="ORDER BY nombre_Obra ".$_REQUEST['orden'];
}
else if ( isset($_REQUEST['orden']) && $_REQUEST['orden']=='DESC' ){
    
    $order="ORDER BY nombre_Obra ".$_REQUEST['orden'];
}

if( isset($_REQUEST['ordenAño']) && $_REQUEST['ordenAño']=='ASC') {
    
    $orderAño="ORDER BY nombre_Obra ".$_REQUEST['ordenAño'];
}
else if ( isset($_REQUEST['ordenAño']) && $_REQUEST['ordenAño']=='DESC' ){
    
    $orderAño="ORDER BY nombre ".$_REQUEST['ordenAño'];
}

?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    
 <?php 
if( !isset($_POST["enviar"]) ){
    
    
    ?>
<p>Buscar obras por categoria:</p>

<input type="text" name="tipo" value="">
<input type="submit" name="enviar">
<br/>

</form>
<?php
    
    
}else{
    if( $_POST["categoria"]!=null){
        $where="WHERE tipo='".$_POST["categoria"]."'";
        
    }
    
}

?>
<table style='border:0'>


<tr style='background-color:lightblue'>

	<th>Titulo<a href="index.php?orden=ASC">&#x25B2;</a><a href="index.php?orden=DESC">&#x25BC;</a></th>
	<th>Discografica</th>
	<th>Año<a href="index.php?ordenAño=ASC">&#x25B2;</a><a href="index.php?ordenAño=DESC">&#x25BC;</a></th>
	<th>formato</th>
	<th>Foto</th>
</tr>



<?php

$consulta = "SELECT * FROM discos ".$where." ".$order;


$resultado = $conexion -> query($consulta);


if($resultado->num_rows === 0) echo "<p>No hay discos en la base de datos</p>";

while ($disco = $resultado->fetch_assoc()) {
    
    $resultado2 = $conexion -> query("SELECT DISTINCT tipo FROM discos");
    echo "<tr bgcolor='lightgreen'>";
    
    if($resultado2->num_rows === 0) echo "<p>No hay discos en la base de datos</p>";
    $tipo= $resultado2->fetch_assoc();
    
  
    echo "<td>".$disco['nombre']."</td>\n";
    echo "<td>".$disco['discografica']."</td>\n";
    echo "<td>".$disco['year']."</td>\n";
    echo "<td>".$disco['soporte']."</td>\n";
   
    echo "<td><a href='disco.php?id=".$disco['id']."'><img  style='width:150px; height:150px' src='img/discografia/".$disco['imagen']."' ></a>"."</td>\n";
    echo "</tr>";
}



?></table>





<html>
<head>
	<title>Inicio.DiegoSalas</title>
	<meta charset="UTF-8"/>
</head>
<body>
</body>

</html>




