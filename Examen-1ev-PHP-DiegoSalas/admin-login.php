<?php
include('connectBBDD.php');


session_start();

$mensajeError="";

$passBuena="secreto";
$userBueno="admin";


if(isset($_POST['user'])) $user=$_POST['user'];

if(isset($_POST['password'])) $pass=$_POST['password'];



if (isset($_REQUEST["cerrarSesion"])) {
    $_SESSION=array();
    session_unset();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
            );
    }
    session_destroy();
}




if ( isset($_POST["enviar"])){
    
    
   

            
    if ( $user===$userBueno && $pass===$passBuena){
                
      
                    
                    $_SESSION["usuario"]=$user;
                    $_SESSION["password"]=$pass;
                    
                    header("Location: index.php");
                
                
            }
            else{
                
                $mensajeError="Error usuario/contraseña";
            }
        
    
    
    
    
    
}


?>

<html>
<head>
<title>Login</title>
<meta charset="UTF-8"/>
<title>Login</title>
</head>


<body>
<div id="cuadro">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<h1>Bienvenido a nuestra Web</h1>
<p> Inicia Sesion</p>
<br/>
Nombre<br/><input type="text" name="user" value="">
<br/>
Contraseña<br/><input type="text" name="password" value="">
<br/>

<br/>
<input type="submit" name="enviar" value="Entrar">
</form>
<a href="index.php">Volver al listado</a>
<a href="index.php?cerarSesion=TRUE">Cerrar Sesion</a>
<p><?php if($mensajeError!='')echo $mensajeError;?></p>
</div>
</body>
</html>
