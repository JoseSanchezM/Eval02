<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "Eval02");

if (mysqli_connect_errno()) {
  echo "Error al conectar con la base de datos: " . mysqli_connect_error();
  exit();
}

$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];
$precio_venta = $_POST['precio_venta'];

// Crear la consulta SQL para actualizar el registro
$sql = "UPDATE Producto SET Nombre='$nombre', Descripcion='$descripcion', Stock='$stock', PrecioVenta='$precio_venta' WHERE IdProducto='$id_producto'";
?>