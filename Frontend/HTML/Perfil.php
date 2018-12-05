<?php
	session_start();
	echo $_SESSION['nombre'];
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../Includes/jQuery/jquery-3.3.1.js"></script>
    <script type="text/javascript" language="javascript1.5" src="../JavaScript/ConsultarPerfil.js"></script>
    <title>Document</title>
</head>
<body>
    <a href= "ConsultarPerfil()">ingrese</a>
    <table>
        <table class="infoTabla" id="perfil">
            <tr>
                <td>Username:</td>
                <td id="a"></td>
            </tr>
            <tr>
                <td>Nombre completo:</td>
                <td id="b"></td>
            </tr>
            <tr>
                <td>Cedula:</td>
                <td id="c"></td>
            </tr>
            <tr>
                <td>Fecha de Nacimiento:</td>
                <td id="d"></td>
            </tr>
            <tr>
                <td>Ciudad:</td>
                <td id="e"></td>
            </tr>
            <tr>
                <td>FPais:</td>
                <td id="f"></td>
            </tr>
        </table>
    </table>
</body>
</html>