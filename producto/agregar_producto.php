<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "eval02");

if (mysqli_connect_errno()) {
  echo "Error al conectar con la base de datos: " . mysqli_connect_error();
  exit();
}

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$precio_venta = $_POST['precio_venta'];

$sql = "INSERT INTO Producto (Nombre, Descripcion, Stock, PrecioVenta) 
        VALUES ('$nombre', '$descripcion', '$stock', '$precio_venta')";

if (mysqli_query($conexion, $sql)) {
  echo "Producto registrado correctamente.";
} else {
  echo "Error al registrar el producto: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
