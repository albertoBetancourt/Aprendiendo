<?php
class Habitacion
{
    private $hbtID;
    private $hbtcapacidad;
    private $hbtDisponible;
    private $hbtCategoria;
    
    public function construct($hbtDisponible)
    {
        $this->hbtDisponible = $hbtDisponible;
    }
}
?>