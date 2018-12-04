<?php
    class Publicacion
	{
		private $id;
		private $nombre;
        private $ruta;
        private $descripcion;

        public function __construct($nombreR, $rutaR, $descripcionR)
        {
            $this->nombre = $nombreR;
            $this->ruta = $rutaR;
            $this->descripcion = $descripcionR;
        }
    }

  
?>