<?php
	include_once("../Models/Usuario.php");
	class Registro
	{
		private $nombres;
		private $apellidos;
		private $username;
		private $cedula;
		private $email;
		private $contrasenia;
		private $fechaNacimiento;
		private $genero;
		private $ciudad;
		private $pais;
		
		public function __construct($nombres, $apellidos, $username, $cedula, $email, $contrasenia, $fechaNacimiento, $genero, $ciudad, $pais)
		{
			$this->nombres = $nombres;
			$this->apellidos = $apellidos;
			$this->username = $username;
			$this->cedula = $cedula;
			$this->email = $email;
			$this->contrasenia = $contrasenia;
			$this->fechaNacimiento = $fechaNacimiento;
			$this->genero = $genero;
			$this->ciudad=$ciudad;
			$this->pais=$pais;
		}
		public function registro()
		{
			$modelo = new Usuario($this->nombres,$this->apellidos,$this->username,$this->cedula,$this->email,$this->contrasenia,$this->fechaNacimiento,$this->genero,$this->ciudad,$this->pais);
			$respuesta = $modelo->registro();
			if($respuesta)
			{
				//$_SESSION["usuario"] = $respuesta;
				//echo $_SESSION["usuario"];
				echo "Registrado Exitosamente";
			}
			else
			{
				echo "Se ha presentado un error en el registro";
			}
		}
	}
	$datos = $_REQUEST;
	$Obj=new Registro($datos['nombres'],$datos['apellidos'], $datos['username'], $datos['cedula'], $datos['email'], $datos['contrasenia'], $datos['fechaNacimiento'], $datos['genero'],$datos['ciudad'],$datos['pais'] );
	$Obj->registro();
?>