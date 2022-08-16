<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "libreria";

// Create connection
$conectar = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conectar) {
  die("Connection failed: " . mysqli_connect_error());
}
/*

//orden es : nombre de l que contiene las tablas   ruta    contraseña    usuario
$conectar= mysqli_connect("localhost","root","","libreria");
if ($conectar=== false) {
    die("ERROR: No se pudo conectar. " . mysqli_connect_error());
}
*/
?>