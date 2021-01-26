<?php
    include '../database/conexion.php';
    $busqueda = $_GET['busqueda'];
    $sentencia = $bd->query("SELECT * FROM vehiculos WHERE(Marca LIKE '%$busqueda' OR Color LIKE '%$busqueda' OR Precio LIKE '%$busqueda' OR Año LIKE '%$busqueda')");
    $consulta = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros registrado</title>
    <link rel="stylesheet" href="../Assets/css/Lista.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css">
</head>

<body>
    <div class="header">
    </div>
    <div class="Barra_de_busqueda">
        <form action="busqueda_index.php" method="GET">
            <input type="text" name="busqueda" id="busqueda" placeholder="Busqueda" class="busqueda">
            <span class="material-icons" >
                search
            </span>       
            <a href="RegistrarVehiculos.php" class="RegistroU">Registro</a>
            <a href="../Entidad/Vehiculos.php?delA=eliminarAll" class="RegistroU">Eliminar todo</a>
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
                foreach($consulta as $dato){
            ?>
        <tr>
            <td><?php echo $dato->Marca;?></td>
            <td><?php echo $dato->Color;?></td>
            <td><?php echo $dato->Precio;?></td>
            <td><?php echo $dato->Año;?></td>
            <td><a href="Entidad/Vehiculos.php?id=<?php echo $dato->id_vehiculos?>&del">Eliminar</a></td>
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