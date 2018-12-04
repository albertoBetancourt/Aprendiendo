<?php

class Usuario
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
    private $fotoPerfil;

    private $connect; //Para hacer la conexion con la base de datos
 	   
    
    public function __construct($nombresU, $apellidosU, $usernameU, $cedulaU, $emailU, $contraseniaU, $fechaNacimientoU, $generoU, $ciudadU, $paisU)
    {
        $this->nombres = $nombresU;
        $this->apellidos = $apellidosU;
        $this->username = $usernameU;
        $this->cedula = $cedulaU;
        $this->email = $emailU;
        $this->contrasenia = $contraseniaU;
        $this->fechaNacimiento = $fechaNacimientoU;
        $this->genero = $generoU;
        $this->ciudad = $ciudadU;
        $this->pais = $paisU;
        $this->connect = new Conexion(); 
    }


    public function getNombres()
    {
        return $this->nombres;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getContrasenia()
    {
        return $this->contrasenia;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
    
    public function getGenero()
    {
        return $this->genero;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function getConnect()
    {
        return $this->connect;
    }
}
?>