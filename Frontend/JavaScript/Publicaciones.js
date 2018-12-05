window.addEventListener("load", consultar, false);

function agregarPublicaciones() {
    $.post("../../Backend/controladores/Publicaciones.php", {}, function (respuesta) {
        var datosUsuario = JSON.parse(respuesta);
        $("#usuario").text(datosUsuario[2]);
        $("#nombre").text(datosUsuario[1]);
        $("#ciudad").text(datosUsuario[4]);
        $("#pais").text(datosUsuario[5]);
    });
}