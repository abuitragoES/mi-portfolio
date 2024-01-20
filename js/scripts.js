/*=======================================================================
	
    URL 		    |		www.abuitrago.es
	
    Author Name		|		Antonio Buitrago
	
-------------------------------------------------------------------------
    Javascript Structure
-------------------------------------------------------------------------
	
    01- Cambiar textos a inglés
    02- Menú de Navegación
    03- Flecha de desplazamiento
    04- Resetear el mensaje de envío del formulario.
    05- Envío del Formulario de Contacto
    06- Validación Formulario de Contacto con Bootstrap
	
=======================================================================*/
/* let hora = new Date().getHours();
let saludoElement = document.getElementById("saludo");

let saludo;
if (hora >= 5 && hora < 12) {
    saludo = "Buenos días";
} else if (hora >= 12 && hora < 18) {
    saludo = "Buenas tardes";
} else {
    saludo = "Buenas noches";
}

saludoElement.textContent = saludo; */
/*=======================================================================
    01- Cambiar textos a inglés
=======================================================================*/
function cambiarIdioma() {
    // Para cambiar los textos del Menú y de la sección 'About'
    let elementosMenu = document.querySelectorAll('.nav-item a');
    let titulo = document.getElementById('titulo');
    let subtitulo = document.getElementById('subtitulo');
    let empezar = document.getElementById('empezar');
    let languageToggle = document.getElementById('languageToggle');

    // Para cambiar los textos de la sección '¿Quién soy?'
    let tituloAbout = document.getElementById('tituloAbout');
    let parrafo1 = document.getElementById('parrafo1');
    let parrafo2 = document.getElementById('parrafo2');
    let parrafo3 = document.getElementById('parrafo3');
    let accesibilidad = document.getElementById('accessibility');

    // Para cambiar los textos de la sección 'CV'
    let resume = document.getElementById('resume');
    let subtituloCV = document.getElementById('subtitleCV');
    let here = document.getElementById('here');
    let experiencia = document.getElementById('experiencia');
    let estudios = document.getElementById('estudios');
    let cursos = document.getElementById('cursos');

    // Textos de la Experiencia, Estudios y Cursos.

    // Para cambiar los textos de la sección 'Portfolio'
    let tituloTrabajos = document.getElementById('tituloTrabajos');
    let subtituloTrabajos = document.getElementById('subtituloTrabajos');
    let webDesign1 = document.getElementById('webDesign1');
    let webDesign2 = document.getElementById('webDesign2');

    // Para cambiar los textos de la sección 'Contactar'
    let tituloContactar = document.getElementById('tituloContactar');
    let subtituloContactar = document.getElementById('subtituloContactar');
    let enviar = document.getElementById('enviar');
    let borrar = document.getElementById('borrar');

    // Para cambiar los textos de la sección 'Footer'
    let copyFooter1 = document.getElementById('copyFooter1');
    let copyFooter2 = document.getElementById('copyFooter2');

    if (languageToggle.innerText === 'ESP') {
        elementosMenu[0].innerText = '¿Quién soy?';
        elementosMenu[1].innerText = 'Currículum Vitae';
        elementosMenu[2].innerText = 'Trabajos';
        elementosMenu[3].innerText = 'Contactar';

        titulo.innerText = 'Antonio Buitrago';
        subtitulo.innerText = 'Desarrollador Front-end | Back-end';
        empezar.innerText = 'Empezar ';

        tituloAbout.innerText = '¿Quién soy?';
        parrafo1.innerText = 'Hola! Me llamo Antonio Buitrago y soy una persona que se caracteriza por su entusiasmo y compromiso, siempre dispuesto a sumergirme en nuevos desafíos para adquirir experiencia y crecer profesionalmente. Mi dedicación se refleja en mi enfoque meticuloso para abordar proyectos, donde busco constantemente la excelencia y la superación.';
        parrafo2.innerText = 'Apasionado por el diseño y la programación de páginas web, estoy en constante búsqueda de conocimientos y habilidades para crear experiencias digitales cautivadoras. Mi enfoque se centra en fusionar la creatividad con la técnica, utilizando lenguajes como HTML, CSS, JavaScript y tecnologías como Bootstrap, React y Vue para dar vida a interfaces intuitivas y visualmente atractivas.';
        parrafo3.innerText = 'Entre 2014 y 2023, tuve la fortuna de vivir en Liverpool, una experiencia que me enseñó la importancia de la adaptabilidad y el trabajo en entornos diversos. Esta experiencia en el extranjero me ha impulsado a valorar la colaboración global y a buscar activamente oportunidades para seguir creciendo y aprendiendo en el ámbito profesional.';
        accesibilidad.innerText = 'Accesibilidad';

        resume.innerText = 'C. Vitae';
        subtituloCV.innerText = 'Aquí puedes ver mi Currículum Vitae, donde muestro mi experiencia laboral, los estudios oficiales y los cursos que he realizado a lo largo del tiempo. Además podrás descargarlo en formato PDF y formato Word. Adicionalmente puedes descargar mi CV en inglés en formato PDF en ';
        here.innerText = 'aquí';
        experiencia.innerText = 'Experiencia';
        estudios.innerText = 'Estudios';
        cursos.innerText = 'Cursos';

        // Textos de la Experiencia, Estudios y Cursos.

        //  -------------------------------------------

        tituloTrabajos.innerText = 'Mis Trabajos';
        subtituloTrabajos.innerText = 'Este portafolio exhibe ejemplos específicos de mis páginas web, resaltando mi estilo y enfoque en cada proyecto. Cada sitio refleja creatividad y precisión técnica, combinando estética y funcionalidad de manera distintiva.';
        webDesign1.innerText = 'Web Diseñada';
        webDesign2.innerText = 'Web Diseñada';

        tituloContactar.innerText = 'Contactar';
        subtituloContactar.innerText = '¿Listo para dar el siguiente paso? ¡Contáctame ahora!';
        let nombre = document.querySelector('.nombre').setAttribute('placeholder', 'Tu nombre');
        let email = document.querySelector('.email').setAttribute('placeholder', 'Tu email');
        let asunto = document.querySelector('.asunto').setAttribute('placeholder', 'Asunto');
        let mensaje = document.querySelector('.mensaje').setAttribute('placeholder', 'Mensaje');
        enviar.innerText = 'Enviar';
        borrar.innerText = 'Borrar';

        copyFooter1.innerText = 'Diseñado por';
        copyFooter2.innerText = 'Todos los derechos reservados.';

        languageToggle.innerText = 'ENG';
    } else {
        // Aquí pones los textos en español
        elementosMenu[0].innerText = 'About';
        elementosMenu[1].innerText = 'Resume';
        elementosMenu[2].innerText = 'Portfolio';
        elementosMenu[3].innerText = 'Contact';

        titulo.innerText = 'I am Antonio Buitrago';
        subtitulo.innerText = 'Front-end | Back-end Developer';
        empezar.innerText = 'Get Started ';

        tituloAbout.innerText = 'About';
        parrafo1.innerText = 'Hello! My name is Antonio Buitrago, and I amm someone known for my enthusiasm and commitment. I am always ready to dive into new challenges to gain experience and grow professionally. My dedication is reflected in my meticulous approach to tackling projects, where I constantly seek excellence and self-improvement.';
        parrafo2.innerText = 'Passionate about web design and programming, I am constantly seeking knowledge and skills to create captivating digital experiences. My focus revolves around merging creativity with technique, using languages like HTML, CSS, JavaScript, and technologies such as Bootstrap, React, and Vue to bring forth intuitive and visually appealing interfaces.';
        parrafo3.innerText = 'Between 2014 and 2023, I had the fortune of living in Liverpool, an experience that taught me the importance of adaptability and working in diverse environments. This overseas experience has driven me to value global collaboration and actively seek opportunities to continue growing and learning in the professional sphere.';
        accesibilidad.innerText = 'Accessibility';

        resume.innerText = 'Resume';
        subtituloCV.innerText = 'Here is my CV, showcasing my work experience, official studies, and courses I have completed over time. You can also download it in PDF and Word formats. Additionally, you can download my CV in English in PDF format ';
        here.innerText = 'here';
        experiencia.innerText = 'Experience';
        estudios.innerText = 'Studies';
        cursos.innerText = 'Courses';

        // Textos de la Experiencia, Estudios y Cursos.

        //  -------------------------------------------

        tituloTrabajos.innerText = 'My Works';
        subtituloTrabajos.innerText = 'This portfolio showcases specific examples of my websites, highlighting my style and approach in each project. Each site reflects creativity and technical precision, blending aesthetics and functionality in a distinctive manner.';
        webDesign1.innerText = 'Web Designed';
        webDesign2.innerText = 'Web Designed';

        tituloContactar.innerText = 'Contact';
        subtituloContactar.innerText = 'Ready to take the next step? Contact me now!';
        let nombre = document.querySelector('.nombre').setAttribute('placeholder', 'Your name');
        let email = document.querySelector('.email').setAttribute('placeholder', 'Your email');
        let asunto = document.querySelector('.asunto').setAttribute('placeholder', 'Subject');
        let mensaje = document.querySelector('.mensaje').setAttribute('placeholder', 'Message');
        enviar.innerText = 'Send';
        borrar.innerText = 'Clean';

        copyFooter1.innerText = 'Designed by';
        copyFooter2.innerText = 'All rights reserved.';

        languageToggle.innerText = 'ESP';
    }
}

document.getElementById('languageToggle').addEventListener('click', function(event) {
    event.preventDefault();
    cambiarIdioma();
});

/*=======================================================================
    02- Menú de Navegación
=======================================================================*/
var toggleButton = $('.menu-toggle'),
    nav = $('.main-navigation');

// toggle button
toggleButton.on('click', function (e) {

    e.preventDefault();
    toggleButton.toggleClass('is-clicked');
    nav.slideToggle();
});

// nav items
nav.find('li a').on("click", function () {

    // update the toggle button 		
    toggleButton.toggleClass('is-clicked');
    // fadeout the navigation panel
    nav.fadeOut();
});


/*=======================================================================
    03- Flecha de desplazamiento
=======================================================================*/
$(document).ready(function () { irArriba(); }); //Hacia arriba

function irArriba() {
    $('.ir-arriba').click(function () { $('body,html').animate({ scrollTop: '0px' }, 1000); });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) { $('.ir-arriba').slideDown(600); } else { $('.ir-arriba').slideUp(600); }
    });
}

/*=======================================================================
    04- Resetear el mensaje de envío del formulario.
=======================================================================*/
document.addEventListener('DOMContentLoaded', function () {
    let successDiv = document.getElementById('sent-message');
    let errorDiv = document.getElementById('error-message');

    let inputs = document.querySelectorAll('input, textarea, button[type="reset"]');
    inputs.forEach(input => {
        input.addEventListener('focus', function () {
            successDiv.style.display = 'none';
            errorDiv.style.display = 'none';
        });
    });
});


/*=======================================================================
    05- Envío del Formulario de Contacto
=======================================================================*/
function nuevoAjax() {
    let xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

function validarEmail(email) {
    // Expresión regular para validar el formato de email
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validarFormulario() {
    let formulario = document.forms['enviar_email'];
    let campos = formulario.querySelectorAll('input, textarea');

    let valido = true;

    campos.forEach((campo) => {
        if (campo.type === 'email') {
            if (campo.value.trim() === '') {
                campo.classList.add('is-invalid');
                if (languageToggle.innerText === 'ENG') {
                    campo.nextElementSibling.textContent = 'Este campo es obligatorio.';
                } else {
                    campo.nextElementSibling.textContent = 'This field is required.';
                }                
                campo.nextElementSibling.classList.add('invalid-feedback');
                campo.nextElementSibling.classList.remove('valid-feedback');
                valido = false;
            } else if (!validarEmail(campo.value)) {
                campo.classList.add('is-invalid');
                if (languageToggle.innerText === 'ENG') {
                    campo.nextElementSibling.textContent = 'Por favor, introduzca un email válido.';
                } else {
                    campo.nextElementSibling.textContent = 'Please enter a valid email.';
                }  
                campo.nextElementSibling.classList.add('invalid-feedback');
                campo.nextElementSibling.classList.remove('valid-feedback');
                valido = false;
            } else {
                campo.classList.remove('is-invalid');
                campo.classList.add('is-valid');
                if (languageToggle.innerText === 'ENG') {
                    campo.nextElementSibling.textContent = 'Completado.';
                } else {
                    campo.nextElementSibling.textContent = 'Completed';
                }                
                campo.nextElementSibling.classList.remove('invalid-feedback');
                campo.nextElementSibling.classList.add('valid-feedback');
            }
        } else if (campo.value.trim() === '') {
            campo.classList.add('is-invalid');
            if (languageToggle.innerText === 'ENG') {
                campo.nextElementSibling.textContent = 'Este campo es obligatorio.';
            } else {
                campo.nextElementSibling.textContent = 'This field is required.';
            }  
            campo.nextElementSibling.classList.add('invalid-feedback');
            campo.nextElementSibling.classList.remove('valid-feedback');
            valido = false;
        } else {
            campo.classList.remove('is-invalid');
            campo.classList.add('is-valid');
            if (languageToggle.innerText === 'ENG') {
                campo.nextElementSibling.textContent = 'Completado.';
            } else {
                campo.nextElementSibling.textContent = 'Completed';
            }   
            campo.nextElementSibling.classList.remove('invalid-feedback');
            campo.nextElementSibling.classList.add('valid-feedback');
        }
    });

    return valido;
}

function enviarMail() {

    if (validarFormulario()) {
        let ok = document.getElementById('sent-message');
        let error = document.getElementById('error-message');

        let jnombre = document.enviar_email.nombre.value;
        let jemail = document.enviar_email.email.value;
        let jasunto = document.enviar_email.asunto.value;
        let jmensaje = document.enviar_email.mensaje.value;
        let ajax = nuevoAjax();

        ajax.open("POST", "envia_mail.php", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {

                if (ajax.status == 200) {
                    // La solicitud se completó y se recibió una respuesta del servidor
                    if (ajax.responseText.trim() == 'success') {
                        ok.style.display = 'block';
                        ok.innerHTML = '<div style="text-align:center; margin: 0 auto;" class="spinner-border text-success d-flex justify-content-center my-3" role="status"><span class="visually-hidden">Enviando...</span></div>';
                        // Retrasar la actualización del mensaje de éxito después de 1.5 segundos (1500 milisegundos)
                        setTimeout(function () {
                            if (languageToggle.innerText === 'ENG') {
                                ok.innerHTML = '<p>El correo se ha enviado correctamente.</p>';
                            } else {
                                ok.innerHTML = '<p>The email has been sent successfully.</p>';
                            }                  
                        }, 1500);
                    } else {
                        error.style.display = 'block';
                        error.innerHTML = '<div class="spinner-border text-success" role="status"><span class="visually-hidden">Enviando...</span></div>';
                        // Retrasar la actualización del mensaje de error después de 1.5 segundos (1500 milisegundos)
                        setTimeout(function () {
                            error.innerHTML = '<p>Ha ocurrido un error al enviar el correo. Vuelva a intentarlo.</p>';
                        }, 1500);
                    }
                } else {
                    // Error en la solicitud al servidor
                    if (languageToggle.innerText === 'ENG') {
                        error.innerHTML = '<p>Ha ocurrido un error en la solicitud al servidor.</p>';
                    } else {
                        error.innerHTML = '<p>An error occurred in the server request.</p>';
                    }  
                    
                }
                // Retrasamos también a 1.5 segundos el limpiado de campos.
                setTimeout(function () {
                    borrarCampos();
                }, 1500);

            }
        };

        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("&nombre=" + jnombre + "&email=" + jemail + "&asunto=" + jasunto + "&mensaje=" + jmensaje);
    }

}

function borrarCampos() {
    let formulario = document.forms['enviar_email'];
    let campos = formulario.querySelectorAll('input, textarea');

    campos.forEach((campo) => {
        campo.value = '';
        campo.classList.remove('is-valid', 'is-invalid');
        campo.nextElementSibling.textContent = '';
        campo.nextElementSibling.classList.remove('valid-feedback', 'invalid-feedback');
    });
}

// Script que muestra el mensaje de campo completado al cambiar el foco.
function mostrarCompletado(campo) {
    if (campo.value.trim() !== '') {
        campo.classList.add('is-valid');
        if (languageToggle.innerText === 'ENG') {
            campo.nextElementSibling.textContent = 'Completado';
        } else {
            campo.nextElementSibling.textContent = 'Completed';
        }   
        campo.nextElementSibling.classList.add('valid-feedback');
    } else {
        campo.classList.remove('is-valid', 'is-invalid');
        campo.nextElementSibling.textContent = '';
        campo.nextElementSibling.classList.remove('valid-feedback', 'invalid-feedback');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    let campos = document.forms['enviar_email'].querySelectorAll('input, textarea');

    campos.forEach((campo) => {
        campo.addEventListener('blur', function () {
            if (campo.value.trim() !== '') {
                if (campo.type === 'email' && !validarEmail(campo.value)) {
                    campo.classList.add('is-invalid');
                    if (languageToggle.innerText === 'ENG') {
                        campo.nextElementSibling.textContent = 'Por favor, introduzca un email válido.';
                    } else {
                        campo.nextElementSibling.textContent = 'Please enter a valid email.';
                    }  
                    campo.nextElementSibling.classList.add('invalid-feedback');
                    campo.nextElementSibling.classList.remove('valid-feedback');
                } else {
                    campo.classList.remove('is-invalid');
                    campo.classList.add('is-valid');
                    if (languageToggle.innerText === 'ENG') {
                        campo.nextElementSibling.textContent = 'Completado';
                    } else {
                        campo.nextElementSibling.textContent = 'Completed';
                    } 
                    campo.nextElementSibling.classList.remove('invalid-feedback');
                    campo.nextElementSibling.classList.add('valid-feedback');
                }
            }
        });
    });
});

/*=======================================================================
    06- Validación Formulario de Contacto con Bootstrap
=======================================================================*/
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()