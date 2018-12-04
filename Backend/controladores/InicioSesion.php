<?php
    include_once("../clases/Usuario.php");

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
            $usuario = new Usuario();
            $usuario->verificarContrasena($this->username, $this->contrasena);
        }

        $datos = $_REQUEST;
        $login = new InicioSesion($datos['username'],$datos['contrasena']);
        $login->iniciarSesion();
    }
?>