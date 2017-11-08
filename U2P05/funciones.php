<?php


//Password
function validar_password($password)
{
	if(preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/",$password))
	{
		return true;
	}
	return false;
}

//Nombre
function validar_nombre($nombre)
{
	if(preg_match("/^[a-zA-Z\s]+$/",$nombre))
	{
		return true;
	}
	return false;
}

//Apellido
function validar_apellido($apellidos)
{
	if(preg_match("/^[a-zA-Z\s]+$/",$apellidos))
	{
		return true;
	}
	return false;
}


//Email

function validar_email($email)
{
	if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
	{
		return true;
	}
	return false;
}

//Fecha Nacimiento

function validar_fecha($fecha)
{
	if (preg_match("^(0[1-9]|[12][0-9]|3[01])[-](0[1-9]|1[012])[-](19|20)[0-9]{2}^", $fecha))
	{
		return true;
	}
	return false;
}



//telefono

function validar_telefono($telefono)
{
	if (preg_match("^(\+34|0034|34)?[\s|\-|\.]?[6|7|9][\s|\-|\.]?([0-9][\s|\-|\.]?){8}$^", $telefono))
	{
		return true;
	}
	return false;
}

//ciclo

function validar_ciclo($tciclo)
{
	if ( !empty($ciclo))
	{
		return true;
	}
	return false;
}




?>