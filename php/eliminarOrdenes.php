<?php
//Conexión a la base de datos
$db = new PDO('sqlite:../db/materiaPrima.db');

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  //Consulta para eliminar el producto de la base de datos
  $query = "DELETE FROM ordenes WHERE id='$id'";
  $db->exec($query);

  //Redirigir al usuario a la página principal
  header("Location: ../php/oProduccion.php");
}
?>
