<?php
include_once(Conexion);
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
    }

    public function registro()
    {
        $Sql="insert into usuarios (genero, userName, cedula,  nombre, apellido, password, ciudad, pais, fechaNacimiento, email) values 
        ('".$this->getUsrID()."','".$this->getUsrNombre()."','".$this->getUsrApellido()."', '".$this->getUsrNickName()."', '".$this->getUsrEmail()."','".$this->getUsrGenero()."','".$this->getUsrFechaNacimiento()."', '".$this->getUsrContrasena()."');";
        if(!$this->verificarLlavePrimaria())
        {
            $info=pg_query($this->conect->getRuta(),$Sql);
            return true;
        }
        else {
            return false;
        }
    }
    
    public function verificarLlavePrimaria()
    {
        $Sql="select usr_id from usuario where usr_id = '".$this->getUsrID()."' ";
        $info=pg_query($this->conect->getRuta(),$Sql);
        if($info)
        {
            while($row = pg_fetch_array($info))
            {
                $id = $row['usr_id'];
                if($id==$this->getUsrID())
                {
                    return true;
                }
                else{
                    return false;
                }
            }
        }
    }
}
?>