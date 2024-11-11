<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Riot Merch</title>
</head>

<body>
    <!--SVG - Modal - Header - Section - Footer-->

    <!-- Modal-->
    <?php include 'Content/cliente.php' ?>

    <!--SVG'S de header-->
    <?php include 'Content/svgs_header.php' ?>

    <!--SVG'S de Footer-->
    <?php include 'Content/svgs_footer.php' ?>

    <!--Header-->
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-danger">Principal</a></li>
                    <li><a href="ventas.php" class="nav-link px-2 text-danger">Ventas</a></li>
                    <li><a href="productos.php" class="nav-link px-2 text-white">Productos</a></li>
                    <li><a href="busqueda.php" class="nav-link px-2 text-danger">Busqueda</a></li>
                    <li><a href="contacto.php" class="nav-link px-2 text-danger">Contacto</a></li>
                </ul>
                <div class="text-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar
                    </button>
                    <button type="button" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- PHP CODE -->
    <?php
    include 'SQL/instalar.php';
    include 'SQL/desintalar.php';
    include 'SQL/registrar.php';
    include 'SQL/guardar_producto.php';
    ?>

    <!--Section-->
    <div class="container mt-4">
        <div class="modal-header mb-3">
            <h5 class="modal-title" >Registrar producto</h5>
        </div>
        <form class="row g-3 needs-validation" action="" method="post" novalidate>
            <div class="col-md-6">
                <label  class="form-label"> Nombre del producto:</label>
                <input type="text" class="form-control" name="nombre_del_producto"required>
                <div class="valid-feedback">
                    Bien!
                </div>
            </div>
            <div class="col-md-6">
                <label  class="form-label">Precio:</label>
                <input type="text" class="form-control" name="precio"required>
                <div class="valid-feedback">
                    Bien!
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Talla</label>
                <select class="form-select" name="talla" required>
                    <option selected disabled value="">Escoger</option>
                    <option value="s" name="s">S</option>
                    <option value="m" name="m">M</option>
                    <option value="x" name="x">X</option>
                    <option value="l" name="l">L</option>
                    <option value="xl" name="xl">XL</option>
                </select>
                <div class="invalid-feedback">
                    Por favor introduzca una talla.
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-label">Sexo</label>
                <select class="form-select" name="sexo" required>
                    <option selected disabled value="">Escoger</option>
                    <option value="hombre" name="hombre">Hombre</option>
                    <option value="mujer" name="mujer">Mujer</option>
                    <option value="unisex" name="unisex">Unisex</option>
                </select>
                <div class="invalid-feedback">
                    Por favor introduzca un sexo.
                </div>
            </div>
            <div class="col-md-3">
                <label class="form-label">Edicion</label>
                <select class="form-select" name="edicion" required>
                    <option selected disabled value="">Escoger</option>
                    <option value="Worlds 2021" name="Worlds 2021">Worlds 2024</option>
                    <option value="League of legends" name="League of legends">League of legends</option>
                    <option value="Valorant" name="Valorant">Valorant</option>
                </select>
                <div class="invalid-feedback">
                    Por favor escoja una edicion.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-danger" type="submit" name="guardar_producto">Guardar producto</button>
            </div>
        </form>
    </div>

    <!--Footer-->
    <?php include 'Content/footer.php' ?>

    <!-- Validacion Java -->
    <?php include 'Content/validacion_java.php' ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
</body>

</html>