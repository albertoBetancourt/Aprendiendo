<?php
    session_start();
    $varsession= $_SESSION['usuarios']['nombre'];
    
    if($varsession == null || $varsession = '')
    {
        echo 'inicia sesión primero';
        die();
    }

?>