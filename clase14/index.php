<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "eventos";
    $conexion = new mysqli($servidor, $usuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }

    echo "Conexión exitosa...";
    /*
    $sql = "CREATE DATABASE eventos";
    if($conexion->query($sql) === true){
        echo "Base de datos creada correctamente...";
    }else{
        die("Error al crear base de datos: " . $conexion->error);
    }*/
    /*
    $sql = "CREATE TABLE invitados (
            id INT(11) AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(150) NOT NULL,
            apellido VARCHAR(150) NOT NULL,
            fecha DATE
    ) ";*/
    $sql = "CREATE TABLE registros (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        invitado_id INT(11) NOT NULL
    ) ";
    if($conexion->query($sql) === true){
        echo "La tabla se creó correctamente...";
    }else{
        die("Error al crear tabla: " . $conexion->error);
    }




?>