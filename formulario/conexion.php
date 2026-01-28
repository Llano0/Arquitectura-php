<?php
$servidor = "localhost"; //Nombres default del server, usuario y sin contraseña
$usuario = "root";
$contrasena = "";
$base_datos = "mi_aplicacion";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>