<?php
// Datos de conexion a la base de datos
$host="sql305.byethost7.com";
$db_user="b7_37267423";
$db_password="nz*y6_ZzM7.5&95";
$db_name="b7_37267423_mauricio1";

//Establecer conexion con la base de datos
$conexion=mysqli_connect($host, $db_user, $db_password, $db_name);

//Verificar si la conexion fue exitosa
if (!$conexion){
    die("Error de conexion: " . mysqli_connect_error());
}

//Optener los datos del formulario
$Nombre = $_POST['Nombre'];
$Telefono = $_POST['Telefono'];
$Domicilio = $_POST['Domicilio'];
$Pedido = $_POST['Pedido'];

//Insertar los datos en la base de datos
$sql="INSERT INTO clientes (Nombre, Telefono, Domicilio, Pedido) VALUES ('$Nombre', '$Telefono', '$Domicilio', '$Pedido')";

if (mysqli_query($conexion, $sql)) {
    echo "Datos guardados correctamente.";
} else {
    echo "Error al guardar los datos:" . mysqli_error($conexion);
}

//Cerrar la conexion a la base de datos
    mysqli_close($conexion);
?>