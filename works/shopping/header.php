<!-- Aquí empieza el header -->
<header class="container-fluid p-0 fixed-top">

    <!-- Aquí empieza el contenedor de la barra del logo, buscador, login y carrito -->
    <div class="container">
        <div class="row topRow px-1">
        <!-- Div del Logo -->
        <div class="col-2 col-lg-4 d-flex justify-content-start align-items-center gap-3 logo">
            <a href="index.php" target="_self"><img class="mb-1" src="assets/img/logo.webp" alt="Imagen del Logo"></a><a
            class="d-none d-lg-block" href="index.php" target="_self">Buitrago</a>
        </div>
        <!-- Div del Login y Carrito -->
        <div class="col-10 col-lg-8 d-flex justify-content-end align-items-center text-white gap-2 gap-lg-3 carrito">
            <a href="login.php" target="_self">Login</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
            <a href="register.php" target="_self">Registrarse</a>
            <button type="button"
            class="btn btn-outline-light position-relative d-flex justify-content-center align-items-center gap-2 ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-cart mt-2 mt-lg-0" viewBox="0 0 16 16">
                <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <span class="d-none d-lg-block">Carrito</span>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0
                <span class="visually-hidden">Items en el carrito</span>
            </span>
            </button>
        </div>
        </div>
    </div> <!-- /.container -->

    <!-- Aquí empieza el contenedor del Menú de navegación -->
    <div class="container-fluid p-0 menuRow">
        <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-start justify-content-lg-center align-items-center">
            <nav class="navbar navbar-expand-lg text-white">
                <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex gap-5" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promociones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Juegos PC</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Juegos Xbox
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Xbox Series X</a></li>
                        <li><a class="dropdown-item" href="#">Xbox One</a></li>
                        <li><a class="dropdown-item" href="#">Xbox 360</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Juegos PlayStation
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">PlayStation 1</a></li>
                        <li><a class="dropdown-item" href="#">PlayStation 2</a></li>
                        <li><a class="dropdown-item" href="#">PlayStation 3</a></li>
                        <li><a class="dropdown-item" href="#">PlayStation 4</a></li>
                        <li><a class="dropdown-item" href="#">PlayStation 5</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Juegos Nintendo Switch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accesorios</a>
                    </li>
                    </ul>
                    <form id="buscador" class="d-flex d-lg-none" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                    <i id="lupa" class="fa-solid fa-magnifying-glass d-none d-lg-block" onclick="mostrarBuscador()"></i>
                </div>
                </div>
            </nav>
            </div>
        </div>
        </div>
    </div> <!-- /.container -->

</header> <!-- /.header -->