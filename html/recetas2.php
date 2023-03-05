<!DOCTYPE html>
<html>
<head>
  <title>Recetas</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/estilo1.css">
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
      <h2> Puedes crear una receta aquí.</h2>
      <button type="button" class="boton-agregar" onclick="window.location.href='../html/addReceta.html'">Agregar receta</button>
    </form>
  </center>
  <br>
  <br>
  <div id="receta1">
  <form action="../php/restarInventario.php" method="post">
    <h2>Pastel de chocolate (16 porciones)</h2>
    <center><img src="../img/pastelchocolate.png" style="width: 40%;"></center>
    <br>
    <label for="cantidad">Información de la orden:</label>
    <input type="hidden" id="producto" name="producto" value="Pastel de Chocolate">
    <input type="number" id="cantidad-pasteles" name="cantidad" min=0 required autofocus style="width: 170px;" placeholder="Cantidad de pasteles" onchange="calcularCantidadIngredientes()">
    <input type="text" id="campo_codigo" name="codigo" placeholder="Ingrese un código" style="width: 360px;">
    <!-- Ingrediente 1 -->
    <label for="nombre">Ingredientes:</label>
    
    
    
    
    <select name="nombre" id="nombre1" style="width: 300px;" readonly disabled>
      <?php
      // Conexión a la base de datos utilizando PDO
      $db = new PDO('sqlite:../db/materiaPrima.db');
      // Consulta para obtener los nombres de los productos
      $stmt = $db->prepare('SELECT nombre FROM productos WHERE nombre = "Chocolate"');
      $stmt->execute();
      // Recorrer los resultados de la consulta y crear una opción en la lista desplegable para cada producto
      while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nombre'] . '">' . $row['nombre'] . '</option>';
      }
      // Cerrar la conexión a la base de datos
      $db = null;
      ?>
    </select>
    <input type="number" id="cantidad1" name="cantidad" style="width: 300px;" placeholder="Cantidad" value="3" readonly>
    <select name="unidad" id="unidad1" style="width: 300px;" readonly disabled>
    </select>
    <br>
    <br>
    
    <select name="nombre" id="nombre2" style="width: 300px;" value="Harina" placeholder="Cantidad" readonly disabled>
    </select>
    <input type="number" id="cantidad2" name="cantidad" style="width: 300px;" placeholder="Cantidad" value="3" readonly>
    <select name="unidad" id="unidad2" style="width: 300px;" readonly disabled>
    </select>
    <br>
    <br>

    <select name="nombre" id="nombre3" style="width: 300px;" readonly disabled>
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
    <input type="number" id="cantidad3" name="cantidad" style="width: 300px;" placeholder="Cantidad" value="3" readonly>
    <select name="unidad" id="unidad3" style="width: 300px;" readonly disabled>
    </select>
    <br>
    <br>

    <select name="nombre" id="nombre4" style="width: 300px;" readonly disabled>
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
    <input type="number" id="cantidad4" name="cantidad" style="width: 300px;" placeholder="Cantidad" value="3" readonly>
    <select name="unidad" id="unidad4" style="width: 300px;" readonly disabled>
    </select>
    <br>
    <br>


    <select name="nombre" id="nombre5" style="width: 300px;" readonly disabled>
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
    <input type="number" id="cantidad5" name="cantidad" style="width: 300px;" placeholder="Cantidad" value="3" readonly>
    <select name="unidad" id="unidad5" style="width: 300px;" readonly disabled>
    </select>
    <br>
    <br>

    <select name="nombre" id="nombre6" style="width: 300px;" readonly disabled>
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
    <input type="number" id="cantidad6" name="cantidad" style="width: 300px;" placeholder="Cantidad" value="3" readonly>
    <select name="unidad" id="unidad6" style="width: 300px;" readonly disabled>
    </select>
    <br>
    <br>
    
    <button type="submit" class="boton-guardar" name="guardar-orden">Guardar orden de compra</button>
    </form>
    <script>
    function calcularCantidadIngredientes() {
        const cantidadPasteles = document.getElementById("cantidad-pasteles").value;
        document.getElementById("cantidad1").value = cantidadPasteles *3;
        document.getElementById("cantidad2").value = cantidadPasteles *5;
        document.getElementById("cantidad3").value = cantidadPasteles *2;
        document.getElementById("cantidad4").value = cantidadPasteles *4;
        document.getElementById("cantidad5").value = cantidadPasteles *6;
        document.getElementById("cantidad6").value = cantidadPasteles *3;
    }
    </script>


</body>
</html>