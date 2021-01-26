<?php
include '../database/conexion.php';
if (isset($_GET['registrar'])) {
    $Marca = $_POST['txtMarca'];
    $Color = $_POST['txtColor'];
    $Precio = $_POST['txtPrecio'];
    $Año = $_POST['txtAño'];

    $sentencia = $bd->prepare("INSERT INTO vehiculos VALUES(?,?,?,?,?)");
    $resultado = $sentencia->execute(['', $Marca, $Color, '$' . $Precio, $Año]);
    if ($resultado === true) {
        echo '<script type="text/javascript">
        alert("Registro exitoso");
        window.location.href="../index.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Registro denegado \nFallo en algun dato");
        window.location.href="../views/RegistrarVehiculos.php";
        </script>';
    }
} elseif (isset($_GET['delA'])) {
    $sentencia = "TRUNCATE TABLE `vehiculos`";
    $resultado = $bd->prepare($sentencia);
    $resultado->execute();
    echo '<script type="text/javascript">
        alert("Eliminado correctamente");
        window.location.href="../index.php";
        </script>';
}elseif(isset($_GET['del'])){
    $id = $_GET['id'];
    $sentencia = $bd->prepare("DELETE FROM vehiculos WHERE id_vehiculos = ?");
    $resultado = $sentencia->execute([$id]);
    if ($resultado === true) {
        echo '<script type="text/javascript">
        alert("Se elemino datos correctamente");
        window.location.href="../index.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Eliminacion denegada");
        window.location.href="../index.php";
        </script>';
    }
}
?>
