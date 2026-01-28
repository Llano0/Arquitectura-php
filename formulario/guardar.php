<?php
// Incluimos la conexion a la BD
include 'conexion.php';

// Recibimos el dato del form
$nombre = $_POST["nombre"];

// Debe haber texto
if (empty($nombre)) {
    die("El nombre es obligatorio");
}

// Guardamos en la BD
$sql = "INSERT INTO usuarios (nombre) VALUES ('$nombre')";

if ($conexion->query($sql)) {
    echo "<h1>Usuario guardado</h1>";
    echo "Nombre: " . $nombre . "<br>";
    echo "<a href='index.php'>Guardar otro</a> | ";
    echo "<a href='mostrar.php'>Ver lista</a>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>