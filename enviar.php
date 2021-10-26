<?php

$destinatario = 'salvadorn.1111@gmail.com';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$genero_no_binario = $_POST['genero_no_binario'];
$genero_femenino = $_POST ['genero_femenino'];
$genero_masculino = $_POST['genero_masculino'];
$cuil = $_POST['cuil'];
$fecha = $_POST['fecha'];
$puestos = $_POST['puestos'];
$cocina = $_POST['cocina'];
$ayudante = $_POST['ayudante'];
$bacha = $_POST['bacha'];
$mozo = $_POST['mozo'];
$recepcion = $_POST['recepcion'];
$comentarios = $_POST['comentarios'];
$adjunto = $_POST['adjunto'];
$acepta = $_POST['acepta'];

$header = "Enviado desde Opón Ramen House";


$message = "Este mensaje fue enviado por: " . $nombre . $apellido . " \r\n";
$message .= "Su celular es: " . $celular . " \r\n";
$message .= "Su mail es: " . $email . " \r\n";
$message .= "Su genero es: " . $genero_no_binario . $genero_femenino . $genero_masculino ." \r\n";
$message .= "Su cuil es: " . $cuil . " \r\n";
$message .= "Su fecha de nacimiento es: " . $fecha . " \r\n";
$message .= "Se postula para: " . $cocina . $ayudante . $bacha . $mozo . $recepcion . " \r\n";
$message .= "Comentarios: " .$_POST['comentarios'] . " \r\n";
$message .= "CV adjunto: " . $adjunto . " \r\n";
$message .= "Acepta términos: " . $acepta . " \r\n";

mail($destinatario, utf8_decode($message), $header);

echo "<script>alert('¡Gracias! Estaremos en contacto con vos')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>";


header("Location:index.html");

?>   

