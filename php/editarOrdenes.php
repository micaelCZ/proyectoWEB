<?php
//Conexión a la base de datos
$db = new PDO('sqlite:../db/materiaPrima.db');

if(isset($_POST['submit'])) {
  //Obtener los datos del formulario
  $id = $_POST['id'];
  $nombre = $_POST['codigo'];
  $cantidad = $_POST['producto'];
  $unidad = $_POST['cantidad'];

  //Actualizar los datos en la base de datos
  $query = "UPDATE ordenes SET codigo='$codigo', producto='$producto', cantidad='$cantidad', WHERE id='$id'";
  $db->exec($query);

  //Redirigir al usuario a la página principal
  header("Location: ../php/oProduccion.php");
}

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  //Consulta para obtener el producto a editar
  $query = "SELECT * FROM ordenes WHERE id='$id'";
  $result = $db->query($query);
  $row = $result->fetch(PDO::FETCH_ASSOC);

}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Editar producto</title>
    <link rel="icon" type="image/png" href="../img/logo.png"/>
    
    <link rel="stylesheet" href="../css/estilo1.css">
    <meta charset="utf-8">
  </head>
  <body>
    <!--Barra de navegación-->
  <header>
    <div class="navbar-container">
    </div>
  </header>
    <h2>Editar producto</h2>
    <form method="POST">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <label>Producto:</label>
      <input type="text" name="producto" autofocus value="<?php echo $row['producto']; ?>"><br>
      <label>Codigo:</label>
      <input type="text" name="codigo" value="<?php echo $row['codigo']; ?>"><br>
      <label>Cantidad:</label>
      <input type="text" name="cantidad" value="<?php echo $row['cantidad']; ?>"><br>
      <input type="submit" name="submit" value="Guardar cambios">
    </form>
  </body>
  <!-- Script que carga la barra de navegación-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function(){
      $('.navbar-container').load('../html/navbar.html');
    });
  </script>
</html>
