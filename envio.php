<?php

$destino = "contacto@otecfci.com"; // A donde llegara el correo con la consulta
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$company = $_POST['company'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$contenido = "Nombre: "  . $name . "\nCorreo: " . $email . "\nContacto: " . $number . "\nCompania: " . $company . "\nCurso: " . $subject . "\nMensaje: " . $message;

mail($destino, "Contacto", $contenido);
header("Location:gracias.html");

?>