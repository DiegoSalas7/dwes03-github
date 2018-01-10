<?php
include('connectAdminBBDD.php');
session_start();

$mensajeError="";
$mensaje="";

if(isset($_POST['user'])) $user=$_POST['user'];
if(isset($_POST['pass'])) $pass=$_POST['pass'];
if(isset($_POST['nombre'])) $nombre=$_POST['nombre'];
if(isset($_POST['descripcion'])) $descripcion=$_POST['descripcion'];
if(isset($_POST['tipoCuenta'])) $tipoCuenta=$_POST['tipoCuenta'];

if (isset($_SESSION['login']))
    $login=$_SESSION['login'];
if (isset($_SESSION['admin']))
    $admin=$_SESSION['admin'];

    
if ( isset($_POST['enviar'])){
    
    
    if ( empty($user)){
        $mensajeError="No ha introducido nombre de usuario";
    }else{
        if( empty($pass) ){
            $mensajeError="No ha introducido contraseña para el  usuario";
        }
        else{
            $resultado= $conexion->query('SELECT login FROM usuario WHERE login="'.$user.'"');
            if($resultado->num_rows!=0){
                $mensajeError="El usuario ya existe";
            }
            else{
                
                $resultado->free_result();
                //$passwordHash = password_hash($pass, PASSWORD_DEFAULT);
                $resultado=$conexion->query( 'INSERT INTO usuario (login,password,nombre,admin,descripcion) VALUES("'.$user.'","'.$pass.'","'.$nombre.'","'.$tipoCuenta .'","'.$descripcion.'")');
                if($conexion->connect_error){
                    $mensajeError="Ha fallado la conexion";
                }else{
                    $mensaje="Se ha introducido el usuario correctamente";
                    $_SESSION['login']=1;
                    
                }
            }
            
        }
 
}

}
   


            
?>


<html>
<head>
    <title>Alta</title>
</head>
<body>
<h1>Alta de usuarios</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    User:<input type="text" name="user"><br>
    Password:<input type="text" name="pass"><br>
    Nombre Completo:<input type="text" name="nombre"><br>
    Descripción:<input type="text" name="descripcion"><br>
    Admin:<br>
    Si<input type="radio" name="tipoCuenta" value="1">
    No<input type="radio" name="tipoCuenta" value="0">
    <input type="submit" name="enviar">
</form>
<p><?php if($mensajeError!='')echo $mensajeError;?></p><br>
<p><?php if($mensaje!='')echo $mensaje;?></p><br>
<p>¿Ya tienes cuenta? Haz clic <a href="login.php">aquí </a>para iniciar sesión.</p>

</body>
</html>


 