<?php
//Conexión a la base de datos
$db = new PDO('sqlite:../db/materiaPrima.db');

//Consulta para obtener los productos
$query = "SELECT * FROM productos";
$result = $db->query($query);

//Imprimir los resultados en una tabla
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['nombre']."</td>";
  echo "<td>".$row['cantidad']."</td>";
  echo "<td>".$row['unidad']."</td>";
  echo "<td>".$row['fecha_vencimiento']."</td>";
    echo "<td><a href='editar.php?id=".$row['id']."'>Editar</a></td>";
    echo "<td><a href='eliminar.php?id=".$row['id']."'>Eliminar</a></td>";
  echo "</tr>";
}

//Cerrar la conexión a la base de datos
$db = null;

?>
