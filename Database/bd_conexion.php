<?php
/*

class Conexion {
    private $host = 'localhost';
    private $db   = 'frozen';
    private $user = 'root';
    private $pass = '';
    private $charset = 'utf8mb4';
    private $pdo;
    private $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function conectar() {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $this->options);
            return $this->pdo;
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}

$conex = new mysqli("localhost", "root", "", "frozen");

if ($conex->connect_error) {
    die("Error de conexión: " . $conex->connect_error);
}
*/

/* Consulta SELECT
$sql = "SELECT id_producto, producto, cantidad FROM productos";
$resultado = $conex->query($sql);

if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id_producto"] . " - producto: " . $fila["producto"] ."- cantidad: ".$fila["cantidad"]."<br>";
    }
} else {
    echo "0 resultados";
}
*/

?>





<?php
/*

$host     = 'localhost';
$usuario  = 'root';
$password = '';
$base_datos = 'frozen';# nombre en phpmyadmin(no local)

// 1. CONEXION
$conexion = mysqli_connect($host, $usuario, $password, $base_datos);

// 2. MSJ FALLO DE CONEXION
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8mb4");

echo "¡Conexión exitosa a la base de datos de forma procedural!";



$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
*/
?>
<!--
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
        /* 3. Recorrer los resultados
        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($fila['id_producto']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['producto']) . "</td>";
                echo "<td>" . htmlspecialchars($fila['cantidad']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3' style='text-align: center;'>No hay registros en la base de datos.</td></tr>";
        }
            */
        ?>
    </table>

</body>
</html>
-!>



<?php
// 4. Liberar memoria y cerrar la conexión- mysqli_free_result($resultado);mysqli_close($conexion);




?>