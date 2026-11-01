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
        <?php include 'Includes/navbar.php';?>
        </div>
        
        <!--BANNER-->
        <div>
            <img src="./Img/Inicio/frozen-banner.png" alt="Logo" width="100%" height="550" class="d-inline-block align-text-top">
        </div>
        
        <!--PRODUCTOS-->
        <div>
            <h1>Echale un vistazo a estos productos..</h1>
            
            <!--CARTS-->
            <div class="d-flex justify-content-between">
                <div class="card" style="width: 25rem;">
                    <img src="Img/Inicio/tortas.jpeg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Tortas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card" style="width: 25rem;">
                    <img src="Img/Inicio/facturas.jpeg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Facturas</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

                <div class="card" style="width: 25rem;">
                    <img src="Img/Inicio/roll.jpeg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Roles</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                
            </div>
        </div>

        <div>
        <?php include 'Includes/footer.php';?>
        </div>
    </div>
    <!--CONEXION JS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>