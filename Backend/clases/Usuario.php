<?php
include_once("Conexion.php");
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

    public function registro()
    {
        $Sql="insert into usuarios (genero, username, cedula,  nombre, apellido, password, ciudad, pais, fechanacimiento, email) values 
        ('".$this->genero."', '".$this->username."', '".$this->cedula."', '".$this->nombres."', '".$this->apellidos."', '".$this->contrasenia."', '".$this->ciudad."', '".$this->pais."', '".$this->fechaNacimiento."', '".$this->email."');";
        if(!$this->verificarLlavePrimaria())
        {
            $info=pg_query($this->connect->getRuta(),$Sql);
            return true;
        }
        else {
            return false;
        }
    }
    
    public function verificarLlavePrimaria()
    {
        $Sql="select cedula from usuarios where cedula = '".$this->cedula."' ";
        $info=pg_query($this->connect->getRuta(),$Sql);
        if($info)
        {
            while($row = pg_fetch_array($info))
            {
                $id = $row['cedula'];
                if($id==$this->cedula)
                {
                    return true;
                }
                else{
                    return false;
                }
            }
        }
    }

    public function verificarContrasena($nombreUsuario, $contrasenaRecibida)
    {
        $Sql="select * from usuarios where username = '".$nombreUsuario."' ";
        $info=pg_query($this->connect->getRuta(),$Sql);
        if(!$info)
            return json_encode("Error");
        else
        {
            while ($row = pg_fetch_array($info)) 
            {
                $contrasenaReal = $row['password'];
                if($contrasenaReal == $contrasenaRecibida)
                {
                    session_start();
                    $_SESSION["usuarios"]["nombre"] = $row["nombre"];
                    $_SESSION["usuarios"]["cedula"]= $row["cedula"];
                    $_SESSION["usuarios"]["email"] = $row["email"];
                    $_SESSION["usuarios"]["creado"] = true;
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
    }
}
?>