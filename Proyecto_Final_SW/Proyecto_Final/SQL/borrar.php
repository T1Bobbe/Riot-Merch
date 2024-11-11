<?php
    if (isset($_POST['borrar'])){
        
        $id = $_POST['id'];

        //Datos de conexion
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "al223343";

        //Crea conexion a la base de datos
        $conn = new mysqli($servername, $username, $password, $dbname);

        //Borrar registro
        $sql = "DELETE FROM productos WHERE id = $id";

        if($result = $conn->query($sql) == TRUE){
            echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Todo correcto</strong> Producto eliminado.
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