<?php
// TEMPO AYUDA
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './Database/bd_conexion.php';
//seria el count de tipo en la base de datos
$cantcol = 6;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CONEXION A BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Productos</title>
</head>

<body>

    <div>
        <?php include 'Includes/navbar.php'; ?>
    </div>

    <!--SUBTITULO PRODUCTOS-->

    <div class="m-5" style="display: flex; flex-direction: column; align-items: flex-start; line-height: 1;">
        <span style="font-family: sans-serif; font-weight: bold; color: #000000; font-size: 1.7rem; text-transform: uppercase;">
            PRODUCTOS
        </span>
        <span style="font-family: sans-serif; font-size: 1.0rem; color: #4777a7; margin-top: 2px;">
            Selecciona en una amplia variedad y cantidad de productos que mas te gusten
        </span>
    </div>

    <div class="container">
        <div class="row bg-warning p-1 rounded-2">

            <style>
                .btn-cat-sm {
                    width: 90px;
                    /* Tamaño compacto (alto ~67px en 4:3) */
                    max-width: 100%;
                    /* Evita desbordes en pantallas muy angostas */
                    aspect-ratio: 4 / 3;
                }
            </style>

            <div class="row col-4 bg-success p-2 rounded-2 g-2">
                <div class="col-12">
                    <span style="font-family: sans-serif; font-size: 1.2rem; color: #4777a7; margin-top: 2px;">
                        Categorias
                    </span>
                </div>

                <div class="col-6 d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-secondary rounded-4 overflow-hidden btn-cat-sm p-0">
                        <img src="Img/categorias/cat-medialunas.png" alt="Medialunas" class="w-100 h-100 object-fit-cover d-block">
                    </button>
                </div>

                <div class="col-6 d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-secondary rounded-4 overflow-hidden btn-cat-sm p-0">
                        <img src="Img/categorias/cat-medialunas.png" alt="Medialunas" class="w-100 h-100 object-fit-cover d-block">
                    </button>
                </div>

                <div class="col-6 d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-secondary rounded-4 overflow-hidden btn-cat-sm p-0">
                        <img src="Img/categorias/cat-medialunas.png" alt="Medialunas" class="w-100 h-100 object-fit-cover d-block">
                    </button>
                </div>

                <div class="col-6 d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-secondary rounded-4 overflow-hidden btn-cat-sm p-0">
                        <img src="Img/categorias/cat-medialunas.png" alt="Medialunas" class="w-100 h-100 object-fit-cover d-block">
                    </button>
                </div>

                <div class="col-6 d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-secondary rounded-4 overflow-hidden btn-cat-sm p-0">
                        <img src="Img/categorias/cat-medialunas.png" alt="Medialunas" class="w-100 h-100 object-fit-cover d-block">
                    </button>
                </div>

                <div class="col-6 d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-secondary rounded-4 overflow-hidden btn-cat-sm p-0">
                        <img src="Img/categorias/cat-medialunas.png" alt="Medialunas" class="w-100 h-100 object-fit-cover d-block">
                    </button>
                </div>

                <div class="col-6 d-flex justify-content-center">
                    <button type="button" class="btn btn-outline-secondary rounded-4 overflow-hidden btn-cat-sm p-0">
                        <img src="Img/categorias/cat-medialunas.png" alt="Medialunas" class="w-100 h-100 object-fit-cover d-block">
                    </button>
                </div>
            </div>


            <div class="row col-8 bg-secondary p-1 rounded-2">
                <span style="font-family: sans-serif; font-size: 1.2rem; color: #4777a7; margin-top: 2px;">
                    productos
                </span>
                <?php
                //$saludo = $saludo . ' nicoooooo';
                //echo $saludo;

                function gen_tarjeta($img, $titulo, $desc)
                {



                    echo '
                    <div class="card mb-3 col-6"style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src=' . $img . ' class="img-fluid rounded-start" alt="Imagen">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">' . $titulo . '</h5>
                                <p class="card-text">' . $desc . '</p>
                                <a href="//localhost/tienda/productos.php" class="btn btn-success">Añadir</a>

                            </div>
                        </div>
                    </div>
                    </div>

                    ';
                }

                $imagen = '/tienda/Img/Inicio/productos/bolsa-medialunas2.jpeg';
                $tittle = 'mi titulo';
                $descrip = 'una descripcion cualquiera';

                //CONSULTA A BASE DE DATOS
                $sql = "SELECT id_producto, producto, stock FROM productos";
                $resultado = $conex->query($sql);

                // $imagen, $titulo, $descripcion, $precio, $stock

                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        # echo "ID: " . $fila["id_producto"] . " - producto: " . $fila["producto"] . "- cantidad: " . $fila["stock"] . "<br>";
                        $imagen = 'Img/productos/bolsa-medialunas2.jpeg';
                        gen_tarjeta($imagen, $fila["producto"], $fila["stock"]);
                    }
                } else {
                    echo "0 resultados";
                }




                #                $sqlcount = "SELECT COUNT(*) FROM productos";
                #                $resultadocount = $conex->query($sqlcount);
                #                $fila2 = $resultadocount->fetch_row();
                #                echo $fila2[0];
                #
                #                for ($i = 1; $i <= $fila2[0]; $i++) {
                #
                #                    print gen_tarjeta($imagen, $fila2[0], $descrip);
                #                }






                ?>
                <div class="card mb-3 <?php echo 'col-' . $cantcol; ?>" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="tu-imagen.jpg" class="img-fluid rounded-start" alt="Imagen">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Título de la tarjeta</h5>
                                <p class="card-text">Este es un ejemplo de una tarjeta horizontal en Bootstrap con la imagen al costado.</p>
                                <a href="//localhost/tienda/productos.php" class="btn btn-success">Añadir</a>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>



    <div>
        <?php include 'Includes/footer.php'; ?>
    </div>

    <!--CONEXION JS BOOTSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>