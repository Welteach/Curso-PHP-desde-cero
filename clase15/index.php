<?php include('conexion.php'); ?>
<h2>Registro de invitados</h2>
<br><br><br>
<form action="index.php" method="post">
     <input type="text" name="nombre">
     <input type="text" name="apellido">
     <input type="submit" value="Registrar usuario">
</form>
<?php
    // CRUD en PHP (create, read, update, delete)
    if(isset($_POST['nombre']) && isset($_POST['apellido'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha = date("Y-m-d");

        $sql = "INSERT INTO invitados (id, nombre, apellido, fecha) VALUES (NULL, '$nombre', '$apellido', '$fecha')";

        if($conexion->query($sql) === true){
            echo "Datos insertados correctamente...";
        }else{
            die("Error al insertar datos: " . $conexion->error);
        }

    }else if(isset($_POST['editar'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

        $sql = "UPDATE invitados SET nombre = '$nombre' WHERE id = $id";
        $resultado = $conexion->query($sql);

        if($conexion->query($sql) === true){
            echo "Datos actualizados correctamente...";
        }else{
            die("Error al actualizar los datos: " . $conexion->error);
        }

    }else if(isset($_POST['eliminar'])){
        $id = $_POST['id'];

        $sql = "DELETE FROM invitados WHERE id = $id";

        if($conexion->query($sql) === true){
            
        }else{
            die("Error al eliminar el registro: " . $conexion->error);
        }
    }

    /*$sql = "SELECT id, nombre FROM invitados";
    $resultado = $conexion->query($sql);*/

    $sql = "SELECT * FROM registros INNER JOIN invitados ON registros.invitado_id = invitados.id";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()){
            echo '<div>
                    <form action="index.php" method="post">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                        <input type="text" name="nombre" value="'.$row['nombre'].'">
                        <input type="submit" name="editar" value="Editar">
                        <input type="submit" name="eliminar" value="Eliminar">
                    </form>
                </div>';
        }
    }

    $conexion->close();

    
?>
