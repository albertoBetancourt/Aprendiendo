<?php
    session_start();
    $varsession= $_SESSION['usuarios'];

    if($varsession == null || $varsession = '')
    {
        echo 'inicia sesión primero';
        die();
    }
    
?>