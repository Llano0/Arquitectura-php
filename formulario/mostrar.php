<?php
// Incluimos la conexión
include 'conexion.php';

// Consultamos todos los nombres 
$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado = $conexion->query($sql);

echo "<h1>Lista de Nombres</h1>";
echo "Total: " . $resultado->num_rows . "<br><br>";

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . "<br>";
        echo "Nombre: " . $fila["nombre"] . "<br>";
        echo "Fecha: " . $fila["fecha_registro"] . "<br>";
        echo "------------------------<br>";
    }
} else {
    echo "No hay usuarios registrados";
}

echo "<br><a href='index.php'>Volver</a>";

$conexion->close();
?>