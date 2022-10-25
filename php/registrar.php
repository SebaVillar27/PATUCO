<?php

include ("base de datos.php");

if(isset($_POST[Registrate])) {
    if(strlen($_POST[Nombre Completo])) >= 1 && strlen($_POST[Correo Electronico])>= 1 && strlen($_POST[Contraseña]) >= 1 {
        $name = trim($_POST[name]);
        $correo = trim($_POST[correo]);
        $contraseña = trim($_POST[contraseña]);
        $consulta = "INSERT INTO `usuarios`(`id_`, `nombre_completo`, `correo_electrónico`, `contraseña`) VALUES ('$name','$correo','$contraseña',)";
        $resultado = mysqli_query ($conexion, $consulta);
        if($resultado){
            ?>
            <h3 class = "correcto">¡Te Has Inscripto Correctamente!</h3>
            
            <?php
        } else{
            ?>
            <h3 class = "error">¡Ups ha ocuurrido un error!</h3>
            <?php
        } else{
            ?>
            <h3 class= "complete">¡Complete los campos por favor!</h3>
            <?php
        }
    }


}









?>