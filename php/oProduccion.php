<!DOCTYPE html>
<html>
  <head>
    <title>Ordenes de Producción</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilo1.css">
     <link rel="stylesheet" href="../css/estilo2.css">
     <link rel="icon" type="image/png" href="../img/logo.png"/>
    
  </head>
  <body>
    <!--Barra de navegación-->
    <header>
    <div class="navbar-container">
    </div>
  </header>
<br>

  <h2>Lista de órdenes de producción</h2>
  <br>

  <?php
  //Conexión a la base de datos
  $db = new PDO('sqlite:../db/materiaPrima.db');

  //Consulta para obtener los productos
  $query = "SELECT * FROM recetaspasteles";
  $result = $db->query($query);

  //Imprimir los resultados en una tabla
  echo "<table class='tabla'>";
  echo "<tr><th>ID</th><th>Nombre Pastel</th><th>Precio</th><th>Editar</th><th>Eliminar</th></tr>";
  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nombrep']."</td>";
    echo "<td>".$row['precio']."</td>";
    echo "<td><a href='editarOrdenes.php?id=".$row['id']."'>Editar</a></td>";
    echo "<td><a href='eliminarOrdenes.php?id=".$row['id']."'>Eliminar</a></td>";
    echo "</tr>";
  }
  echo "</table>";

  //Cerrar la conexión a la base de datos
  $db = null;
  ?>
  
  
    <footer id="pie">
        <p>Pastelería Le Postré © 2023 - Todos los derechos reservados</p>
    </footer>
    <script src="../js/fechaHora.js"></script>
</body>
<!-- Script que carga la barra de navegación-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function(){
      $('.navbar-container').load('../html/navbar.html');
    });
  </script>
</html>