<?php 
    if(isset($_POST['guardar_producto'])){
        //Datos de conexion
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="al223343";

        //Datos del formulario
        $nombre_del_producto=$_POST['nombre_del_producto'];
        $precio=$_POST['precio'];
        $talla=$_POST['talla'];
        $sexo=$_POST['sexo'];
        $edicion=$_POST['edicion'];

        //Crea conexion a base de datos de MySQL
        $conn=new mysqli($servername,$username,$password,$dbname);
        $sql="INSERT INTO productos (nombre_del_producto,precio,talla,sexo,edicion) 
          VALUES('$nombre_del_producto','$precio','$talla','$sexo','$edicion')";

        //Verifica si la operacion se pudo completar con exito
        if($conn->query($sql)===TRUE){
            echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Todo correcto</strong> Registro creado.
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