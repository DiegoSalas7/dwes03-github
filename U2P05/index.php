<html>

<style>

span{
color:red;
}

</style>
<body>

<?php

include("funciones.php");
    

if (!isset($_POST['enviar'])){

    ?>
 <form action="index.php" method="post">
 Nombre: <input type="text" name="nombre" value="" >
 <br/>
 Apellidos: <input type="text" name="apellidos" value="" >
 <br/>
 Password: <input type="text" name="password" value="" >
 <br/>
 Email: <input type="text" name="email" value="" >
 <br/>
 Fecha nacimiento: <input type="date" name="nacimiento" value="" >
 <br/>
 Telefono: <input type="text" name="telefono" value="" >
 <br/>
 Ciclo formativo:
 <select name="ciclo" >
 <option></option>
 <option>DAW</option>
 <option>ASIR</option>
 <option>DAM</option>
 </select>
 <br/>
<input type="submit" name="enviar">
 </form>


<?php



}
else{
	
	?>
	
	<form action="index.php" method="post">
	
 Nombre: <input type="text" name="nombre" value=<?php echo $_POST['nombre']?> >
 <?php  if( !validar_nombre($_POST['nombre']) ){?>
 <span>Nombre incorrecto</span>
 <?php }?>
 <br/>
 
 Apellidos: <input type="text" name="apellidos" value=<?php echo $_POST['apellidos'] ?> >
  <?php  if( !validar_apellido($_POST['apellidos']) ){?>
 <span>Apellido incorrecto</span>
 <?php }?>
 <br/>
 
 Password: <input type="text" name="password" value=<?php echo $_POST['password'] ?> >
  <?php  if( !validar_password($_POST['password']) ){?>
 <span>Password incorrecta(Debe contener 1mayuscula 1 minuscula 1 numero)</span>
 <?php }?>
 <br/>
 
 Email: <input type="text" name="email" value=<?php echo $_POST['email'] ?> >
  <?php  if( !validar_email($_POST['email']) ){?>
 <span>Email incorrecto.El email debe seguir el patron de email (ejemplo@mail.xxx)</span>
 <?php }?>
 <br/>
 
 Fecha nacimiento: <input type="date" name="nacimiento" value=<?php echo $_POST['nacimiento'] ?> >
  <?php  if( !validar_fecha($_POST['nacimiento']) ){?>
 <span>Fechs incorrecta.La fecha debe seguir el patron( dd/mm/aaaa )</span>
 <?php }?>
 <br/>
 
 Telefono: <input type="text" name="telefono" value=<?php echo $_POST['telefono'] ?> >
  <?php  if( !validar_telefono($_POST['telefono']) ){?>
 <span>Telefono incorrecto.</span>
 <?php }?>
 <br/>
 
 Ciclo formativo:
 <select name="ciclo" >
 <option></option>
 <option>DAW</option>
 <option>ASIR</option>
 <option>DAM</option>
 </select>
 <br/>
  <?php  if( !validar_ciclo($_POST['ciclo']) ){?>
 <span>Debe marcar un ciclo.</span>
 <?php }?>
 
<input type="submit" name="enviar">
 </form>
 
<?php 
	

}

?>

</body>
</html>