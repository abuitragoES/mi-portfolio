<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newsletter = $_POST["newsletter"];
 
    // Inserción del email del suscriptor en la base de datos, en la tabla newsletter.
    
    
} else {
    // Acceso no permitido, redirige a index.php
    header("Location: index.php");
    exit;
}
?>






