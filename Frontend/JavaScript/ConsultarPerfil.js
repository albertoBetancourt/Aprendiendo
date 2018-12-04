function consultar() {
    reserva = document.getElementById("reservas").value;
    $.post("../../backend/controllers/ConsultaPerfil.php", {}, function (respuesta) {
        var data = eval(respuesta);
        $("#n").text(datasUsuario[0]);
        $("#c").text(datasUsuario[1]);
        $("#e").text(datasUsuario[2]);
        $("#f").text(datasUsuario[3]);
        $("#f").text(datasUsuario[4]);
        $("#f").text(datasUsuario[5]);
        $("#f").text(datasUsuario[6]);
        $("#f").text(datasUsuario[7]);
        $("#f").text(datasUsuario[8]);

    });
}