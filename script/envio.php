<?php

$nombre = $_GET['nombre'];
$mail = $_GET['email'];
$mensaje = $_GET['mensaje'];

// $to = "sadonfa@gmail.com";
$subject = $nombre . " - Gegova.co";
$message = "Nombre: " .  $nombre . "\nCorreo: " . $mail . "\n" . "Mensaje: " . $mensaje;
// $m = "Esto es una prueba de MAIL()";

$correo = mail('sadonfa@gmail.com', $subject, $message);

header("Location: ../index.html/#con");