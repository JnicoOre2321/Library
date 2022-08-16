<?php

include("../configuracion/1.php");

if (isset($_POST['registrar'])) {
    if (strlen($_POST['usuario'])>= 1 &&
        strlen($_POST['contraseña'])>= 1 &&
        strlen($_POST['nombre'])>= 1 &&
        strlen($_POST['apellido'])>= 1 &&
        strlen($_POST['correo'])>= 1) {
            /* variables*/
        
        $usuario= trim($_POST['usuario']);
        $nombre= trim($_POST['nombre']);
        $apellido= trim($_POST['apellido']);
        $correo= trim($_POST['correo']);
        $contra= trim($_POST['contraseña']);
        $contra=hash('sha512', $contra);
                       /*peticion*/
        
        $conectar="INSERT INTO adminis(nombre, apellido, correo, usuario, contraseña) VALUES ('$nombre','$apellido','$correo','$usuario','$contra')";
        $resultado= mysqli_query($conectar, $consulta);
        /*si sale bien entonces*/
        if ($resultado) {
          
            
            ?><script>
            alert('Registro satisfactorio, ingresa con tus credenciales');
            window.location = '../index.php'
        </script>;<?php

        } else {
            ?>
                <h3 class="bad">Ups ha ocurrido un error!</h3>
<?php
        }
    } else {
        ?>
            <h3 class="bad">Complete los campos!</h3>
<?php
    }
}

?>