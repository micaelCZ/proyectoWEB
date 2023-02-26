<!DOCTYPE html>
<html>
  <head>
    <title>Modificar Productos</title>
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
        <button class="dropbtn">Categorias
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="../html/categorias.html">Agregar Categoria</a>
          <a href="../html/vercategorias.html">Ver Categorias</a>
          <a href="obtenerTabla.php">Modificar Categorias</a>
        </div>
      </div>
      <div class="dropdown">
        <button class="dropbtn">Proveedores
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="../html/proveedores.html">Agregar Proveedor</a>
          <a href="../html/verproveedores.html">Ver Proveedores</a>
          <a href="obtenerTabla.php">Modificar Proveedores</a>
        </div>
      </div>
      <a href="../html/recetas.html">Recetas</a>
      <a href="../html/oProduccion.html">Ordenes de Produccion</a>
      <a href="../html/informes.html">Informes</a>
      <div id="fecha-hora">Usuario: admin - Fecha y hora: <time datetime=""></time></div>
    </div>
<br>

  <h2>Lista de productos</h2>
  <br>

  <?php
  //Conexión a la base de datos
  $db = new PDO('sqlite:../db/materiaPrima.db');

  //Consulta para obtener los productos
  $query = "SELECT * FROM productos";
  $result = $db->query($query);

  //Imprimir los resultados en una tabla
  echo "<table class='tabla'>";
  echo "<tr><th>ID</th><th>Nombre</th><th>Cantidad</th><th>Unidad</th><th>Fecha de vencimiento</th><th>Editar</th><th>Eliminar</th></tr>";
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
  echo "</table>";

  //Cerrar la conexión a la base de datos
  $db = null;
  ?>
  
  
    <footer id="pie">
        <p>Pastelería Le Postré © 2023 - Todos los derechos reservados</p>
    </footer>
</body>
</html>