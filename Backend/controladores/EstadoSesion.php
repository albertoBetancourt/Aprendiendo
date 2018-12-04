<?php
    session_start();
    $varsession= $_SESSION['usuarios']['creado'];

    if($varsession == null || $varsession = '' || $varsession=false)
    {
        echo 'inicia sesion primero';
        die();
    }

?>