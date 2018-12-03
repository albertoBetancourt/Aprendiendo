<?php
class Usuario
{
    var $id;
    var $nombre;
    var $contraseña;
    var $sexo;
    var $direccionEmail;
    var $fechaNacimiento;
    var $ciudad;
    var $pais;
    var $foto;
    var $albumes = array();
    var $reservas = array();
    
    
    public function __construct()
    {

    }
}
?>