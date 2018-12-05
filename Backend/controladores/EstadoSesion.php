<?php
    session_start();
    $varsession= $_SESSION['usuario'];

    if($varsession == null || $varsession = '' || $varsession==false)
    {
        echo 'inicia sesion primero';
        die();
    }
    else{
        location("../HTML/Comunidad.html");
    }

?>