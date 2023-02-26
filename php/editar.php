<?php
//Conexión a la base de datos
$db = new PDO('sqlite:../db/materiaPrima.db');

if(isset($_POST['submit'])) {
  //Obtener los datos del formulario
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $cantidad = $_POST['cantidad'];
  $unidad = $_POST['unidad'];
  $fecha_vencimiento = $_POST['fecha_vencimiento'];

  //Actualizar los datos en la base de datos
  $query = "UPDATE productos SET nombre='$nombre', cantidad='$cantidad', unidad='$unidad', fecha_vencimiento='$fecha_vencimiento' WHERE id='$id'";
  $db->exec($query);

  //Redirigir al usuario a la página principal
  header("Location: ../html/modificar.html");
}

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  //Consulta para obtener el producto a editar
  $query = "SELECT * FROM productos WHERE id='$id'";
  $result = $db->query($query);
  $row = $result->fetch(PDO::FETCH_ASSOC);

}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Editar producto</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Editar producto</h2>
    <form method="POST">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <label>Nombre:</label>
      <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>
      <label>Cantidad:</label>
      <input type="number" name="cantidad" value="<?php echo $row['cantidad']; ?>"><br>
      <label>Unidad:</label>
      <input type="text" name="unidad" value="<?php echo $row['unidad']; ?>"><br>
      <label>Fecha de vencimiento:</label>
      <input type="date" name="fecha_vencimiento" value="<?php echo $row['fecha_vencimiento']; ?>"><br>
      <input type="submit" name="submit" value="Guardar cambios">
    </form>
  </body>
</html>
