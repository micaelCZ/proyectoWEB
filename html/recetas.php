<!DOCTYPE html>
<html>

<head>
  <title>Recetas</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/estilo1.css">
  <link rel="stylesheet" href="../css/estilo4.css">
  <link rel="icon" type="image/png" href="../img/logo.png" />
 </head>
<!--Barra de navegación-->
<header>
    <div class="navbar-container">
    </div>
  </header>
<body>
  <br>
  <br>

  <center>
    <form>
      <h2> Puedes generar un código aleatorio aquí. También puedes ingresar un código manual en su lugar</h2><button type="button" class="boton-generar" onclick="document.getElementById('campo_codigo').value = generarCodigo1()">Generar código</button><input type="text" id="campo_codigo" name="codigo" placeholder="Presione el botón GENERAR CODIGO" style="width: 360px;">
    </form>
  </center>
  <br>


  <div id="receta1">
  <form action="../php/restarInventario.php" method="post">
  <h2>Agregar Receta</h2>
  <br>
  <label for="cantidad">Información del pastel:</label>
      <input type="hidden" id="producto" name="producto" value="Pastel">
      <input type="text" id="npastel" name="npastel" required autofocus >
      <input type="number" id="cantidad" name="cantidad" required style="width: 170px;" placeholder="Cantidad de pasteles">
      <input type="text" id="campo_codigo" name="codigo" placeholder="Ingrese un código" style="width: 360px;">
      <label for="nombre">Ingrediente 1:</label>
    <select name="nombre" id="nombre" style="width: 350px;">
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <input type="number" id="cantidad" name="cantidad" style="width: 150px;" placeholder="Cantidad"><br>
    <!-- Ingrediente 2 -->
    <label for="nombre" >Ingrediente 2:</label>
    <select name="nombre" id="nombre" style="width: 350px;">
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <input type="number" id="cantidad" name="cantidad" style="width: 150px;" placeholder="Cantidad"><br>
    <!-- Ingrediente 3 -->
    <label for="nombre" >Ingrediente 3:</label>
    <select name="nombre" id="nombre" style="width: 350px;">
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>

<input type="number" id="cantidad3" name="cantidad3" style="width: 150px;" placeholder="Cantidad"><br>
    <input type="submit" value="Generar Orden de Producción">
      </form>
    </div>
    </form>
  </div>
  <br>

  


  <script src="../js/fechaHora.js"></script>
  <script src="../js/codigos.js"></script>
  <!-- Script que carga la barra de navegación-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(function(){
      $('.navbar-container').load('navbar.html');
    });
  </script>
  
  <footer id="pie">
    <p>Pastelería Le Postré © 2023 - Todos los derechos reservados</p>
  </footer>
   
</body>

</html>