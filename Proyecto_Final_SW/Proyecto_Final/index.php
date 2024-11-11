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
    <?php include 'Content/cliente.php'?>

    <!--SVG'S de header-->
    <?php include 'Content/svgs_header.php'?>

    <!--SVG'S de Footer-->
    <?php include 'Content/svgs_footer.php'?>
    
    <!--Header-->
    <header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-white">Principal</a></li>
            <li><a href="ventas.php" class="nav-link px-2 text-danger">Ventas</a></li>
            <li><a href="productos.php" class="nav-link px-2 text-danger">Productos</a></li>
            <li><a href="busqueda.php" class="nav-link px-2 text-danger">Busqueda</a></li>
            <li><a href="contacto.php" class="nav-link px-2 text-danger">Contacto</a></li>
          </ul>
  
          <div class="text-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Registrar
            </button>
            <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
            </svg></button>
          </div>
        </div>
      </div>
    </header>

    <!-- PHP CODE -->
    <?php 
    include 'SQL/instalar.php';
    include 'SQL/desintalar.php';
    include 'SQL/registrar.php';
    ?>

    <!--Section-->
    <main>

      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">RIOT MERCH</h1>
            <p class="lead text-muted"></p>
            <form action="" method="post">
              <p>
                <button class="btn btn-danger my-2" type="submit" name="instalar">Instalar</button>
                <button class="btn btn-dark my-2" type="submit" name="desinstalar">Desinstalar</button>
              </p>
            </form>
          </div>
        </div>
      </section>
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col-1">
            <div class="card shadow-sm">
              <img src="https://merch.riotgames.com/_next/image/?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fdsfx7636%2Fconsumer_products%2F9e18b0dcdd9195f18dfb906dae078aae43c76de8-2560x2560.png&w=1920&q=75" class="card-img-top" alt="...">
  
              <div class="card-body">
                <p class="card-text">Camiseta deportiva de manga larga de Supernova
                  42,00 €</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">Comprar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Añadir al carrito</button>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://merch.riotgames.com/_next/image/?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fdsfx7636%2Fconsumer_products_live%2Ffe98c4c40ec33a656bf3e1e3e78995147d5aa711-2560x2560.png&w=1920&q=75" class="card-img-top" alt="...">
  
              <div class="card-body">
                <p class="card-text">Camiseta de manga larga de Omen de VALORANT
                  34,00 €</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">Comprar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Añadir al carrito</button>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://merch.riotgames.com/_next/image/?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fdsfx7636%2Fconsumer_products%2Fb0ff2d8edad9d254ec1080b24ec7a1528fb06d6c-2560x2560.png&w=1920&q=75" class="card-img-top" alt="...">
  
              <div class="card-body">
                <p class="card-text">Camiseta de manga larga de Sage de VALORANT
                  34,00 €</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">Comprar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Añadir al carrito</button>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://merch.riotgames.com/_next/image/?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fdsfx7636%2Fconsumer_products%2F2aa8cc86fbde0150a59097d01f2543fd0da0c2c5-2560x2560.png&w=1920&q=75" class="card-img-top" alt="...">
  
              <div class="card-body">
                <p class="card-text">Camiseta de Iso de VALORANT
                  42,00 €</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">Comprar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Añadir al carrito</button>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://merch.riotgames.com/_next/image/?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fdsfx7636%2Fconsumer_products%2Fc70de7e9239ace3053ac4757ce18f43e18903707-2560x2560.png&w=1920&q=75" class="card-img-top" alt="...">
  
              <div class="card-body">
                <p class="card-text">Camiseta de manga corta de Ambessa de Arcane
                  79,50 €
                  </p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">Comprar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Añadir al carrito</button>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://merch.riotgames.com/_next/image/?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fdsfx7636%2Fconsumer_products%2Fe759e63a17335f2c9c5c55a2af01590a5170b818-2560x2560.png&w=1920&q=75" class="card-img-top" alt="...">
  
              <div class="card-body">
                <p class="card-text">Camiseta de manga larga de Killjoy de VALORANT
                  31,50 €</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">Comprar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Añadir al carrito</button>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://merch.riotgames.com/_next/image/?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fdsfx7636%2Fconsumer_products%2F18f445b24195d252f8dedb301a08734421c013fa-2560x2560.png&w=1920&q=75" class="card-img-top" alt="...">
  
              <div class="card-body">
                <p class="card-text">Camiseta de Lux del Mundial 2024
                  31,50 €</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">Comprar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Añadir al carrito</button>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://merch.riotgames.com/_next/image/?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fdsfx7636%2Fconsumer_products%2Fda5d31acf81a83897703c264e0debf78554bc66d-2560x2560.png&w=1920&q=75" class="card-img-top" alt="...">
  
              <div class="card-body">
                <p class="card-text">Camiseta de Tahm Kench maestro chef
                  31,50 €</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">Comprar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Añadir al carrito</button>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://merch.riotgames.com/_next/image/?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fdsfx7636%2Fconsumer_products_live%2F2bf9b8f598d24283a8020ed0aad9de9cb0287fad-2560x2560.png&w=1920&q=75" class="card-img-top" alt="...">
  
              <div class="card-body">
                <p class="card-text">Camiseta de Viper de VALORANT
                  31,50 €</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-danger">Comprar</button>
                    <button type="button" class="btn btn-sm btn-outline-danger">Añadir al carrito</button>
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>
    
    <!--Footer-->
    <?php include 'Content/footer.php' ?>

    <!-- Validacion Java -->
    <?php include 'Content/validacion_java.php'?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>