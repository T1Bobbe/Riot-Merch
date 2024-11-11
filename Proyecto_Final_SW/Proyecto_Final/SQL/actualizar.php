<?php
    if (isset($_POST['actualizar'])){
        
        $id = $_POST['id'];
        $producto = $_POST['producto'];
        $precio = $_POST['precio3'];
        $talla = $_POST['talla'];
        $sexo = $_POST['sexo'];
        $edicion = $_POST['edicion'];

        //Datos de conexion
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "al223343";

        //Crea conexion a la base de datos
        $conn = new mysqli($servername, $username, $password, $dbname);

        //Actualizar registro
        $sql = "UPDATE productos SET nombre_del_producto = '$producto', precio = '$precio', talla = '$talla', sexo = '$sexo', edicion = '$edicion' WHERE id = '$id' ";

        if($result = $conn->query($sql) === TRUE){
            echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Todo correcto</strong> Producto actualizado.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        } else {
            echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Algo salio mal</strong> Fallo.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
        $conn->close();
    }
?>