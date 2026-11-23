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

    <!-- CATALOGO PRODUCTOS -->
    <div class="container bg-danger p-1">
        <div class="row bg-warning p-1">

            <div class="col-12">
                <div class="row bg-light py-2 rounded">
                    <div class="col-4">
                        <span style="font-family: sans-serif; font-size: 1.2rem; color: #4777a7; margin-top: 2px;">
                            Categorias
                        </span>
                    </div>

                    <div class="col-8">
                        <span style="font-family: sans-serif; font-size: 1.2rem; color: #4777a7; margin-top: 2px;">
                            Productos
                        </span>
                    </div>
                </div>
            </div>


            <div class="col-4">

                <div class="row bg-primary rounded">
                    <!--
                    <a href="#" class="col-4 btn btn-cat" data-cat="medialunas">
                        <img src='/tienda/Img/categorias/cat-medialunas.png' class=" img-fluid" alt="img rota">
                        medialunas
                    </a>


                    <a href="#" class="col-4 btn btn-cat" data-cat="tortas">
                        <img src='/tienda/Img/categorias/cat-medialunas.png' class=" img-fluid" alt="img rota">
                        tortas
                    </a>
                    -->
                    <form action="" method="POST" class="col-12">
                        <div class="row g-2">
                            <div class="col-6">
                                <button type="submit" name="accion" value="guardar" class="btn btn-light btn-cat w-100">
                                    <img src="/tienda/Img/categorias/cat-medialunas.png" class="img-fluid" alt="Medialunas">
                                    medialunas
                                </button>
                            </div>

                            <div class="col-6">
                                <button type="submit" name="categoria" value="tortas" class="btn btn-light btn-cat w-100">
                                    <img src="/tienda/Img/categorias/cat-medialunas.png" class="img-fluid" alt="Tortas">
                                    tortas
                                </button>
                            </div>

                            <div class="col-6">
                                <button type="submit" name="categoria" value="sacramentos" class="btn btn-light btn-cat w-100">
                                    <img src="/tienda/Img/categorias/cat-medialunas.png" class="img-fluid" alt="sacramentos">
                                    sacramentos
                                </button>
                            </div>

                            <div class="col-6">
                                <button type="submit" name="categoria" value="croissant" class="btn btn-light btn-cat w-100">
                                    <img src="/tienda/Img/categorias/cat-medialunas.png" class="img-fluid" alt="croissant">
                                    croissants
                                </button>
                            </div>

                            <div class="col-6">
                                <button type="submit" name="categoria" value="rejillas" class="btn btn-light btn-cat w-100">
                                    <img src="/tienda/Img/categorias/cat-medialunas.png" class="img-fluid" alt="rejillas">
                                    rejillas
                                </button>
                            </div>
                        </div>
                    </form>

                    <?php

                    $sql = "SELECT COUNT(*) AS total FROM productos";
                    $resultado = mysqli_query($conex, $sql);

                    if ($resultado) {
                        $fila = mysqli_fetch_assoc($resultado);
                        echo 'cantidad: ' . $fila['total'];
                    } else {
                        echo "Error en la consulta: " . mysqli_error($conex);
                    }


                    ?>





                </div>
            </div>

            <div class="col-8">
                <div class="row">
                    <?php
                    function gen_tarjeta($img, $titulo, $desc)
                    {

                        echo '
                    <div class="card col-4" style="max-width: 540px;">
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


                    // $imagen, $titulo, $descripcion, $precio, $stock


                    function  gen_categorias($conex)
                    {

                        $sql = "SELECT id_producto, producto, stock FROM productos";
                        $resultado = $conex->query($sql);
                        if ($resultado->num_rows > 0) {
                            while ($fila = $resultado->fetch_assoc()) {
                                #echo "ID: " . $fila["id_producto"] . " - producto: " . $fila["producto"] . "- cantidad: " . $fila["stock"] . "<br>";

                                gen_tarjeta('Img/productos/bolsa-medialunas2.jpeg', $fila["producto"], $fila["stock"]);
                            }
                        } else {
                            echo "0 resultados";
                        }

                        echo "Función ejecutada en la misma página.";
                    }

                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['accion'] ?? '') === 'guardar') {
                        gen_categorias($conex);
                    }


                    ?>



                </div>
            </div>

        </div>

    </div>



    <div>
        <?php include 'Includes/footer.php'; ?>
    </div>

    <!-- CONEXIÓN JS BOOTSTRAP (solo carga la librería) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- TU SCRIPT PROPIO (sin atributo src) -->
    <script>
        //const cat_ml = document.getElementById('cat_ml');
        //if (cat_ml) {
        //    cat_ml.addEventListener('click', function(event) {
        //        event.preventDefault();
        //        mifuncion();
        //    });
        //}
        //
        //function mifuncion() {
        //    alert('holanda');
        //}
        //
        //const cat_tortas = document.getElementById('cat_tort')
        //cat_tortas.addEventListener('click', alert('toltita'));

        //document.addEventListener('DOMContentLoaded', function() {
        //    const botones = document.querySelectorAll('.btn-cat')
        //
        //
        //    botones.forEach(function(btn) {
        //        btn.addEventListener('click', function(event) {
        //            event.preventDefault();
        //            const categoria = this.dataset.cat;
        //
        //            if (categoria === 'medialunas') {
        //                alert('holanda');
        //            } else if (categoria === 'tortas') {
        //                alert('toltita');
        //            } else {
        //                alert('categoria: ' + categoria);
        //            }
        //        });
        //
        //    });
        //});
    </script>

</body>

</html>