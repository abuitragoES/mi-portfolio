// Función que muestra el formulario del buscador al pulsar en el icono de la lupa.
function mostrarBuscador() {
    let buscador = document.getElementById("buscador");
    let lupa = document.getElementById("lupa");

    if (buscador.classList.contains("d-lg-none")) {
        buscador.classList.remove("d-lg-none");
        lupa.classList.remove("fa-magnifying-glass");
        lupa.classList.add("fa-xmark");
    } else {
        buscador.classList.add("d-lg-none");
        lupa.classList.remove("fa-xmark");
        lupa.classList.add("fa-magnifying-glass");
        lupa.classList.remove("d-none");
    }
}

// Función que quita el formulario del buscador si está visible al reducir el ancho de pantalla por debajo de 1400px y vuelve a mostrar la lupa.
window.addEventListener('resize', function () {
    // Aquí puedes realizar acciones cuando se redimensiona la pantalla
    ajustarElementos();
});

function ajustarElementos() {

    let windowWidth = window.innerWidth;

    if (windowWidth < 1400) {
        buscador.classList.add("d-lg-none");
        lupa.classList.remove("fa-xmark");
        lupa.classList.add("fa-magnifying-glass");
    }
}

// Owl-Carrousel de los juegos más recientes.
$(document).ready(function () {
    let owl1 = $(".owl-carouselRecientes");
    owl1.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 4
            },
            1400: {
                items: 4              
            }
        },
        responsiveBaseElement: '.owl-carouselRecientes' // Elemento base para la configuración responsive
    });

    // Evento de clic para el botón de siguiente
    $(".owl-nextRecientes").click(function () {
        owl1.trigger("next.owl.carousel");
    });

    // Evento de clic para el botón de anterior
    $(".owl-prevRecientes").click(function () {
        owl1.trigger("prev.owl.carousel");
    });
});

// Owl-Carrousel de los juegos recomendados.
$(document).ready(function () {
    let owl2 = $(".owl-carouselRecomendados");
    owl2.owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            },
            1400: {
                items: 4
            }
        }
    });

    // Evento de clic para el botón de siguiente
    $(".owl-nextRecommended").click(function () {
        owl2.trigger("next.owl.carousel");
    });

    // Evento de clic para el botón de anterior
    $(".owl-prevRecommended").click(function () {
        owl2.trigger("prev.owl.carousel");
    });
});

