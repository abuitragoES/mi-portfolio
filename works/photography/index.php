<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Página web creada por mi para mostrar en mi Portfolio.">
    <meta name="keywords" content="Photography, Antonio, Buitrago, HTML5, CSS, Javascript, Bootstrap, Web, Proyectos" />
    <meta name="author" content="Antonio Buitrago">
    <meta name="robots" content="index" />

    <!-- Titulo de la Web -->
    <title>..:: Antonio Buitrago &bull; PHOTOGRAPHY ::..</title>

    <!-- Favicon para cualquier navegador -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" sizes="32x32">
    <!-- Favicon para los modelos más recientes de iPad y iPhone -->
    <link rel="apple-touch-icon-precomposed" href="img/favicon.ico" type="image/png" sizes="152x152">
    <link rel="apple-touch-icon-precomposed" href="img/favicon.ico" type="image/png" sizes="120x120">

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- CSS Página principal -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- CSS de las animaciones -->
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- Librerias FontAwesome,jQuery y SweetAlert (Última versión a 2 de noviembre de 2023) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@latest/dist/sweetalert2.all.min.js"></script>
    
    <!-- CSS del Lightbox -->
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="css/lightbox.min.css">

</head>

<body id="home">

    <div class="toogle-button"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></div>

    <div class="container-fluid page-container d-flex justify-content-between">

        <!-- =========== ASIDE =========== -->
        <aside class="container d-flex flex-column">

            <div class="row">
                <div class="col logo">
                    <a href="index.php" target="_self" title="Enlace a la página de portada"><img src="img/logo.webp" alt="Imagen del autor de la web"></a>
                    <h2 class="mt-3 mb-3">ANTONIO BUITRAGO</h2>
                </div>
            </div>

            <div class="row">
                <div class="col nav d-flex flex-column justify-content-center align-items-center gap-3">
                    <a href="#home">Inicio</a>
                    <a href="#about">¿Quién soy?</a>
                    <a href="#gallery">Galería</a>
                    <a href="#contact">Contactar</a>
                </div>
            </div>

            <div class="row">
                <div class="col social d-flex justify-content-center align-items-center gap-4">
                    <a href="https://www.facebook.com/" title="Ir a mi Facebook personal" target="_blank"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/" title="Ir a mi Instagram personal" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.pinterest.es/" title="Ir a mi Pinterest personal" target="_blank"><i
                            class="fa-brands fa-pinterest-p"></i></a>
                    <a href="https://es.linkedin.com/" title="Ir a mi Linkedin personal" target="_blank"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <span class="newsletter-label">Newsletter</span>
            <div class="input-group newsletter d-flex justify-content-center align-items-center">
                    
                <input type="email" class="form-control" id="newsletter" name="newsletter" placeholder="Tu correo electrónico..." aria-label="newsletter" aria-describedby="button-addon2" onfocus="this.placeholder=''" onblur="this.placeholder='Tu correo electrónico...'">
                <button class="btn btn-secondary" type="button" id="button-addon2">Suscribir</button>   
                        
            </div>  

        </aside> <!-- Fin del ASIDE -->

        <!-- =========== MAIN =========== -->
        <main class="d-flex flex-column justify-content-center align-items-center">

            <!-- =========== HOME =========== -->
            <div class="container home">

                <div class="row home-intro">

                    <div class="col">

                        <p id="saludo"></p>
                        <h2>ANTONIO BUITRAGO</h2>
                        <p class="mt-5 mb-5">Soy un fotógrafo aficionado establecido en Madrid, creando paisajes de
                            ensueño
                            con blanco, negro y tonos intermedios.</p>

                        <a class="botonPortfolio" href="#gallery" title="Enlace que lleva a la sección Galería.">Mis Trabajos</a>
                        <a class="botonContactar" href="#contact" title="Enlace que lleva a la sección de Contacto.">Contáctame</a>

                    </div>

                </div>

            </div> <!-- Fin del HOME -->

            <!-- =========== ABOUT =========== -->
            <div id="about" class="container about">

                <div class="row d-flex p-5 h-100 about-mobile">

                    <div class="col about-text">

                        <h1>¿Quién soy?</h1>

                        <hr>

                        <p>Soy un fotógrafo aficionado establecido en Madrid, creando paisajes de ensueño con blanco,
                            negro y tonos intermedios.</p>

                        <p class="about-contain">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus
                            totam excepturi in a. Quaerat accusantium fuga rem dignissimos fugit delectus. Earum,
                            aperiam! Commodi quibusdam veritatis inventore nam qui expedita quidem odio illum.
                            Reprehenderit eos quibusdam dignissimos quasi amet quas quisquam?</p>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aperiam libero unde odit
                            laborum, eum dolor maiores sunt magnam velit vitae fugit, tenetur culpa earum dolore
                            exercitationem saepe. Odio, debitis?</p>

                        <p class="d-flex justify-content-start align-items-center gap-3 mt-5"><i
                                class="fa-solid fa-circle-check" style="color: #7f7a7a;"></i><span>Más de 10 años de
                                experiencia</span></p>
                        <p class="d-flex justify-content-start align-items-center gap-3"><i
                                class="fa-solid fa-circle-check" style="color: #7f7a7a;"></i><span>100+ Proyectos
                                realizados satisfactoriamente</span></p>
                        <p class="d-flex justify-content-start align-items-center gap-3"><i
                                class="fa-solid fa-circle-check" style="color: #7f7a7a;"></i><span>Calidad excepcional
                                en el trabajo</span></p>

                        <hr class="mt-5">

                        <div class="row d-flex">

                            <div class="col">
                                <img src="img/firma.png" alt="Dibujo de la firma del autor">
                            </div>
                            <div class="col">
                                <p><span class="firma-autor">Antonio Buitrago</span><br><span
                                        class="firma-founder">Creador de Photography</span></p>
                            </div>

                        </div>

                    </div>

                    <div class="col about-image d-flex justify-content-center align-items-end">

                        <img src="img/about-img.webp" alt="Imagen de una chica sacando una foto.">

                    </div>


                </div>

            </div> <!-- Fin del ABOUT -->

            <!-- =========== GALLERY =========== -->
            <div id="gallery" class="container gallery">

                <div class="row p-5">

                    <div class="col gallery-container">

                        <h1>Galería</h1>

                        <hr>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, vel debitis. Doloremque
                            nostrum harum repudiandae?</p>

                        <div class="images-container gap-0">

                            <a href="img/image_1.jpg" data-lightbox="roadtrip" data-title="Chico jóven con un abrigo.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_1.jpg" alt="Imagen 1">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_2.jpg" data-lightbox="roadtrip" data-title="Chica sentada en el suelo.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_2.jpg" alt="Imagen 2">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_3.jpg" data-lightbox="roadtrip" data-title="Chica con cazadora vaquera posando.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_3.jpg" alt="Imagen 3">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_4.jpg" data-lightbox="roadtrip" data-title="Chica posando junto a un coche viejo.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_4.jpg" alt="Imagen 4">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_5.jpg" data-lightbox="roadtrip" data-title="Varias personas vestidas de blanco.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_5.jpg" alt="Imagen 5">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_6.jpg" data-lightbox="roadtrip" data-title="Chica con una sudadera amarilla.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_6.jpg" alt="Imagen 6">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_7.jpg" data-lightbox="roadtrip" data-title="Chica con un sombrero de paja.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_7.jpg" alt="Imagen 7">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_8.jpg" data-lightbox="roadtrip" data-title="Chica en una colina sentada en una piedra.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_8.jpg" alt="Imagen 8">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_9.jpg" data-lightbox="roadtrip" data-title="Primer plano de una chica de ojos azules.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_9.jpg" alt="Imagen 9">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_10.jpg" data-lightbox="roadtrip" data-title="Chica posando con un vestido morado.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_10.jpg" alt="Imagen 10">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_11.jpg" data-lightbox="roadtrip" data-title="Chica sentada en una silla.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_11.jpg" alt="Imagen 11">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="img/image_12.jpg" data-lightbox="roadtrip" data-title="Chica rubia con un piercing en la nariz.">
                                <div class="image-container">
                                    <img class="image-fluid" src="img/image_12.jpg" alt="Imagen 12">
                                    <div class="overlay">
                                        <div class="overlay-lupa">
                                            <i class="fa-solid fa-magnifying-glass-plus" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>

                </div>

            </div> <!-- Fin del GALLERY -->

            <!-- =========== CONTACT =========== -->
            <div id="contact" class="container contact">

                <div class="row d-flex p-5 h-100">

                    <div class="col">

                        <h1>Contactar</h1>

                        <hr>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, vel debitis.
                            Doloremque
                            nostrum harum repudiandae?</p>

                        <h5>Información</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe non reprehenderit sunt
                            eaque
                            illum fuga quidem quae dicta commodi accusamus.</p>

                        <div class="contact-info d-flex justify-content-center align-items-center gap-3 mt-5">
                            <div class="contact-icon d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span class="info-uno">Llámame</span><br><span class="info-dos">+34 669 50 50
                                        50</span></p>
                            </div>
                        </div>

                        <div class="contact-info d-flex justify-content-center align-items-center gap-3 mt-5">
                            <div class="contact-icon d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-envelope" style="color: #ffffff;"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span class="info-uno">Envíame un email</span><br><span
                                        class="info-dos">info@photography.com</span></p>
                            </div>
                        </div>

                        <div class="contact-info d-flex justify-content-center align-items-center gap-3 mt-5">
                            <div class="contact-icon d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span class="info-uno">Visítame en mi oficina</span><br><span class="info-dos">Paseo
                                        de la Castellana 123</span></p>
                            </div>
                        </div>

                    </div>

                    <div class="col d-flex justify-content-center align-items-center">

                        <div class="form-container">

                            <h2 class="mb-5">Ponte en contacto</h2>

                            <form action="procesar_formulario.php" method="post">
                                <input id="nombre" name="nombre" type="text" placeholder="Tu nombre *"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Tu nombre *'" required>
                                <input id="email" name="email" type="email" placeholder="Tu correo *"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Tu correo *'" required>
                                <input id="asunto" name="asunto" type="text" placeholder="Asunto *"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Asunto *'" required>
                                <textarea id="mensaje" name="mensaje" placeholder="Mensaje *"
                                    onfocus="this.placeholder=''" onblur="this.placeholder='Mensaje *'" required></textarea>
                                <button type="submit">Enviar</button>
                            </form>

                        </div>

                    </div>

                </div>

            </div> <!-- Fin del CONTACT -->

            <!-- =========== CONTACT =========== -->
            <footer class="container-fluid d-flex justify-content-center align-items-center">

                <p>&copy; 2024 - Web realizada por Antonio Buitrago. Todos los derechos reservados.</p>

            </footer> <!-- Fin del FOOTER -->

        </main>

    </div> <!-- Fin del MAIN -->

    <!-- Script para el saludo de la pantalla de portada -->
    <script>
        // Obtiene la hora actual del sistema
        var hora = new Date().getHours();

        // Obtén el elemento <p> donde mostrar el saludo
        var saludoElement = document.getElementById("saludo");

        // Define el saludo según la hora
        var saludo;
        if (hora >= 5 && hora < 12) {
            saludo = "Buenos días !";
        } else if (hora >= 12 && hora < 18) {
            saludo = "Buenas tardes !";
        } else {
            saludo = "Buenas noches !";
        }

        // Actualiza el contenido del elemento <p> con el saludo
        saludoElement.textContent = saludo;
    </script>

    <!-- Muestra el Sweet alert si el formulario se ha enviado correctamente -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener los parámetros de la URL
            const urlParams = new URLSearchParams(window.location.search);

            // Verificar si la variable "success" tiene el valor "true"
            if (urlParams.get("success") === "true") {
                // Mostrar el SweetAlert al cargar la página
                Swal.fire({
                    title: 'Enhorabuena!',
                    text: 'El formulario ha sido enviado correctamente.',
                    icon: 'success',
                    confirmButtonText: "Accept",
                    confirmButtonColor: "#21364b",
                }).then(function() {
                    // Redirigir a index.php después de hacer clic en "Aceptar"
                    window.location.href = "index.php";
                });
            }
        });
    </script>

    <!-- Vinculación de Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>

</body>

</html>