<?php
if (isset($_POST["instalar"])) {
  // Datos de conexión
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "al223343";

  // Crear conexión a MySQL
  $conn = new mysqli($servername, $username, $password);

  // Verificar la conexión
  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }

  // Verificar si la base de datos ya existe
  $db_check = $conn->query("SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'");
  if ($db_check->num_rows == 0) {
    // Crear base de datos si no existe
    if ($conn->query("CREATE DATABASE $dbname") === TRUE) {
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
      <strong>Todo correcto</strong> la base de datos '$dbname' ha sido creada.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    } else {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Error:</strong> No se pudo crear la base de datos '$dbname': " . $conn->error . "
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      exit();
    }
  } else {
    echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
    <strong>Nota:</strong> La base de datos '$dbname' ya existe.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
  }

  // Crear conexión a la base de datos específica
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Crear tabla de usuarios
  $sql = "CREATE TABLE IF NOT EXISTS usuarios (
    email VARCHAR(255) NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    username2 VARCHAR(255) NOT NULL, 
    contracena VARCHAR(255) NOT NULL, 
    telefono VARCHAR(255) NOT NULL, 
    PRIMARY KEY (email)
  )";
  $conn->query($sql);

  // Crear tabla de productos
  $sql = "CREATE TABLE IF NOT EXISTS productos (
    id INT NOT NULL AUTO_INCREMENT,
    nombre_del_producto VARCHAR(255) NOT NULL,
    precio FLOAT NOT NULL,
    talla VARCHAR(255) NOT NULL,
    sexo VARCHAR(255) NOT NULL,
    edicion VARCHAR(255) NOT NULL, 
    PRIMARY KEY (id)
  )";
  $conn->query($sql);

  // Crear tabla de ventas
  $sql = "CREATE TABLE IF NOT EXISTS ventas (
    ticket INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    id INT NOT NULL,
    tipo_de_pago VARCHAR(255) NOT NULL,
    fecha_de_pago VARCHAR(255) NOT NULL, 
    PRIMARY KEY (ticket)
  )";
  $conn->query($sql);

  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Éxito:</strong> Las tablas se han creado correctamente.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";

  // Cerrar conexión
  $conn->close();
}
?>
