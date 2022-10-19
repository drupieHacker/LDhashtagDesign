<?php
$email=$_POST['email'];
$nombre=$_POST['nombre'];
$apellidoM=$_POST['institucion'];
echo $email;
echo '</br>';
echo $nombre;
echo '</br>';
echo $apellidoM;
echo '</br>';
$correo=$email;
$nombresito=$nombre;
$apellidito=$apellidoM;
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "admin@seguridadsecure.com";
    $to = "admin@seguridadsecure.com";
    $subject = "Checking PHP mail";
    $message = "hI I AM ROBOT HACKING".$correo.$nombresito.$apellidito;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>