<?php 
    if(isset($_POST['guardar_venta'])){
        //Datos de conexion
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="al223343";

        //Datos del formulario
        
        $email=$_POST['email'];
        $b_producto=$_POST['b_producto'];
        $tipo_de_pago=$_POST['tipo_de_pago'];
        $fecha_de_pago=$_POST['fecha_de_pago'];

        //Crea conexion a base de datos de MySQL
        $conn=new mysqli($servername,$username,$password,$dbname);
        $sql="INSERT INTO ventas (email,id,tipo_de_pago,fecha_de_pago) 
          VALUES('$email','$b_producto','$tipo_de_pago','$fecha_de_pago')";

        //Verifica si la operacion se pudo completar con exito
        if($conn->query($sql)===TRUE){
            echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Todo correcto</strong> Venta creada.
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