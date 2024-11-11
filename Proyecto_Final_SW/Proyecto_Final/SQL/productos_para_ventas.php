<?php

//Datos de Conexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "al223343";

// Crea conexion a MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

$id=[];
$producto=[];
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        array_push($producto, $row['nombre_del_producto']);
        array_push($id, $row['id']);
    }
}

$cantidad = count($id);
for ($i = 0; $i < $cantidad; $i++){
    echo ("<option value='$id[$i]'>$producto[$i]</option>");
}
?>