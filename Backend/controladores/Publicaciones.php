<?php
class Publicaciones
{
    private $url;
    private $titulo;
    private $lugar;
    private $id;
    private $extension;
    private $nombre;
    private $ruta;

    public function __construct($url, $titulo, $lugar)
    {
        $this->url = $url;
        $this->titulo = $titulo;
        $this->lugar = $lugar;
    }
}

?>