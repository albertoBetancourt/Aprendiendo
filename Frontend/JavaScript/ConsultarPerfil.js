function consultar() {
    reserva = document.getElementById("perfil").value;
    $.post("../../Backend/controladores/ConsultaPerfil.php", {}, function (respuesta) {
        var datasUsuario = eval(respuesta);
        $("#a").text(datasUsuario[0]);
        $("#b").text(datasUsuario[1]);
        $("#c").text(datasUsuario[2]);
        $("#d").text(datasUsuario[3]);
        $("#e").text(datasUsuario[4]);
        $("#f").text(datasUsuario[5]);
        $("#g").text(datasUsuario[6]);
        $("#h").text(datasUsuario[7]);
        $("#i").text(datasUsuario[8]);
        alert("El servidor dice: " + respuesta);
    });
}