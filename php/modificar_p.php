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
     <!--Barra de navegación-->
  <header>
    <div class="navbar-container">
    </div>
  </header>
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
 <!-- Script que carga la barra de navegación-->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function(){
      $('.navbar-container').load('../html/navbar.html');
    });
  </script>
</html>