<?php
    // $conexion = mysqli_connect("localhost", "seguri29_leads", "qjOT!t46Q8v9", "seguri29_leads") or

$user="seguri29_leads";
$pass="qjOT!t46Q8v9";
$db="seguri29_leads";
$url="localhost";
$n=$_REQUEST['nombre'];
$t=$_REQUEST['email'];
$e=$_REQUEST['institucion'];

$con=mysqli_connect($url,$user,$pass,$db)or die("problemas en la conexión");
$sql="INSERT INTO prospectos_bet(email,nombre,institucion)VALUES('$n','$t','$e')";
mysqli_query($con,$sql);

echo "<style>div{
display:none;

}
h1{
    text-align:center;
}
</style>";
echo "<h1>Pronto te contactaremos</h1>";
echo"<div>";
include 'phpmailer-smtp.php';
echo "</div>"
?>