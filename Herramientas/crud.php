<?php

// TEMPO AYUDA
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 1. Incluir el archivo de conexión (esto reutiliza la variable $conexion)
include './Database/bd_conexion.php';

// 2. Consulta SQL para leer los datos
$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Leer Datos en Archivo Aparte</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h1>Lista de Usuarios</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>

        <?php
        // 3. Recorrer los resultados
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['id']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['email']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3' style='text-align: center;'>No hay registros en la base de datos.</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
// 4. Liberar memoria y cerrar la conexión
mysqli_free_result($resultado);
mysqli_close($conexion);
?>