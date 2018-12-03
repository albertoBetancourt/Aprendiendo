<?php
	include_once("../Models/Usuario.php");
	class Registro
	{
		private $id;
		private $nombre;
		private $apellido;
		private $nickname;
		private $email;
		private $genero;
		private $fechaNacimiento;
		private $usuario;
		private $contrasena;
		
		public function __construct($usrID, $usrNombre, $usrApellido, $usrNickName, $usrEmail, $usrGenero, $usrFechaNacimiento, $usrContrasena)
		{
			$this->id = $usrID;
			$this->nombre = $usrNombre;
			$this->apellido = $usrApellido;
			$this->nickname = $usrNickName;
			$this->email = $usrEmail;
			$this->genero = $usrGenero;
			$this->fechaNacimiento = $usrFechaNacimiento;
			$this->contrasena = $usrContrasena;
		}
		public function registro()
		{
			$modelo = new Usuario();
			$modelo->setUsrID($this->id);
			$modelo->setUsrNombre($this->nombre);
			$modelo->setUsrApellido($this->apellido);
			$modelo->setUsrNickName($this->nickname);
			$modelo->setUsrEmail($this->email);
			$modelo->setUsrGenero($this->genero);
			$modelo->setUsrFechaNacimiento($this->fechaNacimiento);
			$modelo->setUsrContrasena($this->contrasena);
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
	$Obj=new Registro($datos['id'],$datos['nombre'], $datos['apellido'], $datos['nickname'], $datos['email'], $datos['genero'], $datos['fechaNacimiento'], $datos['pass'] );
	$Obj->registro();
?>