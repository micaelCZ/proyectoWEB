<?php
try {
    // Conexión a la base de datos utilizando PDO
    $db = new PDO('sqlite:../db/materiaPrima.db');
  
    // Obtener todos los productos de la tabla
    $stmt = $db->query('SELECT * FROM proveedores');
    $proveedores = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
    // Convertir los datos a formato JSON con la opción JSON_PRETTY_PRINT
    $json = json_encode($proveedores, JSON_PRETTY_PRINT);
  
    // Guardar los datos en un archivo JSON
    file_put_contents('../json/proveedores.json', $json);
  
    // Cerrar la conexión a la base de datos
    $db = null;
  
    //Volver a la página de productos
      header('Location: ../html/verproveedores.html');
  
  } catch (PDOException $e) {
    // Mostrar un mensaje de error si hay un problema con la conexión a la base de datos
    echo "Error al conectar a la base de datos: " . $e->getMessage();
  }
  
?>
