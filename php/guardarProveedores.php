<?php
try {
  // Conexión a la base de datos utilizando PDO
  $db = new PDO('sqlite:../db/materiaPrima.db');

  // Preparar una sentencia SQL para insertar un nuevo registro en la tabla de productos
  $stmt = $db->prepare('INSERT INTO proveedores (nombre, direccion, telefono, correo) VALUES (:nombre, :direccion, :telefono, :correo)');

  // Asignar valores a los parámetros de la sentencia SQL
  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->bindParam(':direccion', $_POST['direccion']);
  $stmt->bindParam(':telefono', $_POST['telefono']);
  $stmt->bindParam(':correo', $_POST['correo']);
  

  // Ejecutar la sentencia SQL
  $stmt->execute();

  // Cerrar la conexión a la base de datos
  $db = null;

  // Redireccionar al usuario a una página de éxito
  header('Location: modificar_p.php');
} catch (PDOException $e) {
  // Mostrar un mensaje de error si hay un problema con la conexión a la base de datos
  echo "Error al conectar a la base de datos: " . $e->getMessage();
}
?>
