<?php

//Datos de Conexion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "al223343";

// Crea conexion a MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

$email=[];
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        array_push($email, $row['email']);
    }
}

//imprime los correos
foreach($email as $index){
    echo ("<option value='$index'>$index</option>");
}
?>