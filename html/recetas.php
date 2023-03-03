<!DOCTYPE html>
<html>

<head>
  <title>Recetas</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/estilo1.css">
  <link rel="icon" type="image/png" href="../img/logo.png" />
  <style>
    .boton-generar {
      background-color: #0ec6d3;
      /* Color de fondo */
      border: none;
      /* Sin borde */
      color: white;
      /* Color de texto */
      padding: 10px 20px;
      /* Espacio alrededor del texto */
      text-align: center;
      /* Alinear el texto al centro */
      text-decoration: none;
      /* Sin subrayado */
      display: inline-block;
      /* Mostrar como bloque en línea */
      font-size: 16px;
      /* Tamaño de letra */
      margin: 4px 2px;
      /* Margen superior e inferior y margen izquierdo y derecho */
      cursor: pointer;
      /* Cambiar el cursor al pasar el ratón */
      border-radius: 8px;
      /* Redondear bordes */
    }
  </style>
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
  <h2>Pastel de chocolate (16 porciones)</h2>
  <center><img src="../img/pastelchocolate.png" style="width: 40%;"></center>
  <br>
  <label for="cantidad">Información de la orden:</label>
      <input type="hidden" id="producto" name="producto" value="Pastel de Chocolate">
      <input type="number" id="cantidad" name="cantidad" required autofocus style="width: 170px;" placeholder="Cantidad de pasteles">
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
    <input type="number" id="cantidad" name="cantidad" style="width: 150px;" placeholder="Cantidad"><br>
    <input type="submit" value="Generar Orden de Producción">
      </form>
    </div>
    </form>
  </div>
  <br>

  <div id="receta2">
  <form action="../php/restarInventario.php" method="post">
  <h2>Pastel de naranja (16 porciones)</h2>
  <center><img src="../img/pastelNaranja.png" style="width: 40%;"></center>
  <br>
  <label for="cantidad">Información de la orden:</label>
      <input type="hidden" id="producto" name="producto" value="Pastel de Naranja">
      <input type="number" id="cantidad" name="cantidad" required autofocus style="width: 170px;" placeholder="Cantidad de pasteles">
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
    <input type="number" id="cantidad" name="cantidad" style="width: 150px;" placeholder="Cantidad"><br>
    <input type="submit" value="Generar Orden de Producción">
      </form>
    </div>
    </form>
  </div>
  <br>

  <div id="receta3">
  <form action="../php/restarInventario.php" method="post">
  <h2>Pastel de Limon (16 porciones)</h2>
  <center><img src="../img/pastelLimon.jpeg" style="width: 40%;"></center>
  <br>
  <label for="cantidad">Información de la orden:</label>
      <input type="hidden" id="producto" name="producto" value="Pastel de Limon">
      <input type="number" id="cantidad" name="cantidad" required autofocus style="width: 170px;" placeholder="Cantidad de pasteles">
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
    <input type="number" id="cantidad" name="cantidad" style="width: 150px;" placeholder="Cantidad"><br>
    <input type="submit" value="Generar Orden de Producción">
      </form>
    </div>
    </form>
  </div>
  <br>

  <div id="receta1">
  <form action="../php/restarInventario.php" method="post">
  <h2>Pastel de Vainilla (16 porciones)</h2>
  <center><img src="../img/pastelVainilla.jpeg" style="width: 40%;"></center>
  <br>
  <label for="cantidad">Información de la orden:</label>
      <input type="hidden" id="producto" name="producto" value="Pastel de Vainilla">
      <input type="number" id="cantidad" name="cantidad" required autofocus style="width: 170px;" placeholder="Cantidad de pasteles">
      <input type="text" id="campo_codigo" name="codigo" placeholder="Ingrese un código" style="width: 360px;">
      <label for="nombre" >Ingrediente 1:</label>
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
    <input type="number" id="cantidad" name="cantidad" style="width: 150px;" placeholder="Cantidad"><br>
    <input type="submit" value="Generar Orden de Producción">
      </form>
    </div>
    </form>
  </div>
  <br>

  <div id="receta1">
  <form action="../php/restarInventario.php" method="post">
  <h2>Pastel de Crema Pastelera (16 porciones)</h2>
  <center><img src="../img/pastelCremaPastelera.jpg" style="width: 40%;"></center>
  <br>
  <label for="cantidad">Información de la orden:</label>
      <input type="hidden" id="producto" name="producto" value="Pastel de Crema Pastelera">
      <input type="number" id="cantidad" name="cantidad" required autofocus style="width: 170px;" placeholder="Cantidad de pasteles">
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
    <input type="number" id="cantidad" name="cantidad" style="width: 150px;" placeholder="Cantidad"><br>
    <input type="submit" value="Generar Orden de Producción">
      </form>
    </div>
    </form>
  </div>


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