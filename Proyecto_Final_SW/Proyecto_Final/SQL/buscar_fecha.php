<?php 
    if (isset($_POST['buscar_fpago'])){
    
    //
    $c_fecha_de_pago = $_POST['c_fecha_de_pago'];

    //Datos de Conexion
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "al223343";

    // Crea conexion a MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    //
    $sql = "SELECT * FROM (ventas INNER JOIN usuarios ON ventas.email = usuarios.email) INNER JOIN productos
    ON ventas.id = productos.id WHERE ventas.fecha_de_pago LIKE '%$c_fecha_de_pago%'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='container mt-3'>
            <form action='' method='POST'>
                <div class='row'>
                    <div class='col-3 bg-light'>
                        <div class='mb-3'>
                            <label class='form-label'>Numero de venta:</label>
                            <input type='text' class='form-control' name='email' value='$row[ticket]' readonly>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Email:</label>
                            <input type='text' class='form-control' name='email' value='$row[email]' readonly>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Producto:</label>
                            <input type='text' class='form-control' name='producto' value='$row[nombre_del_producto]' readonly>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Tipo de pago:</label>
                            <input type='text' class='form-control' name='venta' value='$row[tipo_de_pago]' readonly>
                        </div>
                        <div class='mb-3'>
                            <label class='form-label'>Fecha de pago:</label>
                            <input type='text' class='form-control' name='venta' value='$row[fecha_de_pago]' readonly>
                        </div>
                    </div>
                </div>
            </form>
            </div>";
        }
    }
}

?>