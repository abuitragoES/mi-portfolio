<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>..:: Videojuegos Buitrago - Tienda Online ::..</title>

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- CSS Principal -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Librería CSS FontAwesome (Última versión a 15 de noviembre de 2023) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>

<body>

  <?php include('header.php') ; ?> 

  <!-- Aquí empieza el Main -->
  <main class="container-fluid p-0">

    <!-- Aquí empieza el contenedor del carrusel de la portada -->
    <div class="container-fluid ofertas-portada p-0">
      <div id="carouselExampleCaptions" class="carousel slide carouselPortada" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/banners/bannerZelda.webp" class="d-block w-100"
              alt="Banner con la portada del videojuego The Legend of Zelda: Tears of the Kingdom">
            <div class="carousel-caption p-2 bannerOne">
              <h5 class="fs-1">The Legend of Zelda: Tears of the Kingdom</h5>
              <p class="d-none d-md-block">Juego exclusivo de Nintendo Switch y mejor juego de la plataforma</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/banners/bannerBaldursGate.webp" class="d-block w-100 img-fluid"
              alt="Banner con la portada del videojuego Baldur's Gate 3">
            <div class="carousel-caption p-2 bannerTwo">
              <h5 class="fs-1">Baldur's Gate III</h5>
              <p class="d-none d-md-block">Videojuego de rol multiplataforma desarrollado por Larian Studios</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/banners/bannerStarfield.webp" class="d-block w-100 img-fluid"
              alt="Banner con la portada del videojuego Starfield">
            <div class="carousel-caption p-2 bannerThree">
              <h5 class="fs-1">Starfield</h5>
              <p class="d-none d-md-block">Juego exclusivo de Xbox y PC, creado por Bethesda Game Studios</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div> <!-- /.carrusel-portada -->

    <!-- Aquí empieza el contenedor con las promociones de la portada -->
    <div class="container my-5 d-flex justify-content-center sales">
      <a class="black-friday" href="#" target="_self" title=""><img class="img-fluid"
          src="assets/img/banners/blackFriday.webp" alt="Ofertas de Black Friday"></a>
    </div> <!-- /.promociones-portada -->

    <!-- Aquí empieza el contenedor de Juegos más Recientes -->
    <div class="container mt-5">

      <h1 class="text-white">Juegos más recientes</h1>
      <hr>

      <div class="owl-carousel-container">
        <div class="custom-navRecientes d-flex gap-2 justify-content-center justify-content-lg-start">
          <button class="owl-prevRecientes btn btn-primary me-lg-2" type="button"><i
              class="fa-solid fa-chevron-left"></i></button>
          <button class="owl-nextRecientes btn btn-primary" type="button"><i
              class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="owl-carousel owl-carouselRecientes d-flex justify-content-center">
          <!-- Videojuego 1 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaACMirage.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Assassin's Creed Mirage</h5>
                <p class="card-text">PlayStation 5</p>
                <p class="precio">59.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 2 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaf12023.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">F1 2023</h5>
                <p class="card-text">Xbox Series X/S</p>
                <p class="precio">45.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 3 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaAvatar.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Avatar: Frontiers of Pandora</h5>
                <p class="card-text">PlayStation 5</p>
                <p class="precio">59.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 4 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaMarioWonder.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Super Mario Bros. Wonder</h5>
                <p class="card-text">Nintendo Switch</p>
                <p class="precio">59.95 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 5 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaFarCry6.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Far Cry 6</h5>
                <p class="card-text">PlayStation 5</p>
                <p class="precio">62.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 6 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaSonic.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Sonic Superstars</h5>
                <p class="card-text">Nintendo Switch</p>
                <p class="precio">34.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 7 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaStarfield.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Starfield</h5>
                <p class="card-text">Xbox Series X/S</p>
                <p class="precio">54.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 8 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaUncharted.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Uncharted</h5>
                <p class="card-text">PlayStation 5</p>
                <p class="precio">24.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 9 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaDiablo.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Diablo IV</h5>
                <p class="card-text">Xbox Series X/S</p>
                <p class="precio">45.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 10 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaZeldaTotK.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">The Legend of Zelda: TotK</h5>
                <p class="card-text">Nintendo Switch</p>
                <p class="precio">59.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /. juegos-recientes -->

    <!-- Aquí empieza el contenedor de Juegos Recomendados -->
    <div class="container mt-2 mt-lg-5">

      <h1 class="text-white">Juegos Recomendados</h1>
      <hr>

      <div class="owl-carousel-container p-0">
        <div class="custom-navRecomendados d-flex gap-2 justify-content-center justify-content-lg-start">
          <button class="owl-prevRecommended btn btn-primary me-lg-2" type="button"><i
              class="fa-solid fa-chevron-left"></i></button>
          <button class="owl-nextRecommended btn btn-primary" type="button"><i
              class="fa-solid fa-chevron-right"></i></button>
        </div>
        <div class="owl-carousel owl-carouselRecomendados d-flex justify-content-center">
          <!-- Videojuego 1 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaf12023.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">F1 2023</h5>
                <p class="card-text">Xbox Series X/S</p>
                <p class="precio">45.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 2 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaF1manager.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">F1 Manager 2023</h5>
                <p class="card-text">Xbox Series X/S</p>
                <p class="precio">35.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 3 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaFifa24.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">EA Sports FC 24</h5>
                <p class="card-text">Xbox Series X/S</p>
                <p class="precio">59.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 4 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaNBA2k24.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">NBA 2k24</h5>
                <p class="card-text">Xbox Series X/S</p>
                <p class="precio">59.95 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 5 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaNBA2k23.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">NBA 2k23</h5>
                <p class="card-text">PlayStation 4</p>
                <p class="precio">25.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 6 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaZeldaTotK.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">The Legend of Zelda: TotK</h5>
                <p class="card-text">Nintendo Switch</p>
                <p class="precio">59.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 7 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaStarfield.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Starfield</h5>
                <p class="card-text">Xbox Series X/S</p>
                <p class="precio">54.99 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
          <!-- Videojuego 8 del Carrusel -->
          <div class="item">
            <div class="card" style="width: 18rem;">
              <img src="assets/img/videogames/portadaTsubasa.webp" class="card-img-top"
                alt="Portada Assassins Creed Mirage">
              <div class="card-body">
                <h5 class="card-title">Captain Tsubasa: RonC</h5>
                <p class="card-text">PlayStation 4</p>
                <p class="precio">19.95 &#8364;</p>
                <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-cart mb-1" viewBox="0 0 16 16">
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                  </svg> Añadir al carrito</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /. juegos-recomendados -->

    <!-- Aquí empieza el contenedor de los Próximos Lanzamientos -->
    <div class="container mt-2 mt-lg-5">

      <h1 class="text-white">Próximos Lanzamientos</h1>
      <hr>

      <div class="row d-flex justify-content-start proximosLanzamientos">
        <!-- Videojuego 1 del Carrusel -->
        <div class="col item">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/videogames/portadaResortSimulator.webp" class="card-img-top"
              alt="Portada Assassins Creed Mirage">
            <div class="card-body">
              <h5 class="card-title">Hotel Life: Resort Simulator</h5>
              <p class="card-text">PlayStation 5</p>
              <p class="precio">24.99 &#8364;</p>
              <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart mb-1"
                  viewBox="0 0 16 16">
                  <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg> Añadir al carrito</a>
            </div>
          </div>
        </div>
        <!-- Videojuego 2 del Carrusel -->
        <div class="col item">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/videogames/portadaBloodlines2.webp" class="card-img-top"
              alt="Portada Assassins Creed Mirage">
            <div class="card-body">
              <h5 class="card-title">Bloodlines 2</h5>
              <p class="card-text">Xbox Series X/S</p>
              <p class="precio">55.99 &#8364;</p>
              <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart mb-1"
                  viewBox="0 0 16 16">
                  <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg> Añadir al carrito</a>
            </div>
          </div>
        </div>
        <!-- Videojuego 3 del Carrusel -->
        <div class="col item">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/videogames/portadaDragonsDogma2.webp" class="card-img-top"
              alt="Portada Assassins Creed Mirage">
            <div class="card-body">
              <h5 class="card-title">Dragon's Dogma 2</h5>
              <p class="card-text">Xbox Series X/S</p>
              <p class="precio">39.95 &#8364;</p>
              <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart mb-1"
                  viewBox="0 0 16 16">
                  <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg> Añadir al carrito</a>
            </div>
          </div>
        </div>
        <!-- Videojuego 4 del Carrusel -->
        <div class="col item">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/videogames/portadaTekken8.webp" class="card-img-top"
              alt="Portada Assassins Creed Mirage">
            <div class="card-body">
              <h5 class="card-title">Tekken 8</h5>
              <p class="card-text">PlayStation 5</p>
              <p class="precio">59.95 &#8364;</p>
              <a href="#" class="btn btn-primary btn-sm d-flex align-items-center gap-1"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart mb-1"
                  viewBox="0 0 16 16">
                  <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg> Añadir al carrito</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /. juegos-próximos-lanzamientos -->


  </main> <!-- /.main -->

  <?php include('footer.php') ; ?> 

  <!-- Vinculación de los JS -->
  <script src="js/scripts.js"></script>

  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>