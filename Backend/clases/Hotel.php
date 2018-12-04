<?php
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