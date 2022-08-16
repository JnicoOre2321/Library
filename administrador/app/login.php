<?php

include("../configuracion/1.php");

$usuario=$_POST['usuario'];
$contraseña= trim($_POST['contraseña']);
$contraseña= hash('sha512', $contraseña);

session_start();

 $consulta="SELECT*FROM adminis where usuario='$usuario' and contraseña= '$contraseña' ";
 $resultado= mysqli_query($conectar,$consulta);
 $filas= mysqli_num_rows($resultado);

 if($filas){
    header("location:../inicio.php");
 }else{
    include("../index.php");
    ?>
    <h2 class="bad">Ingrese datos validos</h2>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conectar)


?>
