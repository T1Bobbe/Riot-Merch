<?php
//Desinstalar base de datos
if (isset($_POST['desinstalar'])){

//Datos de conexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "al223343";

//Crea conexion a MySQL
$conn = new mysqli($servername, $username, $password);

//Borrar la base de datos
$sql = "DROP DATABASE $dbname";

if ($conn->query($sql) == TRUE){
    echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Todo correcto</strong> base de datos desinstalada correctamente.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
} else {
    echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Algo salio mal</strong> Fallo.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
  }

//Cerrar conexion
$conn->close();
}
?>