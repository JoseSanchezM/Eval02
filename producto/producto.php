<?php
// Conexión a la bd
$conexion = mysqli_connect("localhost", "usuario", "contraseña", "eval02");

if (mysqli_connect_errno()) {
  echo "Error al conectar con la base de datos: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM Producto";

$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
  
  echo "<table>";
  echo "<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Stock</th><th>Precio de venta</th></tr>";
  while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr><td>" . $fila['IdProducto'] . "</td><td>" . $fila['Nombre'] . "</td><td>" . $fila['Descripcion'] . "</td><td>" . $fila['Stock'] . "</td><td>" . $fila['PrecioVenta'] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No se encontraron productos.";
}

mysqli_free_result($resultado);

// Cerrar la conexión
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    <h1>Producto</h1>
    <form action="buscar.php" method="POST">
        <label>Buscar producto:</label>
        <input type="text" name="busqueda">
        <button type="submit">Buscar</button>
    </form>

</body>
</html>