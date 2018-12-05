
window.addEventListener("load", load, false);

function load()
{
    cambiarPaddingBody();
    window.addEventListener("resize", cambiarPaddingBody, false);
    var botonMenu = document.getElementById("botonMenu");
    var menuDinamico = document.getElementById("menuDinamico");
    var imagenDinamica = document.getElementById("imagenDinamica");
    botonMenu.addEventListener("click", visualizarMenu, false);
}

function cambiarPaddingBody ()
{
    var header = document.getElementById("header");
    var cuerpo = document.getElementById("body");
    cuerpo.style.paddingTop = (header.clientHeight-1)+"px";
}

function visualizarMenu ()
{
    menuDinamico.classList.toggle("d-none"); 
    imagenDinamica.classList.toggle("d-none");
}