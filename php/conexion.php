<?php

//declarando variables para la conexión
$servidor = "localhost"; // El servidor que utilizaremos,en este caso será el localhost
$usuario = "root"; // El usuario de la base de datos
$contraseña = ""; // La contraseña del usuario que utilizaremos
$base_de_datos_patuco = ""; // El nombre de la base de datos

// Creando la conexión
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos_patuco);

//Verificando la conexión
if (!$conexion){
    echo "Falló la conexion <br>";
    die ("Connection failed: " . mysqli_connect_error());

}
else{
    echo "Conexión Exitosa";
}
?>