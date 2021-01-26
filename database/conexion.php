<?php 
    $contrasena = '';
    $usuario = 'root';
    $nombrebd = 'venta_autos';
    try {
        $bd = new PDO('mysql:host=localhost:3307;dbname='.$nombrebd, $usuario, $contrasena, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (Exception $e) {
        echo "Error de conexion".$e->getMessage();
    }

?>