<?php
function retornarConexion() {
  $con=mysqli_connect("localhost", "seguri29_leads", "qjOT!t46Q8v9", "seguri29_leads");
  return $con;
}
?>