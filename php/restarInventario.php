<?php
try {
  // Conexión a la base de datos utilizando PDO
  $db = new PDO('sqlite:../db/materiaPrima.db');

  // Comenzar una transacción 
  $db->beginTransaction();

  // Buscar el producto en la tabla de productos
  $stmt = $db->prepare('SELECT cantidad FROM productos WHERE nombre = :nombre');
  $stmt->bindParam(':nombre', $_POST['nombre']);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  // Si el producto existe, actualizar la cantidad
  if ($row !== false) {
    // Calcular la nueva cantidad
    $nueva_cantidad = $row['cantidad'] - $_POST['cantidad'];

    // Verificar que no se pueda actualizar la cantidad a un valor negativo
    if ($nueva_cantidad < 0) {
      throw new Exception('No hay suficiente cantidad de ' . $_POST['nombre'] . ' en el inventario.');
    }

    // Actualizar la cantidad del producto en la tabla de productos
    $stmt = $db->prepare('UPDATE productos SET cantidad = :cantidad WHERE nombre = :nombre');
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':cantidad', $nueva_cantidad);
    $stmt->execute();
	
	// Mostrar mensaje de éxito
	echo "La cantidad de ".$_POST['nombre']." se actualizó correctamente.";

  } else {
    // Si el producto no existe, lanzar una excepción
    throw new Exception('No se encontró ' . $_POST['nombre'] . ' en el inventario.');
  }

  // Preparar una sentencia SQL para insertar un nuevo registro en la tabla de productos
  $stmt = $db->prepare('INSERT INTO receta (codigo, producto, cantidad, npastel) VALUES (:codigo, :producto, :cantidad, :npastel)');

  // Asignar valores a los parámetros de la sentencia SQL
  $stmt->bindParam(':codigo', $_POST['codigo']);
  $stmt->bindParam(':npastel', $_POST['npastel']);
  $stmt->bindParam(':producto', $_POST['producto']);
  $stmt->bindParam(':cantidad', $_POST['cantidad']);

  // Ejecutar la sentencia SQL
  $stmt->execute();

  // Confirmar la transacción
  $db->commit();

  // Cerrar la conexión a la base de datos
  $db = null;

  // Redireccionar al usuario a una página de éxito
  header('Location: ../html/recetas.php');
} catch (PDOException $e) {
  // Deshacer la transacción si hay un problema
  if ($db !== null) {
    $db->rollback();
  }

  // Mostrar un mensaje de error si hay un problema con la conexión a la base de datos
  echo "Error al conectar a la base de datos: " . $e->getMessage();
} catch (Exception $e) {
  // Mostrar un mensaje de error si hay un problema con la actualización de la cantidad del producto
  echo "Error al actualizar la cantidad del producto: " . $e->getMessage();
}
?>
