<?php
// Conexión a la base de datos utilizando PDO
$db = new PDO('sqlite:../db/materiaPrima.db');

// Obtener la cantidad de chocolate disponible en la base de datos
$stmt = $db->prepare('SELECT cantidad FROM productos WHERE nombre = "Chocolate"');
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$cantidad_chocolate_disponible = $row['cantidad'];

// Calcular la cantidad de chocolate necesaria para hacer los pasteles
$cantidad_chocolate_necesario = $_POST['cantidad'] * 300;

// Restar la cantidad de chocolate necesario de la cantidad de chocolate disponible
$nueva_cantidad_chocolate = $cantidad_chocolate_disponible - $cantidad_chocolate_necesario;

// Actualizar la cantidad de chocolate en la base de datos
$stmt = $db->prepare('UPDATE productos SET cantidad = :nueva_cantidad_chocolate WHERE nombre = "Chocolate"');
$stmt->bindParam(':nueva_cantidad_chocolate', $nueva_cantidad_chocolate, PDO::PARAM_INT);
$stmt->execute();




// Obtener la cantidad de mantequilla disponible en la base de datos
$stmt = $db->prepare('SELECT cantidad FROM productos WHERE nombre = "Mantequilla"');
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$cantidad_mantequilla_disponible = $row['cantidad'];

// Calcular la cantidad de mantequilla necesaria para hacer los pasteles
$cantidad_mantequilla_necesario = $_POST['cantidad'] * 90;

// Restar la cantidad de mantequilla necesario de la cantidad de mantequilla disponible
$nueva_cantidad_mantequilla = $cantidad_mantequilla_disponible - $cantidad_mantequilla_necesario;

// Actualizar la cantidad de mantequilla en la base de datos
$stmt = $db->prepare('UPDATE productos SET cantidad = :nueva_cantidad_mantequilla WHERE nombre = "Mantequilla"');
$stmt->bindParam(':nueva_cantidad_mantequilla', $nueva_cantidad_mantequilla, PDO::PARAM_INT);
$stmt->execute();







// Obtener la cantidad de Leche Condensada disponible en la base de datos
$stmt = $db->prepare('SELECT cantidad FROM productos WHERE nombre = "Leche Condensada"');
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$cantidad_lechecondensada_disponible = $row['cantidad'];

// Calcular la cantidad de Leche Condensada necesaria para hacer los pasteles
$cantidad_lechecondensada_necesario = $_POST['cantidad'] * 387;

// Restar la cantidad de Leche Condensada necesario de la cantidad de Leche Condensada disponible
$nueva_cantidad_lechecondensada = $cantidad_lechecondensada_disponible - $cantidad_lechecondensada_necesario;

// Actualizar la cantidad de Leche Condensada en la base de datos
$stmt = $db->prepare('UPDATE productos SET cantidad = :nueva_cantidad_lechecondensada WHERE nombre = "Leche Condensada"');
$stmt->bindParam(':nueva_cantidad_lechecondensada', $nueva_cantidad_lechecondensada, PDO::PARAM_INT);
$stmt->execute();










// Obtener la cantidad de Huevos disponible en la base de datos
$stmt = $db->prepare('SELECT cantidad FROM productos WHERE nombre = "Huevos"');
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$cantidad_Huevos_disponible = $row['cantidad'];

// Calcular la cantidad de Huevos necesaria para hacer los pasteles
$cantidad_Huevos_necesario = $_POST['cantidad'] * 3;

// Restar la cantidad de Huevos necesario de la cantidad de Huevos disponible
$nueva_cantidad_Huevos = $cantidad_Huevos_disponible - $cantidad_Huevos_necesario;

// Actualizar la cantidad de Huevos en la base de datos
$stmt = $db->prepare('UPDATE productos SET cantidad = :nueva_cantidad_Huevos WHERE nombre = "Huevos"');
$stmt->bindParam(':nueva_cantidad_Huevos', $nueva_cantidad_Huevos, PDO::PARAM_INT);
$stmt->execute();








// Obtener la cantidad de Harina de Trigo disponible en la base de datos
$stmt = $db->prepare('SELECT cantidad FROM productos WHERE nombre = "Harina de Trigo"');
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$cantidad_HarinadeTrigo_disponible = $row['cantidad'];

// Calcular la cantidad de Harina de Trigo necesaria para hacer los pasteles
$cantidad_HarinadeTrigo_necesario = $_POST['cantidad'] * 454;

// Restar la cantidad de Harina de Trigo necesario de la cantidad de Harina de Trigo disponible
$nueva_cantidad_HarinadeTrigo = $cantidad_HarinadeTrigo_disponible - $cantidad_HarinadeTrigo_necesario;

// Actualizar la cantidad de Harina de Trigo en la base de datos
$stmt = $db->prepare('UPDATE productos SET cantidad = :nueva_cantidad_HarinadeTrigo WHERE nombre = "Harina de Trigo"');
$stmt->bindParam(':nueva_cantidad_HarinadeTrigo', $nueva_cantidad_HarinadeTrigo, PDO::PARAM_INT);
$stmt->execute();






// Obtener la cantidad de Levadura disponible en la base de datos
$stmt = $db->prepare('SELECT cantidad FROM productos WHERE nombre = "Levadura"');
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$cantidad_Levadura_disponible = $row['cantidad'];

// Calcular la cantidad de Levadura necesaria para hacer los pasteles
$cantidad_Levadura_necesario = $_POST['cantidad'] * 10;

// Restar la cantidad de Levadura necesario de la cantidad de Levaduradisponible
$nueva_cantidad_Levadura = $cantidad_Levadura_disponible - $cantidad_Levadura_necesario;

// Actualizar la cantidad de Levadura en la base de datos
$stmt = $db->prepare('UPDATE productos SET cantidad = :nueva_cantidad_Levadura WHERE nombre = "Levadura"');
$stmt->bindParam(':nueva_cantidad_Levadura', $nueva_cantidad_Levadura, PDO::PARAM_INT);
$stmt->execute();






// Cerrar la conexión con la base de datos
$db = null;
?>
