<?php
// TEMPO AYUDA
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CONEXION A BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Frozen: Panificados congelados.</title>
</head>


<body class="container-fluid">
    <div class="d-flex flex-column">
        <div>
            <?php include 'Includes/navbar.php'; ?>
        </div>

        <!--BANNER-->
        <div class="d-flex justify-content-center" style="
              
              padding: 12px 20px;
              background-color: #ffffff;
              border-radius: 16px;
              border: 0px solid #000000;
              box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
              display: inline-flex;
              align-items: center;
              gap: 12px;
            ">
            <img
                src="Img/Inicio/banner1.png"
                style="width: 85%; height: 400px; border-radius: 10px; object-fit: cover;" />

        </div>

        <!--PRODUCTOS-->
        <div>
            <!--SUBTITULO NUESTROS PORDUCTOS-->
            <li>
                <div class="m-5" style="display: flex; flex-direction: column; align-items: flex-start; line-height: 1;">
                    <span style="font-family: sans-serif; font-weight: bold; color: #000000; font-size: 1.5rem; text-transform: uppercase;">
                        Nuestros productos
                    </span>
                    <span style="font-family: sans-serif; font-size: 0.95rem; color: #4777a7; margin-top: 2px;">
                        echale un vistazo a estos productos!
                    </span>
                </div>
            </li>

            <!--CARTS-->
            <div class="d-flex justify-content-center">
                <!--CARTS TORTAS-->
                <div class="card m-3" style="width: 25rem;">
                    <img src="Img/Inicio/tortas.jpeg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 style="font-family: sans-serif; font-weight: bold; color: #000000; font-size: 1.2rem; text-transform: uppercase;" class="card-title">Tortas</h5>
                        <p style="font-family: sans-serif; font-size: 0.85rem; color: #70b7ff;" class="card-text">una gran variacion de tortas pinchadas, raspadas y de hoja.</p>
                        <a href="//localhost/tienda/productos.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <!--CARTS FACTURAS-->
                <div class="card m-3" style="width: 25rem;">
                    <img src="Img/Inicio/facturas.jpeg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 style="font-family: sans-serif; font-weight: bold; color: #000000; font-size: 1.2rem; text-transform: uppercase;" class="card-title">Facturas</h5>
                        <p style="font-family: sans-serif; font-size: 0.85rem; color: #70b7ff;" class="card-text">Las mejores facturas de manteca y margarina con un gran hojaldre.</p>
                        <a href="//localhost/tienda/productos.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <!--CARTS ROLES-->
                <div class="card m-3" style="width: 25rem;">
                    <img src="Img/Inicio/roll.jpeg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 style="font-family: sans-serif; font-weight: bold; color: #000000; font-size: 1.2rem; text-transform: uppercase;" class="card-title">Roles</h5>
                        <p style="font-family: sans-serif; font-size: 0.85rem; color: #70b7ff;" class="card-text">sorprendete con unos roles saludables de canela de chocolate, pasas y pinstacho.</p>
                        <a href="//localhost/tienda/productos.php" class="btn btn-primary">ver productos</a>
                    </div>
                </div>

            </div>

        </div>
        <!--SUBTITULO ENVIOS-->

        <div class="m-5" style="display: flex; flex-direction: column; align-items: flex-start; line-height: 1;">
            <span style="font-family: sans-serif; font-weight: bold; color: #000000; font-size: 1.5rem; text-transform: uppercase;">
                ENVIO PROPIO
            </span>
            <span style="font-family: sans-serif; font-size: 0.95rem; color: #4777a7; margin-top: 2px;">
                tambien podes venir a nuestra fabrica
            </span>
        </div>

        <div class="d-flex justify-content-center">        <!--BANNER ENVIOS-->
        <div class="d-flex justify-content-center" style="
              
              padding: 12px 20px;
              background-color: #ffffff;
              border-radius: 16px;
              border: 0px solid #000000;
              box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
              display: inline-flex;
              align-items: center;
              gap: 12px;
            ">
            <img
                src="Img/Inicio/envios.png"
                style="width: 100%; height: 500px; border-radius: 10px; object-fit: cover;" />

        </div>
        <div>
                   <div class="d-flex justify-content-center" style="
              
              padding: 12px 20px;
              background-color: #ffffff;
              border-radius: 16px;
              border: 0px solid #000000;
              box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
              display: inline-flex;
              align-items: center;
              gap: 12px;
            ">
            <img
                src="Img/Inicio/info.png"
                style="width: 100%; height: 300px; border-radius: 10px; object-fit: cover;" />

        </div>
        </div>
        </div>


        <div>
            <?php include 'Includes/footer.php'; ?>
        </div>
    </div>
    <!--CONEXION JS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>