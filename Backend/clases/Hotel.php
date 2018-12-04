<?php
    include_once("Conexion.php");
    include_once("Usuario.php");
    class Hotel
    {
        private $nombre;
        private $categoria;
        private $telefono;
        private $localidad;
        private $direccion;
        private $logo;
        private $portada;
        private $descripcion;
        private $fachada;

        private $connect; //Para hacer la conexion con la base de datos.
    
        public function __contruct()
        {
            $this->nombre = "Hotel Paraiso";
            $this->categoria = "../Imagenes/Logo.png";
            $this->telefono = "3229247604";
            $this->localidad = "Colombia";
            $this->direccion = "Vía Ricaurte - Agua de Dios, Km 2";
            $this->logo ="../Imagenes/Logo.png";
            $this->descripcion = array("Le damos la bienvenida al Hotel Paraiso, del grupo Hoteles Verdes.","El Hotel Paraiso es el establecimiento más emblemático y lujoso del país. Distribuidas en 12 plantas, dispone de amplias habitaciones de diferentes categorías: habitaciones estándar, de tipo superior, demi Suite, Suite y La Suite Imperial. Esta última estancia, es la más grande estancia del país.","Le invitamos a disfrutar de nuestras instalaciones: la espectacular Cristalera donde tomar un refrigerio o disfrutar de un libro, el gimnasio dotado con baño de vapor y el Business Center. También de nuestros servicios: en el Restaurante Artagan podrá disfrutar de la gastronomía vasca y en el Bar El Grill de nuestros famosos “pintxos” y variados cocteles.","Reserve a través de nuestra web con las mejores condiciones e indíquenos sus preferencias para personalizar su estancia, ¡estamos encantados de recibirle!");
            $this->fachada = "../Imagenes/Fachada.jpg";
            $this->connect = new Conexion();
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
        public function registro($usuario)
        {
            $Sql="insert into usuarios (genero, username, cedula,  nombre, apellido, password, ciudad, pais, fechanacimiento, email) values 
            ('".$usuario->getGenero()."', '".$usuario->getUsername()."', '".$usuario->getCedula()."', '".$usuario->getNombres()."', '".$usuario->getApellidos()."', '".$usuario->getContrasenia()."', '".$usuario->getCiudad()."', '".$usuario->getPais()."', '".$usuario->getFechaNacimiento()."', '".$usuario->getEmail()."');";
            if(!$this->verificarLlavePrimaria($usuario))
            {
                $info=pg_query($usuario->getConnect()->getRuta(),$Sql);
                return true;
            }
            else {
                return false;
            }
        }
        
        public function verificarLlavePrimaria($usuario)
        {
            $Sql="select cedula from usuarios where cedula = '".$usuario->getCedula()."' ";
            $info=pg_query($usuario->getConnect()->getRuta(),$Sql);
            if($info)
            {
                while($row = pg_fetch_array($info))
                {
                    $id = $row['cedula'];
                    if($id == $usuario->getCedula())
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