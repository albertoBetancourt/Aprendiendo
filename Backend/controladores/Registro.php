<?php
	include_once("../Models/Usuario.php");
	class Registro
	{
		
	}
	$datos = $_REQUEST;
	$Obj=new Registro($datos['id'],$datos['nombre'], $datos['apellido'], $datos['nickname'], $datos['email'], $datos['genero'], $datos['fechaNacimiento'], $datos['pass'] );
	$Obj->registro();
?>