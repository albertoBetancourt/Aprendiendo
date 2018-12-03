<?php
include_once(Conexion);
class Usuario
{
    private $userId;
    private $userNombre;
    private $userNickname;
    private $userContraseña;
    private $userSexo;
    private $userDireccionEmail;
    private $userFechaNacimiento;
    private $userCiudad;
    private $userPais;
    private $userFoto;
    private $userAlbumes = array();
    private $userReservas = array();
    
    
    public function __construct($userId,$userNombre,$userNickname,$userContraseña,$userSexo,$userDireccionEmail,$userFechaNacimiento,$ciudad,$pais)
    {
        $this->userId = $userId;
        $this->userNombre = $userNombre;
        $this->userNickname = $userNickname;
        $this->userContraseña = $userContraseña;
        $this->userSexo = $userSexo;
        $this->userDireccionEmail = $userDireccionEmail;
        $this->userFechaNacimiento = $userFechaNacimiento;  
    }

    public function registro()
    {
        $Sql="insert into usuario (usr_id, usr_nombre, usr_apellido, usr_nickname, usr_email, usr_genero, usr_fechanacimiento, usr_contrasena) values 
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