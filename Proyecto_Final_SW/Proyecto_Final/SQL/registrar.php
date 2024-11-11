<?php 
    if(isset($_POST['registrar'])){
        //Datos de conexion
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="al223343";

        //Datos del formulario
        $email=$_POST['email'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $username2=$_POST['username2'];
        $contracena=$_POST['contracena'];
        $telefono=$_POST['telefono'];

        //Crea conexion a base de datos de MySQL
        $conn=new mysqli($servername,$username,$password,$dbname);
        $sql="INSERT INTO usuarios (email,nombre,apellido,username2,contracena,telefono) VALUES('$email','$nombre','$apellido','$username2','$contracena','$telefono')";

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