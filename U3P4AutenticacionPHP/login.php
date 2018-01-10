<?php
include('connectBBDD.php');


session_start();

$mensajeError="";


if(isset($_POST['user'])) $user=$_POST['user'];

if(isset($_POST['password'])) $pass=$_POST['password'];


if(isset($_SESSION['login'])) $login=$_SESSION['login'];
if(!isset($_SESSION['login'])) $login=0;


    



if( $login===1){
    header("Location: index.php");
}



if ( isset($_POST["enviar"])){
    
    
    
   
    $consulta=('SELECT login,password FROM usuario WHERE login="'.$user.'"');
    echo $consulta;
  
    $resultado = $conexion -> query($consulta);
    if($resultado->num_rows > 0){
       
        while ($usuario = $resultado->fetch_assoc()){
            
            if ( $pass=== $usuario['password'] ){
                
                
                $_SESSION['login']=1;
                $_SESSION["usuario"]=$user;
                $_SESSION["password"]=$pass;
                
                header("Location: index.php");
            }
            else{
                
                $mensajeError="Error usuario/contraseña";
            }
        }
    }
    else{
        
        $mensajeError="Error usuario/contraseña";
    }
    mysqli_free_result($resultado);
    
    
}


?>

<html>
<head>
<title>U3_P04</title>
<meta charset="UTF-8"/>
<title>Login</title>
</head>


<body>
<div id="cuadro">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<p> Inicia Sesion</p>
<br/>
Nombre<br/><input type="text" name="user" value="">
<br/>
Contraseña<br/><input type="text" name="password" value="">
<br/>

<br/>
<input type="submit" name="enviar" value="Entrar">
</form>

<a href="alta.php">¿aún no tienes cuenta? Haz clic aquí para crear una.</a>
<p><?php if($mensajeError!='')echo $mensajeError;?></p>
</div>
</body>
</html>