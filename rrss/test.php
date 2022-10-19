<?php
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];
// echo $nombre;
// echo '</br>';
// echo $telefono;
// echo '</br>';
// echo $email;
// echo '</br>';
// echo $mensaje;
// echo '</br>';
$nombresito=$nombre;
$telefonito=$telefono;
$correito=$correo;
$mensajito=$mensaje;
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "admin@seguridadsecure.com";
    $to = "admin@seguridadsecure.com";
    $subject = "Solicito informes sobre servicios de seguridad secure";
    $message = "Hola mi nombre es ".$nombresito." "."Mi teléfono es ".$telefonito." "."Mi correo electrónico es ".$correito." "."Mi pregunta es ".$mensajito;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
   /*  echo "The email message was sent."; */
    include 'feed.html';

    /* agradecimiento */
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "admin@seguridadsecure.com";
    $to = $correito;
    $subject = "Seguridad secure";
    $message = "Te agradecemos por haber comunicado con nosotros";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
?>