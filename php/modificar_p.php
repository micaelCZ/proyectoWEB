<!DOCTYPE html>
<html>
  <head>
    <title>Modificar proveedores</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo1.css">
     <link rel="stylesheet" href="../css/estilo2.css">
    <link rel="icon" type="image/png" href="../img/logo.png"/>
  </head>
  <body>
    <div class="navbar">
      <a href="../html/inicio.html">Inicio</a>
      <div class="dropdown">
        <button class="dropbtn">Productos
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="../html/mPrima.html">Agregar Producto</a>
          <a href="../html/productos.html">Ver Productos</a>
          <a href="obtenerTabla.php">Modificar Productos</a>
        </div>
      </div>
            <div class="dropdown">
        <button class="dropbtn">Proveedores
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="../html/proveedores.html">Agregar Proveedor</a>
          <a href="../html/verproveedores.html">Ver Proveedores</a>
          <a href="../php/modificar_p.php">Modificar Proveedores</a>
        </div>
      </div>
      <a href="../html/recetas.html">Recetas</a>
      <a href="../php/oProduccion.php">Ordenes de Produccion</a>
      <a href="../html/informes.html">Informes</a>
      <div id="fecha-hora">Usuario: admin - Fecha y hora: <time datetime=""></time></div>
    </div>
<br>

  <h2>Lista de proveedores</h2>
  <br>

  <?php
  //Conexión a la base de datos
  $db = new PDO('sqlite:../db/materiaPrima.db');

  //Consulta para obtener los productos
  $query = "SELECT * FROM proveedores";
  $result = $db->query($query);

  //Imprimir los resultados en una tabla
  echo "<table class='tabla'>";
  echo "<tr><th>ID</th><th>Nombre</th><th>Direccion</th><th>Telefono</th><th>Correo</th><th>Editar</th><th>Eliminar</th></tr>";
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nombre']."</td>";
    echo "<td>".$row['direccion']."</td>";
	echo "<td>".$row['telefono']."</td>";
    echo "<td>".$row['correo']."</td>";
    echo "<td><a href='editarProveedores.php?id=".$row['id']."'>Editar</a></td>";
    echo "<td><a href='eliminarProveedores.php?id=".$row['id']."'>Eliminar</a></td>";
    echo "</tr>";
  }
  echo "</table>";

  //Cerrar la conexión a la base de datos
  $db = null;
  ?>
  
  
    <footer id="pie">
        <p>Pastelería Le Postré © 2023 - Todos los derechos reservados</p>
    </footer>
</body>
</html>