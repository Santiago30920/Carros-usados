<?php
include "database/conexion.php";
$setencia = $bd->query('SELECT * FROM vehiculos');
$consulta = $setencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros registrado</title>
    <link rel="stylesheet" href="Assets/css/Lista.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="header">
    </div>
    <div class="Barra_de_busqueda">
        <form action="views/busqueda_index.php" method="GET">
            <input type="text" name="busqueda" id="busqueda" placeholder="Busqueda" class="busqueda">
            <span id="material" class="material-icons">
                search
            </span>        
            <input type="submit" value="Buscar" class="buscar">
            <a href="views/RegistrarVehiculos.php" class="RegistroU">Registro</a>
            <a href="Entidad/Vehiculos.php?delA=eliminarAll" class="RegistroU">Eliminar todo</a>
        </form>
    </div>
    <div class="tabla">
        <h3>Vehiculos registrados</h3>
        <hr>
        <table class="vehiculo" style="width: 100%; margin-left: -0%;">
            <tr>
                <th>Marca</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
            <?php
            foreach ($consulta as $dato) {
            ?>
                <tr>
                    <td><?php echo $dato->Marca; ?></td>
                    <td><?php echo $dato->Color; ?></td>
                    <td><?php echo $dato->Precio; ?></td>
                    <td><?php echo $dato->Año; ?></td>
                    <td><a href="Entidad/Vehiculos.php?id=<?php echo $dato->id_vehiculos ?>&del">
                            <span class="material-icons">
                                delete_sweep
                            </span>
                        </a></td>
                <?php
            }
                ?>
                </tr>
        </table>
        <br>
        <br>
    </div>
</body>

</html>