<?php
// Datos de conexión a la base de datos
$host="sql305.byethost7.com";
$db_user="b7_37267423";
$db_password="nz*y6_ZzM7.5&95";
$db_name="b7_37267423_mauricio1";

// Establecer conexión con la base de datos
$conexion = mysqli_connect($host, $db_user, $db_password, $db_name);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consultar los datos de la tabla personas
$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conexion, $sql);

// Crear la tabla HTML para mostrar los datos
 echo '<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>


<div class="container">
<h2>Datos de la Tabla clientes</h2>
<table border="1" class="table">
<tr><th>Nombre</th><th>Telefono</th><th>Domicilio</th><th>Pedido</th></tr>';



while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>".$fila['Nombre']."</td>";
    echo "<td>".$fila['Telefono']."</td>";
    echo "<td>".$fila['Domicilio']."</td>";
    echo "<td>".$fila['Pedido']."</td>";
    echo "</tr>";
}

echo "</table>";

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>