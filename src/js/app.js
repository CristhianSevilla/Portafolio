document.addEventListener('DOMContentLoaded', function() {
    eventListener();
    onscroll();
});

function eventListener() {
    const mobileMenu = document.querySelector('.mobile-menu');
    const navegacion = document.querySelector('.navegacion');


    mobileMenu.addEventListener('click', navegaciónResponsive);
    navegacion.addEventListener('click', navegaciónResponsive);


}


function navegaciónResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');

}

// Detectamos cuando el usuario desplace la pantalla
window.onscroll = function() {
    // Obtenemos la posicion del scroll en pantalla
    var scroll = document.documentElement.scrollTop || document.body.scrollTop;

    const menu = document.querySelector('.menu');

    // Realizamos alguna accion cuando el scroll este entre la posicion 300 y 400
    if (scroll > 1) {
        menu.classList.remove('ocultar-menu');
    } else {
        menu.classList.add('ocultar-menu');
    }
}