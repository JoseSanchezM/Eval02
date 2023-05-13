<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "Eval02");

if (mysqli_connect_errno()) {
  echo "Error al conectar con la base de datos: " . mysqli_connect_error();
  exit();
}

$id_producto = $_POST['id_producto'];

$sql = "DELETE FROM Producto WHERE IdProducto='$id_producto'";

if (mysqli_query($conexion, $sql)) {
  echo "Producto eliminado correctamente.";
} else {
  echo "Error al eliminar el producto: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
