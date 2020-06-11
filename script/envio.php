<?php

$nombre = $_GET['nombre'];
$mail = $_GET['email'];
$mensaje = $_GET['mensaje'];


$to = "sadonfa@gmail.com";
$subject = "$nombre - Gegova.co";
$message = $mail + $mensaje;

mail($to, $subject, $mensaje);

header("Location: ../index.html");