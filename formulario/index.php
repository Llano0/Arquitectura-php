<!DOCTYPE html>
<html>
<head>
    <title>Registro de Nombres</title>
</head>
<body>
    <h1>Sistema de Registro</h1>
    <h2>Registrar nuevo nombre</h2>
    
    <form action="guardar.php" method="POST">
        Nombre: <input type="text" name="nombre" required>
        <br><br>
        <button>Guardar</button>
    </form>
    
    <br><br>
    <a href="mostrar.php">Ver lista de personas</a>
</body>
</html>