<?php
    include_once("../clases/Hotel.php");

    class InicioSesion
    {
        private $username;
        private $contrasena;

        public function __construct($usuarioR, $contrasenaR)
		{
			$this->username = $usuarioR;
			$this->contrasena = $contrasenaR;
        }
        
        public function iniciarSesion()
        {
            $hotel = new Hotel();
            $respuesta = $hotel->validarUsuario($this->username, $this->contrasena);
            if($respuesta)
			{
				echo $_SESSION["usuarios"]["nombre"];
			}
			else
			{
				echo "Usuario o contraseña incorrecta";
			}
        }
    }

    $datos = $_REQUEST;
    $login = new InicioSesion($datos['username'],$datos['contrasena']);
    $login->iniciarSesion();
?>