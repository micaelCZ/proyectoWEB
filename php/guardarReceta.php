<?php
try {
  // Conexión a la base de datos utilizando PDO
  $db = new PDO('sqlite:../db/materiaPrima.db');

  // Preparar una sentencia SQL para insertar un nuevo registro en la tabla de productos
  $stmt = $db->prepare('INSERT INTO ordenes (codigo, producto, cantidad) VALUES (:codigo, :producto, :cantidad)');

  // Asignar valores a los parámetros de la sentencia SQL
  $stmt->bindParam(':codigo', $_POST['codigo']);
  $stmt->bindParam(':producto', $_POST['producto']);
  $stmt->bindParam(':cantidad', $_POST['cantidad']);

  // Ejecutar la sentencia SQL
  $stmt->execute();

  // Cerrar la conexión a la base de datos
  $db = null;

  // Redireccionar al usuario a una página de éxito
  header('Location: ../html/recetas.html');
} catch (PDOException $e) {
  // Mostrar un mensaje de error si hay un problema con la conexión a la base de datos
  echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>
