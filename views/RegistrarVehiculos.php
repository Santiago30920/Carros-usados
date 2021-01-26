<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de vehiculos</title>
    <link rel="stylesheet" href="../Assets/css/Registro.css">
</head>

<body>
    <!-- Diseño de header -->
    <div class="header">
    </div>

    <form action="../Entidad/Vehiculos.php?registrar" method="post">
        <div class="Contenido">
        <h2>Registro de vehiculos</h2>
            <input type="text" name="txtMarca" class="registro" placeholder="Marca" required>
            <input type="text" name="txtColor" class="registro" placeholder="Color" required>
            <input type="number" name="txtPrecio" class="registro" placeholder="Precio" required>
            <input type="number" name="txtAño" class="registro" placeholder="Año" min="1980" max="2021" required>
            <br><br>
            <input type="submit" class="enviar" value="Enviar">
            <a href="../index.php" class="Devolver">Devolver</a>
            <br><br>
        </div>
    </form>
</body>

</html>