<?php

$conexion = mysqli_connect("localhost", "usuario", "contraseña", "Eval02");

if (mysqli_connect_errno()) {
  echo "Error al conectar con la base de datos: " . mysqli_connect_error();
  exit();
}

$busqueda = $_POST['busqueda'];

$sql = "SELECT * FROM Producto WHERE Nombre LIKE '%$busqueda%'";

$resultado = mysqli_query($conexion, $sql);

echo "<table>";
echo "<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Stock</th><th>Precio de venta</th></tr>";
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo "<tr>";
  echo "<td>".$fila['IdProducto']."</td>";
  echo "<td>".$fila['Nombre']."</td>";
  echo "<td>".$fila['Descripcion']."</td>";
  echo "<td>".$fila['Stock']."</td>";
  echo "<td>".$fila['PrecioVenta']."</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($conexion);
?>
