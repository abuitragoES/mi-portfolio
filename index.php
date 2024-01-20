<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description"
        content="Portfolio personal de Antonio Buitrago donde muestro los proyectos realizados y mi CV.">
    <meta name="keywords" content="Porfolio, Antonio, Buitrago, HTML5, CSS, Javascript, Bootstrap, Web, Proyectos" />
    <meta name="author" content="Antonio Buitrago">
    <meta name="robots" content="index" />

    <!-- Titulo de la Web -->
    <title>..:: Antonio Buitrago &bull; Personal Portfolio - HOME ::..</title>

    <!-- Favicon para cualquier navegador -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" sizes="32x32">
    <!-- Favicon para los modelos más recientes de iPad y iPhone -->
    <link rel="apple-touch-icon-precomposed" href="img/favicon.ico" type="image/png" sizes="152x152">
    <link rel="apple-touch-icon-precomposed" href="img/favicon.ico" type="image/png" sizes="120x120">

    <!-- CSS de la Fuentes -->
    <link rel="stylesheet" href="css/fonts.css">
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- CSS de los elementos principales -->
    <link rel="stylesheet" href="css/base.css">
    <!-- CSS principal -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- CSS de las animaciones -->
    <link rel="stylesheet" href="css/animations.css">

    <!-- Librería CSS FontAwesome (Última versión a 15 de noviembre de 2023) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body id="inicio">

    <!-- Aquí empieza el Header -->
    <header class="container-fluid fixed-top bg-black p-0">
        <div class="container d-block">
            <div class="row top-bar">
                <div class="col">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid d-flex align-items-center p-0">
                            <a class="navbar-brand" href="index.php" target="_self"
                                title="Ir la página de portada">Antonio<span class="apellido">Buitrago</span></a>
                            <i class="fa-solid fa-bars navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation"></i>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav d-flex align-items-center gap-4 gap-lg-5 py-3">
                                    <li id="aboutNav" class="nav-item"><a href="#acercade"
                                            title="Enlace que va a la sección Acerca de">¿Quién soy?</a></li>
                                    <li id="resumeNav" class="nav-item"><a href="#cv"
                                            title="Enlace que va a la sección del Currículum">Currículum Vitae</a></li>
                                    <li id="portfolioNav" class="nav-item"><a href="#trabajos"
                                            title="Enlace que va a la sección de Mis Trabajos">Trabajos</a></li>
                                    <li class="nav-item"><a href="#contactar"
                                            title="Enlace que va a la sección de Contacto">Contactar</a></li>
                                            <li id="contactNav" class="nav-item"><a id="languageToggle" href="#"
                                            title="Enlace que va al portfolio en inglés">ENG</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </header> <!-- /.Header -->

    <!-- Aquí empieza el Main -->
    <main class="container-fluid intro p-0">

        <!-- Aquí empieza la sección de la página de portada -->
        <section id="portada" class="container-fluid intro p-0 m-0">

            <div class="container portada-container">
                <div class="row d-flex flex-column justify-content-evenly align-items-center">
                    <div class="col-lg-12">
                        <h1 id="titulo">Antonio Buitrago</h1>
                        <p id="subtitulo" class="h5">Desarrollador&nbsp;&nbsp;Front-end&nbsp;&nbsp;|&nbsp;&nbsp;Back-end</p>
                    </div>
                    <div class="col-lg-12 getStarted d-flex justify-content-center align-items-center">
                        <a class="custom-button d-flex justify-content-center align-items-center" href="#acercade"
                            title="Enlace que te lleva a la sección Acerca de Mí"><span id="empezar">Empezar</span>&nbsp;&nbsp;<i
                                class="fa-solid fa-computer-mouse"></i></a>
                    </div>
                    <div class="col-lg-12">
                        <ul class="d-flex justify-content-center align-items-center gap-3 gap-lg-5 p-0 m-0">
                            <li><a href="https://www.linkedin.com/in/antonio-buitrago-garcia/" target="_blank"
                                    title="Enlace para ir a mi página de Linkedin"><i
                                        class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="https://twitter.com/abuitragoIT" target="_blank"
                                    title="Enlace para ir a mi página de Twitter/X"><i
                                        class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="https://github.com/abuitragoES" target="_blank" title="Enlace para ir a mi página de GitHub"><i class="fa-brands fa-github"></i></a></li>
                            <li><a href="https://www.behance.net/antoniobg1" target="_blank"
                                    title="Enlace para ir a mi página de Behance"><i
                                        class="fa-brands fa-behance"></i></a></li>
                            <li><a href="mailto:abuitrago@educa.madrid.org" target="_blank"
                                    title="Enlace para mandarme un correo electrónico"><i
                                        class="fa-solid fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </section> <!-- /.section-portada -->

        <!-- Aquí empieza la sección About -->
        <section id="acercade" class="container-fluid about py-5 m-0 bg-light">

            <div class="container about-container p-3 p-lg-5 mt-5">
                <div class="row">
                    <div class="col-lg-12 text-start">
                        <h3 id="tituloAbout">¿Quién soy?</h3>
                        <hr>
                        <p id="parrafo1" class="mt-5">Hola! Me llamo Antonio Buitrago y soy una persona que se caracteriza por su
                            entusiasmo y compromiso, siempre
                            dispuesto a sumergirme en nuevos desafíos para adquirir experiencia y crecer
                            profesionalmente.
                            Mi dedicación se refleja en mi enfoque meticuloso para abordar proyectos, donde busco
                            constantemente la excelencia y la superación.</p>
                        <p id="parrafo2">Apasionado por el diseño y la programación de páginas web, estoy en constante búsqueda de
                            conocimientos y habilidades para crear experiencias digitales cautivadoras. Mi enfoque se
                            centra
                            en fusionar la creatividad con la técnica, utilizando lenguajes como HTML, CSS, JavaScript y
                            tecnologías como Bootstrap, React y Vue para dar vida a interfaces intuitivas y visualmente
                            atractivas.</p>
                        <p id="parrafo3">Entre 2014 y 2023, tuve la fortuna de vivir en Liverpool, una experiencia que me enseñó la
                            importancia de la adaptabilidad y el trabajo en entornos diversos. Esta experiencia en el
                            extranjero me ha impulsado a valorar la colaboración global y a buscar activamente
                            oportunidades
                            para seguir creciendo y aprendiendo en el ámbito profesional.</p>
                    </div>
                </div> <!-- /row -->
                <div class="row">
                    <div class="col-lg-12 d-flex flex-wrap justify-content-center align-items-center mt-4 gap-4 gap-lg-5">
                        <!-- Gráfico de Progreso de HTML y CSS -->
                        <div class="progress-bar-container d-flex flex-column gap-3">
                            <div class="d-flex justify-content-center gap-3">
                                <i class="fa-brands fa-html5 fs-1"></i>
                                <i class="fa-brands fa-css3-alt fs-1"></i>
                            </div>
                            <div class="circle-wrap">
                                <div class="circle">
                                    <div class="mask full" style="--fill: 100;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half" style="--fill: 100;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="inside-circle"> 100% </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <p>HTML/CSS</p>
                            </div>
                        </div>
                        <!-- Gráfico de Progreso de Javascript -->
                        <div class="progress-bar-container d-flex flex-column gap-3">
                            <div class="d-flex justify-content-center gap-3">
                                <i class="fa-brands fa-square-js fs-1"></i>
                            </div>
                            <div class="circle-wrap">
                                <div class="circle">
                                    <div class="mask full" style="--fill: 70;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half" style="--fill: 70;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="inside-circle"> 70% </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <p>Javascript</p>
                            </div>
                        </div>
                        <!-- Gráfico de Progreso de PHP y MySQL -->
                        <div class="progress-bar-container d-flex flex-column gap-3">
                            <div class="d-flex justify-content-center gap-3">
                                <i class="fa-brands fa-php fs-1"></i>
                                <i class="fa-solid fa-database fs-1"></i>
                            </div>
                            <div class="circle-wrap">
                                <div class="circle">
                                    <div class="mask full" style="--fill: 90;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half" style="--fill: 90;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="inside-circle"> 90% </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <p>PHP/MySQL</p>
                            </div>
                        </div>
                        <!-- Gráfico de Progreso de Accesibilidad -->
                        <div class="progress-bar-container d-flex flex-column gap-3">
                            <div class="d-flex justify-content-center gap-3">
                                <i class="fa-brands fa-bootstrap fs-1"></i>
                            </div>
                            <div class="circle-wrap">
                                <div class="circle">
                                    <div class="mask full" style="--fill: 90;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half" style="--fill: 90;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="inside-circle"> 90% </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <p>Bootstrap</p>
                            </div>
                        </div>
                        <!-- Gráfico de Progreso de Figma y Photoshop -->
                        <div class="progress-bar-container d-flex flex-column gap-3">
                            <div class="d-flex justify-content-center gap-3">
                                <i class="fa-brands fa-figma fs-1"></i>
                            </div>
                            <div class="circle-wrap">
                                <div class="circle">
                                    <div class="mask full" style="--fill: 90;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half" style="--fill: 90;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="inside-circle"> 90% </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <p>Figma</p>
                            </div>
                        </div>
                        <!-- Gráfico de Progreso de Accesibilidad -->
                        <div class="progress-bar-container d-flex flex-column gap-3">
                            <div class="d-flex justify-content-center gap-3">
                                <i class="fa-solid fa-eye-low-vision fs-1"></i>
                                <i class="fa-solid fa-ear-deaf fs-1"></i>
                            </div>
                            <div class="circle-wrap">
                                <div class="circle">
                                    <div class="mask full" style="--fill: 75;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="mask half" style="--fill: 75;">
                                        <div class="fill"></div>
                                    </div>
                                    <div class="inside-circle"> 75% </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <p id="accessibility">Accesibilidad</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- /row -->
            </div> <!-- /container -->

        </section> <!-- /section-about -->

        <!-- Aquí empieza la sección Curriculum Vitae -->
        <section id="cv" class="container-fluid resume py-5 m-0 bg-white">

            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h3 class="d-flex justify-content-center gap-5"><span id="resume">C. Vitae</span> <span
                                class="pdf-word d-flex gap-4"><a href="resume/CV_AntonioBuitragoGarcia.pdf"
                                    target="_blank" title="Descargar Currículum en formato PDF"><i
                                        class="fa-solid fa-file-pdf"></i></a><a
                                    href="resume/CV_AntonioBuitragoGarcia.docx" target="_blank"
                                    title="Descargar Currículum en formato Word"><i
                                        class="fa-solid fa-file-word"></i></a></span></h3>
                        <hr>
                    </div>
                    <div class="col-12 text-start my-5">
                        <p><span id="subtitleCV">Aquí puedes ver mi Currículum Vitae, donde muestro mi experiencia laboral, los estudios
                            oficiales y los cursos que he realizado a lo largo del tiempo. Además podrás descargarlo en
                            formato PDF y formato Word.<br>Adicionalmente puedes descargar mi CV en inglés en formato
                            PDF </span> <a href="resume/CV_AntonioBuitragoGarcia_eng.pdf" target="_blank"
                                title="Descargar Currículum en inglés en formato PDF"><span id="here">aquí</span></a>.</p>
                    </div>
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col">
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="fa-solid fa-briefcase fs-1"></i>&nbsp;&nbsp;&nbsp;<span id="experiencia">Experiencia</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="timeline-wrap">

                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa-solid fa-briefcase"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>Associate</h5>
                                                    <p>Octubre 2019 - Marzo 2023</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>AMAZON MAN2 (Warrington)</h5>
                                                    <p>Organicé eficientemente el inventario entrante (Almacenamiento) y
                                                        cumplí con
                                                        precisión los pedidos de los clientes (Recogida), optimizando el
                                                        flujo de
                                                        trabajo y asegurando entregas oportunas. Colaboré dentro de un
                                                        equipo para
                                                        mantener altos estándares de productividad y precisión.</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa-solid fa-briefcase"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>Linen Porter</h5>
                                                    <p>Mayo 2019 - Octubre 2019</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>The Richmond Hotel (Liverpool)</h5>
                                                    <p>Manejé el inventario de ropa de cama del hotel, asegurando
                                                        limpieza y
                                                        disponibilidad para las habitaciones de los huéspedes y los
                                                        departamentos.
                                                        Gestioné los procesos de recolección, limpieza y distribución
                                                        para mantener
                                                        altos estándares.</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa-solid fa-briefcase"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>Associate</h5>
                                                    <p>Octubre 2018 - Marzo 2019</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>AMAZON MAN2 (Warrington)</h5>
                                                    <p>Organicé el inventario entrante con precisión, optimizando la
                                                        eficiencia de
                                                        almacenamiento. Colaboré dentro de un equipo para mantener altos
                                                        estándares,
                                                        contribuyendo a un flujo de trabajo eficiente en el almacén y a
                                                        una gestión
                                                        oportuna del inventario.</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa-solid fa-briefcase"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>Room Attendant Supervisor</h5>
                                                    <p>Abril 2015 - Julio 2018</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>ALOFT Hotel (Liverpool)</h5>
                                                    <p>Supervisé al equipo de limpieza del hotel, garantizando una
                                                        limpieza
                                                        meticulosa y una organización impecable de las habitaciones.
                                                        Gestioné los
                                                        horarios, entrené al personal y mantuve estándares de calidad.
                                                    </p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa-solid fa-briefcase"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>Programador Web</h5>
                                                    <p>Marzo 2011 - Junio 2011</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Hay Canal S.L. (Madrid)</h5>
                                                    <p>Creación y mantenimiento de páginas web para los clientes durante
                                                        las
                                                        prácticas del Ciclo Formativo de Grado Superior en Desarrollo de
                                                        Aplicaciones Informáticas.</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa-solid fa-briefcase"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>Programador Web</h5>
                                                    <p>Marzo 2009 - Junio 2009</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>RCM Jit S.L. (Madrid)</h5>
                                                    <p>Creación de la página web de la empresa durante las
                                                        prácticas del Ciclo Formativo de Grado Medio en Explotación de
                                                        Sistemas Informáticos.</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa-solid fa-briefcase"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>Mozo de Almacén</h5>
                                                    <p>Junio 2001 - Julio 2007</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Importaciones AMBER S.L. (Leganés)</h5>
                                                    <p>Llevé a cabo operaciones de almacén de forma independiente.
                                                        Gestioné el
                                                        inventario, manejé los envíos entrantes y organicé el stock de
                                                        manera
                                                        eficiente. Aseguré el cumplimiento preciso de pedidos y mantuve
                                                        un espacio
                                                        de almacenamiento ordenado.</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                        </div> <!-- /timeline-wrap -->
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa fa-graduation-cap fs-1"></i>&nbsp;&nbsp;<span id="estudios">Estudios</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="timeline-wrap">
                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>Grado Superior (DAI)</h5>
                                                    <p>Sep. 2009 - Junio 2011</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Desarrollo de Aplicaciones Informáticas</h5>
                                                    <p>I.E.S. Luis Vives (Leganés)</p>
                                                    <hr>
                                                </div>
                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>Grado Medio (ESI)</h5>
                                                    <p>Sep. 2007 - Junio 2009</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Explotación de Sistemas Informáticos</h5>
                                                    <p>I.E.S. Luis Vives (Leganés)</p>
                                                    <hr>
                                                </div>
                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">
                                                <div class="timeline-ico">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>
                                                <div class="timeline-header">
                                                    <h5>E.S.O.</h5>
                                                    <p>Sep. 1995 - Junio 1998</p>
                                                </div>
                                                <div class="timeline-content">
                                                    <h5>Enseñanza Secundaria Obligatoria</h5>
                                                    <p>I.E.S. Salvador Dalí (Leganés)</p>
                                                    <hr>
                                                </div>
                                            </div> <!-- /timeline-block -->

                                        </div> <!-- /timeline-wrap -->
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="fa fa-graduation-cap fs-1"></i>&nbsp;&nbsp;<span id="cursos">Cursos</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="timeline-wrap">

                                            <div class="timeline-block">

                                                <div class="timeline-ico">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>

                                                <div class="timeline-header">
                                                    <h5>Curso Presencial</h5>
                                                    <p>Sep. 2023 - Febrero 2024</p>
                                                </div>

                                                <div class="timeline-content">
                                                    <h5>Desarrollo de Aplicaciones con Tecnologías Web</h5>
                                                    <p>CFTIC (Getafe) - (590 horas)</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">

                                                <div class="timeline-ico">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>

                                                <div class="timeline-header">
                                                    <h5>Curso Presencial</h5>
                                                    <p>Octubre 2014 - Abril 2015</p>
                                                </div>

                                                <div class="timeline-content">
                                                    <h5>Curso de Inglés General</h5>
                                                    <p>Liverpool School of English (360 horas)</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">

                                                <div class="timeline-ico">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>

                                                <div class="timeline-header">
                                                    <h5>Curso Presencial</h5>
                                                    <p>Nov. 2012 - Febrero 2013</p>
                                                </div>

                                                <div class="timeline-content">
                                                    <h5>Desarrollo de Aplicaciones con Cobol</h5>
                                                    <p>Professional Training (250 horas)</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">

                                                <div class="timeline-ico">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>

                                                <div class="timeline-header">
                                                    <h5>Curso Presencial</h5>
                                                    <p>Junio 2012 - Julio 2012</p>
                                                </div>

                                                <div class="timeline-content">
                                                    <h5>Creación y Administración de Portales con IBM WebSphere Portal
                                                        Server</h5>
                                                    <p>CFTIC (Getafe) - (190
                                                        horas)</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">

                                                <div class="timeline-ico">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>

                                                <div class="timeline-header">
                                                    <h5>Curso Presencial</h5>
                                                    <p>Abril 2012 - Junio 2012</p>
                                                </div>

                                                <div class="timeline-content">
                                                    <h5>Analista Funcional / Java</h5>
                                                    <p>Fondo Social Europeo (260 horas)</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                            <div class="timeline-block">

                                                <div class="timeline-ico">
                                                    <i class="fa fa-graduation-cap"></i>
                                                </div>

                                                <div class="timeline-header">
                                                    <h5>Curso Presencial</h5>
                                                    <p>Julio 2009 - Octubre 2009</p>
                                                </div>

                                                <div class="timeline-content">
                                                    <h5>Diseñador Web y Multimedia</h5>
                                                    <p>ALEF Getafe (230 horas)</p>
                                                    <hr>
                                                </div>

                                            </div> <!-- /timeline-block -->

                                        </div> <!-- /timeline-wrap -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->

        </section> <!-- /.section-cv -->

        <!-- Aquí empieza la sección del Portfolio -->
        <section id="trabajos" class="container-fluid portfolio py-5 m-0 bg-light">

            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <h3 id="tituloTrabajos">Mis Trabajos</h3>
                        <hr>
                    </div>
                    <div class="col-12 my-5">
                        <p id="subtituloTrabajos">Este portafolio exhibe ejemplos específicos de mis páginas web, resaltando mi estilo y
                            enfoque en cada proyecto. Cada sitio refleja creatividad y precisión técnica, combinando
                            estética y funcionalidad de manera distintiva.</p>
                    </div>
                </div> <!-- /.row -->

                <div class="row d-flex justify-content-center">

                    <!-- Proyecto 1 - Photography -->
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="#">
                                <div class="work-img">
                                    <a href="works/photography/index.php" target="_blank"
                                        title="Enlace a la web Photography de mi Portfolio"><img
                                            src="img/photography-portada.webp"
                                            alt="Imagen de la portada de la web Photography de mi Portfolio"
                                            class="img-fluid"></a>
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Photography</h2>
                                        <div class="w-more">
                                            <span id="webDesign1" class="w-ctegory">Web Diseñada</span> <span class="w-date"><strong>10
                                                    Nov. 2023</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="works/photography/index.php" target="_blank"
                                                title="Enlace a la web Photography de mi Portfolio"><i
                                                    class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Proyecto 2 - Tienda Online -->
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="#">
                                <div class="work-img">
                                    <a href="https://antoniobuitrago.es/proyecto2/index.php" target="_blank"
                                        title="Enlace a la web Tienda Online de mi Portfolio"><img
                                            src="img/proyecto2_img.webp"
                                            alt="Imagen de la portada de la web Tienda Online de mi Portfolio"
                                            class="img-fluid"></a>
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Tienda Online</h2>
                                        <div class="w-more">
                                            <span id="webDesign2" class="w-ctegory">Web Diseñada</span> <span class="w-date"><strong>11
                                                    Ene. 2024</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="https://antoniobuitrago.es/proyecto2/index.php" target="_blank"
                                                title="Enlace a la web Tienda Online de mi Portfolio"><i
                                                    class="fa-solid fa-arrow-up-right-from-square"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container -->

        </section> <!-- /.section-portfolio -->

        <!-- Aquí empieza la sección del Formulario de Contacto -->
        <section id="contactar" class="container-fluid contact py-5 m-0 bg-white">

            <div class="container contact-container">
                <div class="row mt-5">
                    <div class="col p-5">
                        <h3 id="tituloContactar">Contactar</h3>
                        <hr>
                        <p id="subtituloContactar" class="mt-5">¿Listo para dar el siguiente paso? ¡Contáctame ahora!</p>
                    </div>
                </div> <!-- /.row -->

                <div class="row contact-both-sides">
                    <div class="col-12 col-lg-6 contact-left">
                        <div class="contact-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8601.44867996231!2d-3.763806335117276!3d40.340763309444995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418a1c0fc4eac9%3A0xd08f90220cc34cb!2sLegan%C3%A9s%2C%20Madrid!5e0!3m2!1ses!2ses!4v1698594752238!5m2!1ses!2ses"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                        <div class="socials">
                            <ul class="d-flex justify-content-center align-items-center gap-3">
                                <li><a href="https://www.linkedin.com/in/antonio-buitrago-garcia/" target="_blank"
                                        title="Enlace para ir a mi página de Linkedin"><i
                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="https://twitter.com/abuitragoIT" target="_blank"
                                        title="Enlace para ir a mi página de Twitter/X"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://github.com/abuitragoES" target="_blank" title="Enlace para ir a mi página de GitHub"><i class="fa-brands fa-github"></i></a></li>
                                <li><a href="https://www.behance.net/antoniobg1" target="_blank"
                                        title="Enlace para ir a mi página de Behance"><i
                                            class="fa-brands fa-behance"></i></a></li>
                                <li><a href="mailto:abuitrago@educa.madrid.org" target="_blank"
                                        title="Enlace para mandarme un correo electrónico"><i
                                            class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 contact-right pb-5">
                        <div id="sent-message"></div>
                        <div id="error-message"></div>
                        <form class="php-email-form" onsubmit="enviarMail(); return false" name="enviar_email" action="" accept-charset="UTF-8" novalidate>
                            <div class="control-group">
                                <input type='text' class="form-control nombre" name='nombre' placeholder="Tu nombre" required />
                                <p class="help-block text-start"></p>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="control-group">
                                <input type='email' class='form-control email' name='email' placeholder="Tu email" required />
                                <p class="help-block text-start"></p>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="control-group">
                                <input type='text' class='form-control asunto' name='asunto' placeholder="Asunto" required />
                                <p class="help-block text-start"></p>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="control-group">
                                <textarea rows='6' class='form-control mensaje' name='mensaje' placeholder="Mensaje" required></textarea>
                                <p class="help-block text-start"></p>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-12 text-center d-flex justify-content-around contact-buttons">
                                <button type="submit" name='boton' class="contact-button boton"><i class="fa-solid fa-envelope-circle-check"></i> <span id="enviar">Enviar</span></button>
                                <button type="reset" class="contact-button button-reset" onclick="borrarCampos()"><i class="fa-solid fa-eraser"></i> <span id="borrar">Limpiar</span></button>
                            </div>
                        </form>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->

        </section> <!-- /.section-contact -->

    </main> <!-- /.Main -->

    <!-- Aquí empieza el Footer -->
    <footer id="footer" class="container-fluid footer">

        <div class="container footer-container">

            <div class="row d-flex justify-content-between align-items-center pt-3">
                <div class="col-12 col-lg-8 d-flex align-items-center footer-left m-0">
                    <p>&copy 2023 - <span id="copyFooter1">Diseñado por</span> <a href="index.php" target="_self" title="Ir la página de portada">Antonio Buitrago</a>. <span id="copyFooter2">Todos los derechos reservados.</span></p>    
                </div>
                <div class="col-12 col-lg-3 d-flex align-items-center footer-right p-0">
                    <ul class="d-flex gap-3">
                        <li><a href="https://www.linkedin.com/in/antonio-buitrago-garcia/" target="_blank" title="Enlace para ir a mi página de Linkedin"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://twitter.com/abuitragoIT" target="_blank" title="Enlace para ir a mi página de Twitter/X"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="https://github.com/abuitragoES" target="_blank" title="Enlace para ir a mi página de GitHub"><i class="fa-brands fa-github"></i></a></li>
                        <li><a href="https://www.behance.net/antoniobg1" target="_blank" title="Enlace para ir a mi página de Behance"><i class="fa-brands fa-behance"></i></a></li>
                        <li><a href="mailto:abuitrago@educa.madrid.org" target="_blank" title="Enlace para mandarme un correo electrónico"><i class="fa-solid fa-envelope"></i></a></li>
                    </ul>
                </div>               
            </div> <!-- /.row -->

        </div> <!-- /.container -->

    </footer> <!-- /.Footer -->

    <!-- Boton ir hacia arriba -->
    <a class="ir-arriba" title="Ir al principio de la página">
        <div class="arrow-top">
            <i class="fa-solid fa-arrow-up"></i>                 
        </div> 
    </a>

    <!-- Librerías jQuery y SweetAlert -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@latest/dist/sweetalert2.all.min.js"></script>

    <!-- Vinculación archivos Javascript -->
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>