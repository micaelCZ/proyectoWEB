<?php
//Conexión a la base de datos
$db = new PDO('sqlite:../db/materiaPrima.db');

if(isset($_POST['submit'])) {
  //Obtener los datos del formulario
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $cantidad = $_POST['direccion'];
  $unidad = $_POST['telefono'];
  $fecha_vencimiento = $_POST['correo'];

  //Actualizar los datos en la base de datos
  $query = "UPDATE proveedores SET nombre='$nombre', direccion='$direccion', telefono='$telefono', correo='$correo' WHERE id='$id'";
  $db->exec($query);

  //Redirigir al usuario a la página principal
  header("Location: ../php/modificar_p.php");
}

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  //Consulta para obtener el producto a editar
  $query = "SELECT * FROM proveedores WHERE id='$id'";
  $result = $db->query($query);
  $row = $result->fetch(PDO::FETCH_ASSOC);

}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Editar Proveedor</title>
    <link rel="stylesheet" href="../css/estilo1.css">
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Editar producto</h2>
    <form method="POST">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <label>Nombre:</label>
      <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>
      <label>Direccion:</label>
      <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>"><br>
      <label>Telefono:</label>
      <input type="number" name="telefono" value="<?php echo $row['telefono']; ?>"><br>
      <label>Correo:</label>
      <input type="mail" name="correo" value="<?php echo $row['correo']; ?>"><br>
      <input type="submit" name="submit" value="Guardar cambios">
    </form>
  </body>
</html>
