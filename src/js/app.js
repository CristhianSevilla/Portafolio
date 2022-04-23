document.addEventListener('DOMContentLoaded', function() {
    onscroll();
});

// Detectamos cuando el usuario desplace la pantalla
window.onscroll = function() {
    // Obtenemos la posicion del scroll en pantalla
    let scroll = document.documentElement.scrollTop || document.body.scrollTop;

    const menu = document.querySelector('.menu');

    // Realizamos alguna accion cuando el scroll este entre la posicion 300 y 400
    if (scroll > 1) {
        menu.classList.remove('ocultar-menu');
    } else {
        menu.classList.add('ocultar-menu');
    }
}

let enlaces = document.getElementById('enlaces');
const mobileMenu = document.querySelector('.mobile-menu');
let contador = 0;
let body = document.getElementById('body');

mobileMenu.addEventListener('click', function(e) {
    e.preventDefault();
    if (contador == 0) {
        enlaces.className = ('navegacion dos');
        contador = 1;
    } else {
        enlaces.classList.remove('dos');
        enlaces.className = ('navegacion uno');
        contador = 0;
    }
});

window.addEventListener('scroll', function() {
    //esconder menu
    if (body.getBoundingClientRect().top < 0) {
        enlaces.classList.remove('dos');
        enlaces.className = ('navegacion uno');
        contador = 0;
    }
})